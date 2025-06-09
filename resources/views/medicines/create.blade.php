<x-layout>
    <div class="container mx-auto py-10 px-4">
        <div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-8 space-y-6 border border-gray-100">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">📝 Prescribe Medicine</h1>

            <form method="POST" action="{{ route('medicines.store') }}" class="space-y-6">
                @csrf

                <!-- Patient -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Select Patient</label>
                    <select name="prescribed_to" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">— Choose Patient —</option>
                        @foreach($patients as $p)
                            <option value="{{ $p->id }}" @selected(old('prescribed_to') == $p->id)>
                                {{ $p->FName }} {{ $p->LName }}
                            </option>
                        @endforeach
                    </select>
                    @error('prescribed_to')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Medicine Name -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Medicine Name</label>
                    <input name="name" value="{{ old('name') }}" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Dosage -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Dosage</label>
                    <input name="dosage" value="{{ old('dosage') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('dosage')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea name="description" rows="3"
                              class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                    @error('description')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 transition duration-150 text-white font-semibold px-6 py-2 rounded-lg shadow-md">
                        ➕ Prescribe
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
