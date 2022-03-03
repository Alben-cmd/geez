<?php

namespace App\Http\Livewire\User\Messages;

use Livewire\Component;
use App\Conversation;
use App\Message;

class ConversationMessages extends Component
{
    public $selectedConversation;
    public $body;

    public function mount()
    {
        if(session()->has('selectedConversation')){
            return $this->selectedConversation = session('selectedConversation');
        }
        $this->selectedConversation = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->first();
    }

    public function sendMessage()
    {
        Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'user_id' => auth()->id(),
            'body' => $this->body
        ]);

        $this->reset('body');

        $this->viewMessage($this->selectedConversation->id);
    }

    public function viewMessage($conversationId)
        {
            $this->selectedConversation = Conversation::findOrFail($conversationId);
        }

    public function render()
    {

        $conversations = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->get();
        return view('livewire.user.messages.conversation-messages', compact('conversations'));
    }

    

}
