<?php

namespace App\Livewire;

use App\Models\Chats;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;

class ChatWindow extends Component
{
    use WithFileUploads;

    public $chatId;
    public $messages = [];
    public $newMessage = '';
    public $attachment;

    protected $listeners = ['chatSelected' => 'loadChat'];

    #[On('messageSent')]
    public function handleMessageSent($chatId)
    {
        if ($this->chatId == $chatId) {
            $this->loadMessages();
            $this->markMessagesRead();
        }
    }

    public function loadChat($chatId)
    {
        $this->chatId = $chatId;
        $this->loadMessages();
        $this->markMessagesRead();
    }

    public function loadMessages()
    {
        $this->messages = Messages::where('chat_id', $this->chatId)
            ->orderBy('created_at')
            ->get();
    }

    public function sendMessage()
    {
        $this->validate([
            'newMessage' => 'nullable|string|max:1000',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120', // max 5MB
        ]);

        if (empty($this->newMessage) && !$this->attachment) {
            return; // Nothing to send
        }

        $messageData = [
            'chat_id' => $this->chatId,
            'sender_id' => Auth::id(),
            'content' => $this->newMessage ?: null,
            'attachment' => null,
            'read' => false,
        ];

        if ($this->attachment) {
            $path = $this->attachment->store('chat_attachments', 'public');
            $messageData['attachment'] = $path;
        }

        Messages::create($messageData);

        $this->newMessage = '';
        $this->attachment = null;

        // Reload messages
        $this->loadMessages();

        // Update chat timestamp
        $chat = Chats::find($this->chatId);
        $chat?->touch();

        // Notify other components
        $this->dispatch('messageSent', chatId: $this->chatId);
    }

    public function markMessagesRead()
    {
        Messages::where('chat_id', $this->chatId)
            ->where('sender_id', '!=', Auth::id())
            ->where('read', false)
            ->update(['read' => true]);

        $this->dispatch('messageSent', chatId: $this->chatId);
    }

    public function render()
    {
        return view('livewire.chat-window');
    }
}
