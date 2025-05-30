<x-layout>
    <div class="m-4">
        <h2 class="font-semibold text-xl text-gray-600 mb-4 bg-gray-200 rounded-md">Edit the appointment</h2>
        @if(session('success'))
            <div class="p-2 mb-4 text-green-700 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <form method="POST" action="{{  route('schedule.AppointmentUpdate', $appointment->id) }}">
                @csrf
                @method('PUT')
                <div class="space-y-4 text-sm">

                    <label>
                        <span class="block text-gray-700">Patient (Mother)</span>
                        <input type="text" name="patient_id" value="{{ $patient->FName }} {{ $patient->LName }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50 " readonly />
                        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                        @error('patient_id')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <label>
                        <span class="block text-gray-700">Physician</span>
                        <input type="text" name="physician_id" value="{{ $physician->FName  }} {{ $physician->LName }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50 " readonly />
                        <input type="hidden" name="physician_id" value="{{ $physician->id }}">
                        @error('physician_id')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <label>
                        <span class="block text-gray-700v ">Mother Detail</span>
                        <input type="text" name="Mother_Detail" value="{{ old('Mother_Detail', $appointment->mother_detail) }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                        @error('mother_Detail')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <label>
                        <span class="block text-gray-700">User Account Name</span>
                        <input type="text" name="user_account_name" value="{{  $patient->user_account_name }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" readonly />
                        @error('user_account_name')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <div class="grid grid-cols-2 gap-4">
                        <label>
                            <span class="block text-gray-700">Date</span>
                            <input type="date" name="appointment_date" value="{{ old('appointment_date' , $appointment->appointment_date) }}"
                                   class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                            @error('appointment_date')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </label>
                        <label>
                            <span class="block text-gray-700">Time</span>
                            <input type="time" name="appointment_time" value="{{ old('appointment_time' , $appointment->appointment_time) }}"
                                   class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                            @error('appointment_time')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </label>
                    </div>

                    <label>
                        <span class="block text-gray-700">Status</span>
                        <input type="text" name="status" value="{{ old('status' , $appointment->status) }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                        @error('status')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <div class="text-right">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded mt-2">
                            Update Appointment
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>


</x-layout>
