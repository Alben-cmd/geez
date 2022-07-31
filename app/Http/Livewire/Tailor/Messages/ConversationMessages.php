<?php

namespace App\Http\Livewire\Tailor\Messages;

use Livewire\Component;
use App\Conversation;
use App\Message;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ConversationMessages extends Component
{
    use WithFileUploads;
    public $selectedConversation;
    public $body;
    public $image;

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

        public function uploadImages()
        {
            $validatedData = $this->validate([
                'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
            ]);

            $name = Carbon::now()->timestamp. '.' .$this->image->extension();
            $dis_name = '<img  src="'.url('/').'/storage/'.$name.'"alt="image" width="100" height="150">';

            $imageName = $this->image->storeAs("image", $name);
 
        Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'user_id' => auth()->id(),
            'body' => $dis_name
        ]);

        $this->viewMessage($this->selectedConversation->id);
           
        }
    public function render()
    {
        $conversations = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->get();
        return view('livewire.tailor.messages.conversation-messages', compact('conversations'));
    }
}
