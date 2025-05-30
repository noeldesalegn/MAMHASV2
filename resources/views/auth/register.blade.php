<x-layout>
    <form method="POST" action="/register" enctype="multipart/form-data">
        @csrf

        <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <h2 class="font-semibold text-xl text-gray-600">Fill in the Form</h2>
                    <p class="text-gray-500 mb-6">Form is mobile responsive.</p>

                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Give the full Personal Details</p>
                                <p>Please fill out all the fields.</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="firstName ">First Name</label>
                                        <input type="text" name="FName" id="FName" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="LName" id="LName" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="email">Email Address</label>
                                        <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="password_confirmation">password Confirmation</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="user_account_name">User name</label>
                                        <input type="text" name="user_account_name" id="user_account_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="Registered_By">Registered by</label>
                                        <input type="text" name="Registered_By" id="Registered_By" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="phone_no">Phone number</label>
                                        <input type="number" name="phone_no" id="phone_no" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" id="age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <!-- Fixed form snippet with proper radio groups and accessibility -->
                                    <div class="md:col-span-5">
                                        <fieldset>
                                            <legend class="font-medium text-stone-700">Gender</legend>
                                            <div class="flex items-center gap-4 mt-2">
                                                <label for="gender_male" class="flex items-center cursor-pointer gap-2">
                                                    <input type="radio" name="Gender" id="gender_male" value="male"
                                                           class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" />
                                                    <span class="font-sans text-base text-stone-600">Male</span>
                                                    <span class="absolute text-white opacity-0 peer-checked:opacity-100"><svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" />
                                                    </svg>
                                                </span>
                                                </label>

                                                <label for="gender_female" class="flex items-center cursor-pointer gap-2">
                                                    <input type="radio" name="Gender" id="gender_female" value="female"
                                                           class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-stone-200 hover:shadow checked:bg-stone-800 checked:border-stone-800 transition-all" />
                                                    <span class="font-sans text-base text-stone-600">Female</span>
                                                    <span class="absolute text-white opacity-0 peer-checked:opacity-100">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" />
                                                    </svg>
                                                </span>
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>

{{--                                    <div class="md:col-span-5">--}}
{{--                                        <fieldset>--}}
{{--                                            <legend class="font-medium text-stone-700">Marital Status</legend>--}}
{{--                                            <div class="flex items-center gap-4 mt-2">--}}
{{--                                                <label for="status_single" class="flex items-center cursor-pointer gap-2">--}}
{{--                                                    <input type="radio" name="marital_status" id="status_single" value="single"--}}
{{--                                                           class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-stone-200 hover:shadow checked:bg-stone-800 checked:border-stone-800 transition-all" />--}}
{{--                                                    <span class="font-sans text-base text-stone-600">Single</span>--}}
{{--                                                    <span class="absolute text-white opacity-0 peer-checked:opacity-100">--}}
{{--                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <circle cx="6" cy="6" r="4" />--}}
{{--                                                    </svg>--}}
{{--                                                </span>--}}
{{--                                                </label>--}}

{{--                                                <label for="status_married" class="flex items-center cursor-pointer gap-2">--}}
{{--                                                    <input type="radio" name="marital_status" id="status_married" value="married"--}}
{{--                                                           class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-stone-200 hover:shadow checked:bg-stone-800 checked:border-stone-800 transition-all" />--}}
{{--                                                    <span class="font-sans text-base text-stone-600">Married</span>--}}
{{--                                                    <span class="absolute text-white opacity-0 peer-checked:opacity-100">--}}
{{--                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <circle cx="6" cy="6" r="4" />--}}
{{--                                                    </svg>--}}
{{--                                                </span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}

                                    <div class="md:col-span-5">
                                        <fieldset>
                                            <legend class="font-medium text-stone-700">User Account Type</legend>
                                            <div class="flex items-center gap-4 mt-2">
                                                <label for="account_patient" class="flex items-center cursor-pointer gap-2">
                                                    <input type="radio" name="user_account_type" id="account_patient" value="patient"
                                                           class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-stone-200 hover:shadow checked:bg-stone-800 checked:border-stone-800 transition-all" />
                                                    <span class="font-sans text-base text-stone-600">Patient</span>
                                                    <span class="absolute text-white opacity-0 peer-checked:opacity-100">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" />
                                                    </svg>
                                                </span>
                                                </label>

                                                <label for="account_physician" class="flex items-center cursor-pointer gap-2">
                                                    <input type="radio" name="user_account_type" id="account_physician" value="physician"
                                                           class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-stone-200 hover:shadow checked:bg-stone-800 checked:border-stone-800 transition-all" />
                                                    <span class="font-sans text-base text-stone-600">Physician</span>
                                                    <span class="absolute text-white opacity-0 peer-checked:opacity-100">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" />
                                                    </svg>
                                                </span>
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="photo" class="block mb-2 text-sm font-medium text-gray-900">
                                            Upload photo
                                        </label>
                                        <input
                                            id="photo"
                                            name="photo"
                                            type="file"
                                            class="block w-full text-lg text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                            aria-describedby="photo_help"
                                        />
                                        <p id="photo_help" class="mt-1 text-sm text-gray-500">
                                            PNG, JPEG or JPG (max. 800x400px).
                                        </p>
                                        @error('photo')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </form>
</x-layout>
