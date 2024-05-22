<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;

class ChatBox extends Component
{
    public $selectedConversation;
    public $body;
    public $loadedMessages;
    protected $listeners = ['refresh' => '$refresh'];
    

    public function loadMessages()
    {
        $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)->get();
    }

    public function sendMessage()
    {

        $this->validate(['body' => 'required|string']);


        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $this->selectedConversation->getReceiver()->id,
            'body' => $this->body

        ]);


        $this->reset('body');

        # Cuộn xuống tin nhắn vừa gửi
        $this->dispatch('scroll-bottom');

        # Gửi
        $this->loadedMessages->push($createdMessage);

        # Cập nhật cuộc đối thoại, làm lên đầu danh sách chat
        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();

        # Load lại danh sách chat
        $this->dispatch('refresh')->to('chat.chat-list');


        // dd($this->body);
    }

    public function mount()
    {

        $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}
