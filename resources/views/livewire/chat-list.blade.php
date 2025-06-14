<div class="w-full space-y-2">
    @foreach($chats as $chat)
        @php
            $otherUser = auth()->user()->user_account_type === 'physician' ? $chat->patient : $chat->physician;
            $unread = $chat->unreadCountFor(auth()->id());
            $lastMessage = $chat->lastMessage();
        @endphp

        <div wire:click="selectChat({{ $chat->id }})"
             class="p-3 cursor-pointer hover:bg-gray-100 rounded-lg shadow {{ $selectedChatId === $chat->id ? 'bg-gray-200' : '' }}">
            <div class="flex justify-between items-center">
                <div>
                    <div class="font-semibold text-gray-800">{{ $otherUser->FName }} {{ $otherUser->LName }}</div>
                    <div class="text-sm text-gray-600">
                        {{ Str::limit($lastMessage->content ?? 'No messages yet.', 30) }}
                    </div>
                </div>

                @if($unread > 0)
                    <span class="inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full">
                        {{ $unread }}
                    </span>
                @endif
            </div>
        </div>
    @endforeach
</div>
