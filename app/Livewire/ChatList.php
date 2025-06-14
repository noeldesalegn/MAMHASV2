<?php

namespace App\Livewire;

use App\Http\Livewire\Chat;
use App\Models\Chats;
use Livewire\Component;

class ChatList extends Component
{
    public $chats;
    public $selectedChatId;

    public function mount()
    {
        $this->loadChats();
    }

    public function loadChats()
    {
        $user = auth()->user();

        if ($user->user_account_type === 'physician') {
            $this->chats = Chats::with(['patient', 'messages'])
                ->where('physician_id', $user->id)
                ->orderByDesc('updated_at')
                ->get();
        } else {
            $this->chats = Chats::with(['physician', 'messages'])
                ->where('patient_id', $user->id)
                ->orderByDesc('updated_at')
                ->get();
        }
    }

    public function selectChat($chatId)
    {
        $this->selectedChatId = $chatId;

        // Emit event to ChatWindow to load messages for selected chat
        dispatch('messageSent', $chatId);


    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
