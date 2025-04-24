<x-layout>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Responsive Form</h2>
                <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Personal Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="firstName ">First Name</label>
                                    <input type="text" name="v" id="FName" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
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
                                    <label for="phone_no">Phone number</label>
                                    <input type="number" name="phone_no" id="phone_no" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>
                                <div class="md:col-span-5">
                                    <div class="flex gap-2">
                                        <label for="Gender">Gender</label>
                                        <br>
                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="html">
                                                <input type="radio" name="radio-demo" checked class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="html" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="html" class="font-sans antialiased text-base text-stone-600">HTML</label>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="react">
                                                <input type="radio" name="radio-demo" class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="react" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="react" class="font-sans antialiased text-base text-stone-600">React</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:col-span-5">
                                    <div class="flex gap-2">
                                        <label for="Marital_status">Marital status</label>
                                        <br>
                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="html">
                                                <input type="radio" name="radio-demo" checked class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="html" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="html" class="font-sans antialiased text-base text-stone-600">HTML</label>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="react">
                                                <input type="radio" name="radio-demo" class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="react" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="react" class="font-sans antialiased text-base text-stone-600">React</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:col-span-5">
                                    <div class="flex gap-2">
                                        <label for="user_account_type">User account type</label>
                                        <br>
                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="html">
                                                <input type="radio" name="radio-demo" checked class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="html" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="html" class="font-sans antialiased text-base text-stone-600">HTML</label>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="react">
                                                <input type="radio" name="radio-demo" class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="react" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="react" class="font-sans antialiased text-base text-stone-600">React</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="user_account_name">user name</label>
                                    <input type="text" name="user_account_name" id="user_account_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="Registered_By">Registered by</label>
                                    <input type="text" name="Registered_By" id="Registered_By" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>
                                <div class="md:col-span-5">
                                    <div class="flex gap-2">
                                        <label for="Status">Status</label>
                                        <br>
                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="html">
                                                <input type="radio" name="radio-demo" checked class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="html" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="html" class="font-sans antialiased text-base text-stone-600">HTML</label>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <label class="flex items-center cursor-pointer relative" for="react">
                                                <input type="radio" name="radio-demo" class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded-full shadow-sm hover:shadow border border-stone-200 checked:bg-stone-800 checked:border-stone-800" id="react" />
                                                <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="6" cy="6" r="4" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label for="react" class="font-sans antialiased text-base text-stone-600">React</label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    {{--                                    <div class="md:col-span-3">--}}
                                    {{--                                        <label for="address">Address / Street</label>--}}
                                    {{--                                        <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="md:col-span-2">--}}
                                    {{--                                        <label for="city">City</label>--}}
                                    {{--                                        <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="md:col-span-2">--}}
                                    {{--                                        <label for="country">Country / region</label>--}}
                                    {{--                                        <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">--}}
                                    {{--                                            <input name="country" id="country" placeholder="Country" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />--}}
                                    {{--                                            <button tabindex="-1" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">--}}
                                    {{--                                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
                                    {{--                                                    <line x1="18" y1="6" x2="6" y2="18"></line>--}}
                                    {{--                                                    <line x1="6" y1="6" x2="18" y2="18"></line>--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                            <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">--}}
                                    {{--                                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="md:col-span-2">--}}
                                    {{--                                        <label for="state">State / province</label>--}}
                                    {{--                                        <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">--}}
                                    {{--                                            <input name="state" id="state" placeholder="State" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />--}}
                                    {{--                                            <button tabindex="-1" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">--}}
                                    {{--                                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
                                    {{--                                                    <line x1="18" y1="6" x2="6" y2="18"></line>--}}
                                    {{--                                                    <line x1="6" y1="6" x2="18" y2="18"></line>--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                            <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">--}}
                                    {{--                                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="md:col-span-1">--}}
                                    {{--                                        <label for="zipcode">Zipcode</label>--}}
                                    {{--                                        <input type="text" name="zipcode" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="md:col-span-5">--}}
                                    {{--                                        <div class="inline-flex items-center">--}}
                                    {{--                                            <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox" />--}}
                                    {{--                                            <label for="billing_same" class="ml-2">My billing address is different than above.</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="md:col-span-2">--}}
                                    {{--                                        <label for="soda">How many soda pops?</label>--}}
                                    {{--                                        <div class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">--}}
                                    {{--                                            <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">--}}
                                    {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" viewBox="0 0 20 20" fill="currentColor">--}}
                                    {{--                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                            <input name="soda" id="soda" placeholder="0" class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent" value="0" />--}}
                                    {{--                                            <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">--}}
                                    {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 fill-current" viewBox="0 0 20 20" fill="currentColor">--}}
                                    {{--                                                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
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
</x-layout>
