<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Order;
use Auth;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $order = new Order();

           $order->user_id = Auth::user()->id;
           $order->amount = $request->amount;
           $order->reference = $request->reference;
           $order->status = 0;
           $order->save();
        
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
        $paymentDetails = Paystack::getPaymentData();
        // dd($paymentDetails);   
        $order = Order::where('reference', request()->reference)->first();
        dd($order);
        $order->status = 1;
        $order->save();
        

        return redirect()->route('user.dashboard')->with('success', 'Payment Successful!');        
    }
}
