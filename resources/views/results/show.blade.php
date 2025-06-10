<x-layout>
    <div class="container mx-auto py-6 max-w-lg">
        <h1 class="text-2xl font-bold mb-4">{{ $result->title }}</h1>

        <p><strong>Patient:</strong> {{ $result->patient->FName }} {{ $result->patient->LName }}</p>
        <p><strong>Status:</strong> {{ $result->status }}</p>
        <p><strong>Details:</strong> {{ $result->details ?? 'N/A' }}</p>
        <p><strong>Physician:</strong> {{ $result->physician->FName }} {{ $result->physician->LName }}</p>
        <p><strong>Created at:</strong> {{ $result->created_at->format('Y-m-d H:i') }}</p>
    </div>
</x-layout>
