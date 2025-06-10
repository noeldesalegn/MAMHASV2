<x-layout>
    @if(session('success'))
        <div class="p-3 text-green-700 bg-green-100 rounded border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="w-full bg-gray-800 py-4 px-7 rounded-md">
            <div class="mb-8 flex items-center justify-between gap-8">
                <div>
                    <h6 class="font-sans font-bold text-lg lg:text-xl text-white">Results list</h6>
                    <p class="font-sans text-base text-gray-300 mt-1">All lab results submitted for patients</p>
                </div>
                <a href="{{ route('results.create') }}"
                   class="flex items-center gap-3 justify-center text-sm py-1.5 px-3 rounded-lg font-medium text-white bg-gradient-to-b from-stone-700 to-stone-800 hover:from-stone-800 hover:to-stone-900 border border-stone-900 shadow transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add New Result
                </a>
            </div>

            <div class="mt-4 w-full overflow-hidden rounded-lg border border-stone-200">
                <table class="w-full">
                    <thead class="border-b border-stone-200 bg-stone-100 text-sm font-medium text-stone-600">
                    <tr>
                        <th class="px-2.5 py-2 text-start">Patient</th>
                        <th class="px-2.5 py-2 text-start">Result Title</th>
                        <th class="px-2.5 py-2 text-start">Status</th>
                        <th class="px-2.5 py-2 text-start">Date</th>
                        <th class="px-2.5 py-2 text-start">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-sm text-stone-800">
                    @foreach($results as $result)
                        <tr class="border-b border-stone-200">
                            <td class="p-3">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset($result->patient->logo ?? 'default-avatar.png') }}"
                                         class="w-8 h-8 rounded object-cover" alt="{{ $result->patient->FName }}">
                                    <div class="flex text-white flex-col">
                                        <span>{{ $result->patient->FName }} {{ $result->patient->LName }}</span>
                                        <span class="text-sm text-gray-500">{{ $result->patient->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3 text-white">{{ $result->title }}</td>
                            <td class="p-3">
                                    <span class="inline-flex items-center text-xs px-2 py-1 rounded bg-green-500 text-white">
                                        {{ $result->status }}
                                    </span>
                            </td>
                            <td class="p-3 text-white">{{ $result->created_at->format('Y-m-d') }}</td>
                            <td class="p-3 flex items-center space-x-2">
                                <a href="{{ route('results.show', $result) }}"
                                   class="text-blue-600 hover:underline text-sm">View</a>
                                <a href="{{ route('results.edit', $result) }}"
                                   class="text-yellow-600 hover:underline text-sm">Edit</a>
                                <form method="POST" action="{{ route('results.destroy', $result) }}"
                                      onsubmit="return confirm('Are you sure?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:underline text-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
