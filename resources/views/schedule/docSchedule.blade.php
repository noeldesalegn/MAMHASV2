<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8  ">

        <div class="w-full bg-gray-800 py-4 px-7 rounded-md " >
            <div class="mb-8 flex items-center justify-between gap-8">
                <div>
                    <h6 class="font-sans antialiased font-bold text-base md:text-lg lg:text-xl text-white ">Members list</h6>
                    <p class="font-sans antialiased text-base text-gray-300 mt-1">See information about all members</p>
                </div>
                <div class="flex shrink-0 flex-col gap-2 sm:flex-row">
                    <button class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm hover:shadow bg-stone-200 hover:bg-stone-100 relative bg-gradient-to-b from-white to-white border-stone-200 text-stone-700 rounded-lg hover:bg-gradient-to-b hover:from-stone-50 hover:to-stone-50 hover:border-stone-200 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-1px_0px_rgba(0,0,0,0.20)] after:pointer-events-none transition antialiased">View all</button>
                    <a href="{{  route('docSchedulefell')}}" class="justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm hover:shadow bg-stone-800 hover:bg-stone-700 relative bg-gradient-to-b from-stone-700 to-stone-800 border-stone-900 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-stone-800 hover:to-stone-800 hover:border-stone-900 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.25),inset_0_-2px_0px_rgba(0,0,0,0.35)] after:pointer-events-none transition antialiased flex items-center gap-3"><svg width="1.5em" height="1.5em" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4"><path d="M17 10H20M23 10H20M20 10V7M20 10V13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        Add a Schedule </a>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                <div class="flex gap-2">
                    <div role="tablist" class="relative flex shrink-0 rounded-md p-1 bg-gray-600 dark:bg-surface w-full md:w-max" aria-orientation="horizontal">
                        <button role="tab" class="inline-flex relative z-[2] py-1.5 hover:rounded-md hover:bg-gray-500 px-3 items-center justify-center align-middle text-stone-800 dark:text-white select-none font-sans font-medium text-center text-sm aria-disabled:opacity-50 aria-disabled:pointer-events-none w-full" aria-selected="true">
                            All</button>
                        <button role="tab" class="inline-flex relative z-[2] py-1.5 hover:rounded-md hover:bg-gray-500 px-3 items-center justify-center align-middle text-stone-800 dark:text-white select-none font-sans font-medium text-center text-sm aria-disabled:opacity-50 aria-disabled:pointer-events-none w-full" aria-selected="false">
                            Monitored</button>
                        <button role="tab" class="inline-flex relative z-[2] py-1.5 hover:rounded-md hover:bg-gray-500 px-3 items-center justify-center align-middle text-stone-800 dark:text-white select-none font-sans font-medium text-center text-sm aria-disabled:opacity-50 aria-disabled:pointer-events-none w-full" aria-selected="false">
                            Unmonitored</button>
                        <span style="width:0;height:0;left:0;top:0;position:absolute;z-index:1" class="bg-white rounded shadow-sm shadow-stone-800/10 transition-all duration-300 ease-in"></span>
                    </div>
                </div>
                <livewire:appointment-table />
            </div>
            <div class="mt-4 w-full overflow-hidden rounded-lg border border-stone-200">
                <table class="w-full">
                    <thead class="border-b border-stone-200 bg-stone-100 text-sm font-medium text-stone-600 dark:bg-surface-dark">
                    <tr>
                        <th class="px-2.5 py-2 text-start font-medium">Member</th>
                        <th class="px-2.5 py-2 text-start font-medium">Reason</th>
                        <th class="px-2.5 py-2 text-start font-medium">Status</th>
                        <th class="px-2.5 py-2 text-start font-medium">Schedule</th>
                        <th class="px-2.5 py-2 text-start font-medium"></th>
                    </tr>
                    </thead>
                    <tbody class="group text-sm text-stone-800 dark:text-white">
                    @foreach($appointments as $appointment)
                        <tr class="border-b border-stone-200 last:border-0">
                        <td class="p-3">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset($appointment->patient->logo) }}" alt="{{ $appointment->patient->FName }}" class="inline-block object-cover object-center w-8 h-8 rounded" />
                                <div class="flex flex-col">
                                    <small class="font-sans antialiased text-sm text-current"> {{ $appointment->patient->FName }} {{ $appointment->patient->LName }}</small>
                                    <small class="font-sans antialiased text-sm text-current opacity-70">{{ $appointment->patient->email }}</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            <div class="flex flex-col">
{{--                                <small class="font-sans antialiased text-sm text-current">Manager</small>--}}
                                <small class="font-sans antialiased text-sm text-current opacity-70">{{ $appointment->status }}</small>
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
                            <div class="flex flex-col">
                            <small class="font-sans antialiased text-sm text-current">{{ $appointment->appointment_date }}</small>
                            <small class="font-sans antialiased text-sm text-current opacity-70">{{ $appointment->appointment_time }}</small>
                            </div>
                        </td>
                        <td class="p-3">
                            <a href="{{ route('schedule.AppointmentEdit', $appointment->id) }}"
                            class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[38px] min-h-[38px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none outline-none group">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4 text-stone-800 dark:text-white"><path d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </a>
                            <form method="POST" action="{{ route('schedule.AppointmentDelete', $appointment->id) }}" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[38px] min-h-[38px] rounded-md bg-transparent border-transparent text-red-600 hover:bg-red-100 hover:border-red-300 shadow-none hover:shadow-none outline-none group">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4 text-red-600">
                                        <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </form>
                        </td>

                    </tr>
{{--                    <tr class="border-b border-stone-200 last:border-0">--}}
{{--                        <td class="p-3">--}}
{{--                            <div class="flex items-center gap-3">--}}
{{--                                <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-2.jpg" alt="Alexa Liras" class="inline-block object-cover object-center w-8 h-8 rounded" />--}}
{{--                                <div class="flex flex-col">--}}
{{--                                    <small class="font-sans antialiased text-sm text-current">Alexa Liras</small>--}}
{{--                                    <small class="font-sans antialiased text-sm text-current opacity-70">alexa@creative-tim.com</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td class="p-3">--}}
{{--                            <div class="flex flex-col">--}}
{{--                                <small class="font-sans antialiased text-sm text-current">Programator</small>--}}
{{--                                <small class="font-sans antialiased text-sm text-current opacity-70">Developer</small>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td class="p-3">--}}
{{--                            <div class="w-max">--}}
{{--                                <div class="relative inline-flex w-max items-center border font-sans font-medium rounded-md text-xs p-0.5 shadow-sm bg-stone-200 border-stone-200 text-stone-800">--}}
{{--                                    <span class="font-sans text-current leading-none my-0.5 mx-1.5">Offline</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td class="p-3">--}}
{{--                            <small class="font-sans antialiased text-sm text-current">23/04/18</small>--}}
{{--                        </td>--}}
{{--                        <td class="p-3">--}}
{{--                            <button class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[38px] min-h-[38px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none outline-none group"><svg width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4 text-stone-800 dark:text-white"><path d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>--}}
{{--                            </button>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-between border-t border-surface-light py-4">
                <small class="font-sans antialiased text-sm text-white ">
                    Page {{ $appointments->currentPage() }} of {{ $appointments->lastPage() }}
                </small>

                <div class="flex gap-2">
                    @if ($appointments->onFirstPage())
                        <span class="inline-flex items-center justify-center text-stone-400 border border-stone-200 text-sm py-1.5 px-3 rounded-lg cursor-not-allowed">
                Previous
            </span>
                    @else
                        <a href="{{ $appointments->previousPageUrl() }}"
                           class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center transition-all ease-in text-sm py-1.5 px-3 bg-transparent text-stone-100 hover:text-stone-50 border-stone-300 hover:border-stone-600 rounded-lg hover:opacity-60">
                            Previous
                        </a>
                    @endif

                    @if ($appointments->hasMorePages())
                        <a href="{{ $appointments->nextPageUrl() }}"
                           class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center transition-all ease-in text-sm py-1.5 px-3 bg-transparent text-stone-100 hover:text-stone-50 border-stone-300 hover:border-stone-600 rounded-lg hover:opacity-60">
                            Next
                        </a>
                    @else
                        <span class="inline-flex items-center justify-center text-stone-400 border border-stone-200 text-sm py-1.5 px-3 rounded-lg cursor-not-allowed">
                Next
            </span>
                    @endif
                </div>
            </div>

        </div>

    </div>
</x-layout>
