<div class="flex flex-col h-full max-h-[600px] border rounded shadow p-4 bg-white">

    @if(!$chatId)
        <div class="text-center text-gray-500 mt-20">
            Select a conversation to start chatting.
        </div>
    @else
        <div class="flex-1 overflow-y-auto mb-4 space-y-3" style="max-height: 400px;">
            @foreach($messages as $message)
                @php
                    $isMe = $message->sender_id === auth()->id();
                    $attachmentUrl = $message->attachment ? asset('storage/' . $message->attachment) : null;
                @endphp

                <div class="flex {{ $isMe ? 'justify-end' : 'justify-start' }}">
                    <div class="max-w-xs p-3 rounded-lg
                        {{ $isMe ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800' }}">
                        @if($message->content)
                            <p class="whitespace-pre-wrap">{{ $message->content }}</p>
                        @endif

                        @if($attachmentUrl)
                            @if(Str::endsWith($attachmentUrl, ['.pdf']))
                                <a href="{{ $attachmentUrl }}" target="_blank" class="underline text-sm mt-2 block text-white">
                                    View PDF Attachment
                                </a>
                            @else
                                <img src="{{ $attachmentUrl }}" alt="attachment" class="mt-2 max-h-48 rounded" />
                            @endif
                        @endif

                        <div class="text-xs mt-1 text-gray-300 text-right">
                            {{ $message->created_at->format('H:i, M d') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <form wire:submit.prevent="sendMessage" class="flex gap-2">
            <input type="text" wire:model.defer="newMessage" placeholder="Type a message..."
                   class="flex-grow border rounded px-3 py-2 focus:outline-none focus:ring" />

            <input type="file" wire:model="attachment" accept=".jpg,.jpeg,.png,.pdf" class="hidden" id="file-upload" />

            <label for="file-upload" class="cursor-pointer px-3 py-2 border rounded bg-gray-100 hover:bg-gray-200 text-gray-600">
                📎
            </label>

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 disabled:opacity-50"
                    @if(!$newMessage && !$attachment) disabled @endif>
                Send
            </button>
        </form>

        @error('attachment') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
    @endif
</div>
