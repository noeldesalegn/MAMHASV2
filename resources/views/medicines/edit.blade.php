<x-layout>
    <div class="container mx-auto py-10 px-4">
        <div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-8 space-y-6 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Medication</h2>

            @if(session('success'))
                <div class="p-3 text-green-700 bg-green-100 rounded border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('medicines.update', $medicine->id) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Medicine Name -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Medicine Name</label>
                    <input type="text" name="name" value="{{ old('name', $medicine->name) }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Dosage -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Dosage</label>
                    <input type="text" name="dosage" value="{{ old('dosage', $medicine->dosage) }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    @error('dosage')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea name="description" rows="3"
                              class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $medicine->description) }}</textarea>
                    @error('description')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Hidden Prescribed_to Field -->
                <input type="hidden" name="prescribed_to" value="{{ $medicine->prescribed_to }}" />

                <!-- Submit -->
                <div class="text-right">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-150 shadow-md">
                        💾 Update Medication
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
