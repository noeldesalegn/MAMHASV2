<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8  ">

        <div class="w-full bg-gray-800 py-4 px-7 rounded-md " >
            <div class="mb-8 flex items-center justify-between gap-8">
                <div>
                    <h6 class="font-sans antialiased font-bold text-base md:text-lg lg:text-xl text-white ">Members list</h6>
                    <p class="font-sans antialiased text-base text-gray-300 mt-1">See information about all members</p>
                </div>
{{--                <div class="flex shrink-0 flex-col gap-2 sm:flex-row">--}}
{{--                    <button class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm hover:shadow bg-stone-200 hover:bg-stone-100 relative bg-gradient-to-b from-white to-white border-stone-200 text-stone-700 rounded-lg hover:bg-gradient-to-b hover:from-stone-50 hover:to-stone-50 hover:border-stone-200 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-1px_0px_rgba(0,0,0,0.20)] after:pointer-events-none transition antialiased">View all</button>--}}
{{--                    <button class="justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm hover:shadow bg-stone-800 hover:bg-stone-700 relative bg-gradient-to-b from-stone-700 to-stone-800 border-stone-900 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-stone-800 hover:to-stone-800 hover:border-stone-900 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.25),inset_0_-2px_0px_rgba(0,0,0,0.35)] after:pointer-events-none transition antialiased flex items-center gap-3"><svg width="1.5em" height="1.5em" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4"><path d="M17 10H20M23 10H20M20 10V7M20 10V13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg> Add member</button>--}}
{{--                </div>--}}
            </div>
{{--            <div class="flex flex-col items-center justify-between gap-4 md:flex-row">--}}
{{--                <div class="flex gap-2">--}}
{{--                    <div role="tablist" class="relative flex shrink-0 rounded-md p-1 bg-gray-600 dark:bg-surface w-full md:w-max" aria-orientation="horizontal">--}}
{{--                        <button role="tab" class="inline-flex relative z-[2] py-1.5 hover:rounded-md hover:bg-gray-500 px-3 items-center justify-center align-middle text-stone-800 dark:text-white select-none font-sans font-medium text-center text-sm aria-disabled:opacity-50 aria-disabled:pointer-events-none w-full" aria-selected="true">All</button>--}}
{{--                        <button role="tab" class="inline-flex relative z-[2] py-1.5 hover:rounded-md hover:bg-gray-500 px-3 items-center justify-center align-middle text-stone-800 dark:text-white select-none font-sans font-medium text-center text-sm aria-disabled:opacity-50 aria-disabled:pointer-events-none w-full" aria-selected="false">Monitored</button>--}}
{{--                        <button role="tab" class="inline-flex relative z-[2] py-1.5 hover:rounded-md hover:bg-gray-500 px-3 items-center justify-center align-middle text-stone-800 dark:text-white select-none font-sans font-medium text-center text-sm aria-disabled:opacity-50 aria-disabled:pointer-events-none w-full" aria-selected="false">Unmonitored</button>--}}
{{--                        <span style="width:0;height:0;left:0;top:0;position:absolute;z-index:1" class="bg-white rounded shadow-sm shadow-stone-800/10 transition-all duration-300 ease-in"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="w-full md:w-72">--}}
{{--                    <div class="relative w-full">--}}
{{--                        <input placeholder="Search" type="text" class="w-full aria-disabled:cursor-not-allowed outline-none focus:outline-none text-gray-800  placeholder:text-stone-600/60 ring-transparent border border-stone-200 transition-all ease-in disabled:opacity-50 disabled:pointer-events-none select-none text-sm py-2 px-2.5 ring shadow-sm bg-white rounded-lg duration-100 hover:border-stone-300 hover:ring-none focus:border-stone-400 focus:ring-none peer" />--}}
{{--                        <span class="pointer-events-none absolute top-1/2 -translate-y-1/2 text-stone-600/70 peer-focus:text-stone-800 peer-focus:text-stone-800 dark:peer-hover:text-white dark:peer-focus:text-white transition-all duration-300 ease-in overflow-hidden w-5 h-5"><svg width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="white" class="h-5 w-5"><path d="M17 17L21 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 11C3 15.4183 6.58172 19 11 19C13.213 19 15.2161 18.1015 16.6644 16.6493C18.1077 15.2022 19 13.2053 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>--}}
{{--        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="mt-4 w-full overflow-hidden rounded-lg border border-stone-200">
                <table class="w-full">
                    <thead class="border-b border-stone-200 bg-stone-100 text-sm font-medium text-stone-600 dark:bg-surface-dark">
                    <tr>
                        <th class="px-2.5 py-2 text-start font-medium">Member</th>
                        <th class="px-2.5 py-2 text-start font-medium">Phone</th>
                        <th class="px-2.5 py-2 text-start font-medium">Status</th>
                        <th class="px-2.5 py-2 text-start font-medium">Age</th>
                        <th class="px-2.5 py-2 text-start font-medium">Set appointment</th>
                    </tr>
                    </thead>
                    <tbody class="group text-sm text-stone-800 dark:text-white">
                    @foreach($users->where('user_account_type', 'patient') as $user)
                        <tr class="border-b border-stone-200 last:border-0">
                            <td class="p-3">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset($user->logo) }}" alt="John Michael" class="inline-block object-cover object-center w-8 h-8 rounded" />
                                    <div class="flex flex-col">
                                        <small class="font-sans antialiased text-sm text-current">{{$user->FName}}</small>
                                        <small class="font-sans antialiased text-sm text-current opacity-70">{{$user->email}}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                <div class="flex flex-col">
                                    <small class="font-sans antialiased text-sm text-current">{{$user->phone_no}}</small>
{{--                                    <small class="font-sans antialiased text-sm text-current opacity-70">Organization</small>--}}
                                </div>
                            </td>
                            <td class="p-3">
                                <div class="w-max">
                                    <div class="relative inline-flex w-max items-center border font-sans font-medium rounded-md text-xs p-0.5 shadow-sm bg-green-500 border-green-500 text-green-50">
                                        <span class="font-sans text-current leading-none my-0.5 mx-1.5">Online</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                <small class="font-sans antialiased text-sm text-current">{{$user->age}}</small>
                            </td>
                            <td class="p-3">
                                <a href="/schedule/{{ $user->id }}/AppointmentCreate" class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[38px] min-h-[38px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none outline-none group">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4 text-stone-800 dark:text-white">
                                        <path d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942"
                                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </a>
                            </td>
                        </tr>
                    @endforeach
                        <tr class="border-b border-stone-200 last:border-0">
                        <td class="p-3">
                            <div class="flex items-center gap-3">
                                <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-2.jpg" alt="Alexa Liras" class="inline-block object-cover object-center w-8 h-8 rounded" />
                                <div class="flex flex-col">
                                    <small class="font-sans antialiased text-sm text-current">Alexa Liras</small>
                                    <small class="font-sans antialiased text-sm text-current opacity-70">alexa@creative-tim.com</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            <div class="flex flex-col">
                                <small class="font-sans antialiased text-sm text-current">Programator</small>
                                <small class="font-sans antialiased text-sm text-current opacity-70">Developer</small>
                            </div>
                        </td>
                        <td class="p-3">
                            <div class="w-max">
                                <div class="relative inline-flex w-max items-center border font-sans font-medium rounded-md text-xs p-0.5 shadow-sm bg-stone-200 border-stone-200 text-stone-800">
                                    <span class="font-sans text-current leading-none my-0.5 mx-1.5">Offline</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            <small class="font-sans antialiased text-sm text-current">25</small>
                        </td>
                        <td class="p-3">
                            <button class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[38px] min-h-[38px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none outline-none group"><svg width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4 text-stone-800 dark:text-white"><path d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-between border-t border-surface-light py-4">
                <small class="font-sans antialiased text-sm text-current">Page 1 of 10</small>
                <div class="flex gap-2">
                    <button class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center transition-all ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm bg-transparent relative text-stone-500 hover:text-stone-300 border-stone-300 hover:bg-transparent duration-150 hover:border-stone-600 rounded-lg hover:opacity-60 hover:shadow-none">Previous</button>
                    <button class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center transition-all ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm bg-transparent relative text-stone-500 hover:text-stone-300 border-stone-300 hover:bg-transparent duration-150 hover:border-stone-600 rounded-lg hover:opacity-60 hover:shadow-none">Next</button>
                </div>
            </div>
        </div>

    </div>
</x-layout>
