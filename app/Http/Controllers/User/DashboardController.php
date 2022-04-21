<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth; 
use Session;
use App\Comment;
use App\Subscribe;
use App\Wishlist;
use App\Order;
use App\Conversation;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function subscribed()
    {
        $subscribe = Subscribe::where('user_id', Auth::id())->get();
        return view('user.subscribed', compact('subscribe'));
    }

    public function my_clothes()
    {
        $my_clothes = Wishlist::where('user_id', Auth::id())->get();
        return view('user.saved_clothes', compact('my_clothes'));
    }

    public function messaging()
    {
        return view('user.message');
    }

    public function storecomment(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'comment'  => 'required',

            ]);
           
            $comment = new Comment();

            $comment->name =$request->name; 
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->cloth_id = $request->cloth_id;
            $comment->approved = 1;

            $comment->save();

            return redirect()->back()->with('success', 'Thanks for Sharing!');
    }

    public function message_tailor($tailor_id)
    {
      
        $conversation = Conversation:: firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $tailor_id,
        ]);
        Session::flash('success', 'Chat with the Designer');
        return redirect()->route('user.messaging')->with('selectedConversation', $conversation);

    }

    public function payment_history()
    {
        $history = Order::where('user_id', Auth::id())->get();
        return view('user.payment_history', compact('history'));
    }
}
