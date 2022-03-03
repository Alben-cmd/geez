<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Subscribe;
use Auth;
use App\Conversation;

class Designers extends Component
{
    public function render()
    {
        $subscribe = Subscribe::where('user_id', Auth::id())->get();
        return view('livewire.user.designers', compact('subscribe'));
    }

    public function startConversation($userId)
    {
        Conversation::firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId,

        ]);
        return redirect('user/dashboard#messaging');
    }
}
