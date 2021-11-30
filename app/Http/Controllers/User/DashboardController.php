<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth; 
use App\Comment;
use App\Subscribe;
use App\Wishlist;

class DashboardController extends Controller
{
    public function index()
    {
        $profile = User::where('id' , Auth::id())->first();
        $subscribe = Subscribe::where('user_id', Auth::id())->get();
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('user.index', compact('profile', 'subscribe', 'wishlist'));
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
}
