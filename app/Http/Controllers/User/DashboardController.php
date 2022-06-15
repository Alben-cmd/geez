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
use App\Message;


class DashboardController extends Controller
{

    public function index()
    {
        $my_clothes = Wishlist::where('user_id', Auth::id())->get();
        $subscribe = Subscribe::where('user_id', Auth::id())->get();
        return view('user.index', compact('my_clothes', 'subscribe'));
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

    public function sendMaleMeasure(Request $request)
    {

        $array = collect([
            'male_name' =>'Male Name->'. $request->male_name,
            'shoulder' =>'Shoulder->'. $request->shoulder,
            'chest' =>'Chest->'. $request->chest,
            'wrist' =>"Wrist->". $request->wrist,
            'throuser_length' => 'Throuser Length->'. $request->throuser_length,
            'm_others' =>'Others->'. $request->m_others,
            'top_length' => 'Top Length->'. $request->top_length,
            'arm_length' =>'Arm Length->'. $request->arm_length,
            'lap' =>'Lap->'. $request->lap,
            'neck' =>'Neck->'. $request->neck
        ]);
        $joining = $array->implode(', ', ' ');

        $messure = new Message();
        $messure->conversation_id = $request->conversation_id;
        $messure->user_id = auth()->id();
        $messure->body = $joining;

        $messure->save();
        return redirect()->back();
    }

    public function sendFemaleMeasure(Request $request)
    {
        $array = collect([
            'female_name' =>'Female Name->'. $request->female_name,
            'shoulder' =>'Shoulder->'. $request->shoulder,
            'chest' =>'Chest->'. $request->chest,
            'round_slip' =>"Round Slip->". $request->round_slip,
            'throuser_length' => 'Throuser Length->'. $request->throuser_length,
            'f_others' =>'Others->'. $request->f_others,
            'sleeve_length' => 'Sleeve Length->'. $request->sleeve_length,
            'hips' =>'Hips->'. $request->hips,
            'top_length' =>'Top Length->'. $request->top_length,
            'arm_length' =>'Arm Length->'. $request->arm_length,
            'tommy' =>'Tommy->'. $request->tommy,
            'gown_length' =>'Gown Length->'. $request->gown_length,
            
        ]);
        $joining = $array->implode(', ', ' ');

        $messure = new Message();
        $messure->conversation_id = $request->conversation_id;
        $messure->user_id = auth()->id();
        $messure->body = $joining;

        $messure->save();
        return redirect()->back();
    }

    public function storecomment(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'comment'  => 'required',
            'stars_rated' => 'required',

            ]);
           
            $comment = new Comment();

            $comment->name =$request->name; 
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->stars_rated = $request->stars_rated;
            $comment->cloth_id = $request->cloth_id;
            $comment->user_id = Auth::id();
            $comment->approved = 1;

            $comment->save();

            return redirect()->back()->with('success', 'Thanks for your review!');
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
