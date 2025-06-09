<x-layout>
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Prescription Details</h1>

        <div class="border p-4 rounded max-w-md space-y-2">
            <p><strong>Name:</strong> {{ $medicine->name }}</p>
            <p><strong>Dosage:</strong> {{ $medicine->dosage ?? '—' }}</p>
            <p><strong>Description:</strong> {{ $medicine->description ?? '—' }}</p>
            <p>
                <strong>Patient:</strong>
                {{ $medicine->patient->FName }} {{ $medicine->patient->LName }}
            </p>
            <p>
                <strong>Prescribed By:</strong>
                {{ $medicine->prescriber->FName }} {{ $medicine->prescriber->LName }}
            </p>
            <p><strong>Date:</strong> {{ $medicine->created_at->format('Y-m-d H:i') }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('medicines.index') }}"
               class="text-blue-600 hover:underline">← Back to list</a>
        </div>
    </div>
</x-layout>
