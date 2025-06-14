<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 h-[80vh]">
        <div class="col-span-1 border rounded-lg overflow-y-auto">
            @livewire('chat-list')

        </div>

        <div class="col-span-2 border rounded-lg overflow-y-auto">
            @livewire('chat-window')
        </div>
    </div>
</x-layout>
