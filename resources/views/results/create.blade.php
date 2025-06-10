<x-layout>
    <div class="container mx-auto py-6 max-w-lg">
        <h1 class="text-2xl font-bold mb-4">New Result</h1>

        <form method="POST" action="{{ route('results.store') }}">
            @csrf
            <div class="space-y-4">
                <label class="block">
                    <span class="text-gray-700">Patient</span>
                    <select name="patient_id" required class="w-full border rounded px-2 py-1">
                        <option value="">— Select —</option>
                        @foreach($patients as $p)
                            <option value="{{ $p->id }}">{{ $p->FName }} {{ $p->LName }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block">
                    <span class="text-gray-700">Title</span>
                    <input name="title" class="w-full border rounded px-2 py-1" required />
                </label>

                <label class="block">
                    <span class="text-gray-700">Details</span>
                    <textarea name="details" class="w-full border rounded px-2 py-1"></textarea>
                </label>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    Save Result
                </button>
            </div>
        </form>
    </div>
</x-layout>
