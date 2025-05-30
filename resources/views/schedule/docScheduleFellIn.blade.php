<x-layout>
    <div class="m-4">
        <h2 class="font-semibold text-xl text-gray-600 mb-4 bg-gray-200 rounded-md">Create New Appointment</h2>
        @if(session('success'))
            <div class="p-2 mb-4 text-green-700 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <form method="POST" action="{{ route('docScheduleFellIn') }}">
                @csrf
                <div class="space-y-4 text-sm">

                    <label>
                        <span class="block text-gray-700">Patient (Mother)</span>
                        <select name="m_id" class="w-full mt-1 border rounded px-2 h-10 bg-gray-50">
                            <option value="">-- Select Patient --</option>
                            @foreach($users->where('user_account_type', 'patient') as $user)
                                <option value="{{ $user->id }}" {{ old('m_id') == $user->id ? 'selected' : '' }}>
                                    {{ $user->FName }} {{ $user->LName }}
                                </option>
                            @endforeach
                        </select>
                        @error('m_id')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

{{--                    <label>--}}
{{--                        <span class="block text-gray-700">Physician</span>--}}
{{--                        <select name="phy_id" class="w-full mt-1 border rounded px-2 h-10 bg-gray-50">--}}
{{--                            <option value="">-- Select Physician --</option>--}}
{{--                            @foreach($users->where('user_account_type', 'physician') as $user)--}}
{{--                                <option value="{{ $user->id }}" {{ old('phy_id') == $user->id ? 'selected' : '' }}>--}}
{{--                                    {{ $user->FName }} {{ $user->LName }}--}}
{{--                                </option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        @error('phy_id')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror--}}
{{--                    </label>--}}
                    <label>
                        <span class="block text-gray-700">Physician</span>
                        <input type="text" name="phy_id" value="{{ $user->FName }} {{ $user->LName }}" {{ old('phy_id') == $user->id ? 'selected' : '' }}
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50 " />
                        @error('phy_id')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <label>
                        <span class="block text-gray-700">Mother Detail</span>
                        <input type="text" name="Mother_Detail" value="{{ old('Mother_Detail') }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                        @error('Mother_Detail')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <label>
                        <span class="block text-gray-700">User Account Name</span>
                        <input type="text" name="user_account_name" value="{{ old('user_account_name') }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" readonly />
                        @error('user_account_name')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <div class="grid grid-cols-2 gap-4">
                        <label>
                            <span class="block text-gray-700">Date</span>
                            <input type="date" name="Date" value="{{ old('Date') }}"
                                   class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                            @error('Date')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </label>
                        <label>
                            <span class="block text-gray-700">Time</span>
                            <input type="time" name="Time" value="{{ old('Time') }}"
                                   class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                            @error('Time')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </label>
                    </div>

                    <label>
                        <span class="block text-gray-700">Status</span>
                        <input type="text" name="status" value="{{ old('status') }}"
                               class="w-full mt-1 border rounded px-2 h-10 bg-gray-50" />
                        @error('status')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </label>

                    <div class="text-right">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded mt-2">
                            Save Appointment
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</x-layout>
