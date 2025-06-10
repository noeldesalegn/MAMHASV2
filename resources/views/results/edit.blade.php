<x-layout>
    <div class="max-w-2xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Result</h2>

        <form action="{{ route('results.update', $result) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $result->title) }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div>
                <label for="details" class="block text-sm font-medium text-gray-700">Details</label>
                <textarea name="details" id="details"
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2"
                          rows="4">{{ old('details', $result->details) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Patient</label>
                <div class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-800">
                    {{ $result->patient->FName }} {{ $result->patient->LName }}
                </div>
                <input type="hidden" name="patient_id" value="{{ $result->patient_id }}">
            </div>


            <div>
                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update Result</button>
            </div>
        </form>
    </div>
</x-layout>
