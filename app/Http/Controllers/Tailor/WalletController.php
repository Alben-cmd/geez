<?php

namespace App\Http\Controllers\Tailor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Auth;
use App\Order;
use App\User;
use Paystack;

class WalletController extends Controller
{

    public function wallet()
    {
        $user = User::find(auth()->id());
        $walletBalance = $user->balance;
        
        $transactions = DB::table('transactions')->where('payable_id', auth()->id())->latest()->take(20)->get();    
        
        return view('tailor.wallet.index', compact('walletBalance', 'transactions'));
    }

    public function getBalance()
    {
        $user = User::find(8);
        $user->deposit(10);
        return $user->balance; // 0
    }

    public function createOrder(Request $request)
    {

        $this->validate($request, [
            'amount' => 'required|numeric|gt:1000'
        ]);
        
        $transRef = Str::random(8);

        $order = new Order();

        $order->user_id = Auth::user()->id;
        $order->amount = $request->amount;
        $order->orderID = $transRef;
        $order->status = 0;
        $order->description = 'Fund wallet';
        $order->reference = Paystack::genTranxRef();
        $order->save();

        
        return view('user.wallet.fund', compact('order'));
        
    }

    public function redirectToGateway(Request $request)
    {
        
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {

            return Redirect::back()->with('success','The paystack token has expired. Please refresh the page and try again.');
        
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $user = User::find(auth()->id());
        $paymentDetails = Paystack::getPaymentData();
        
        if ($paymentDetails['data']['status'] = 'successful') {
            $order = Order::where('reference', request()->reference)->first();
            $order->status = 1;
            $order->save();  
            $user->deposit($order->amount);
        
        }else{
            return redirect()->back()->with('error', 'Payment Unsuccessful, Try again!');
        }
        

        return redirect()->route('user.wallet')->with('success', 'Payment Successful, Try again!');        
    }

}
