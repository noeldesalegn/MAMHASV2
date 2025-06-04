<form>
    <div class="w-full md:w-72">
        <div class="relative w-full">
            <input
                placeholder="Search"
                type="text"
                wire:model.live.debounce.1000ms="search"
                class="w-9/12 aria-disabled:cursor-not-allowed outline-none focus:outline-none text-gray-800 placeholder:text-stone-600/60
                       ring-transparent border border-stone-200 transition-all ease-in disabled:opacity-50 disabled:pointer-events-none select-none text-sm
                       py-2 px-2.5 ring shadow-sm bg-white rounded-lg duration-100 hover:border-stone-300 hover:ring-none focus:border-stone-400 focus:ring-none peer"
            />
            <button
                type="button"
                wire:click.prevent="clearSearch()"
                class="bg-white border-stone-200 text-stone-700 font-medium rounded-md py-1.5 px-2 disabled:bg-gray-500 disabled:text-gray-700"
                {{ empty($search) ? 'disabled' : '' }}
            >
                Clear
            </button>
            {{-- Make this div absolute, so results float over content below  --}}
            <div
                class=" absolute top-full left-0 right-0 z-10 mt-2 bg-gray-800 text-white rounded-md max-h-96 overflow-y-auto"
            >
                @foreach($appointments as $appointment)
                    <div class="px-2 py-1 hover:bg-blue-800 cursor-pointer">
                        <a href="{{ route('schedule.AppointmentEdit', $appointment->id) }}">{{ $appointment->patient->FName }} {{ $appointment->patient->LName }}</a>
                    </div>
                @endforeach

                @if($search !== '' && $appointments->isEmpty())
                    <div class="px-2 py-1 text-stone-400">No results found.</div>
                @endif
            </div>
        </div>
    </div>
</form>
