<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8  ">

        <div class="w-full bg-gray-800 py-4 px-7 rounded-md " >
            <div class="mb-8 flex items-center justify-between gap-8">
                <div>
                    <h6 class="font-sans antialiased font-bold text-base md:text-lg lg:text-xl text-white ">Appointments list</h6>
                    <p class="font-sans antialiased text-base text-gray-300 mt-1">See information about your schedule</p>
                </div>
                <div class="flex shrink-0 flex-col gap-2 sm:flex-row">
                    <button class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm hover:shadow bg-stone-200 hover:bg-stone-100 relative bg-gradient-to-b from-white to-white border-stone-200 text-stone-700 rounded-lg hover:bg-gradient-to-b hover:from-stone-50 hover:to-stone-50 hover:border-stone-200 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-1px_0px_rgba(0,0,0,0.20)] after:pointer-events-none transition antialiased">View all</button>
                    <a href="#" class="justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-1.5 px-3 shadow-sm hover:shadow bg-stone-800 hover:bg-stone-700 relative bg-gradient-to-b from-stone-700 to-stone-800 border-stone-900 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-stone-800 hover:to-stone-800 hover:border-stone-900 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.25),inset_0_-2px_0px_rgba(0,0,0,0.35)] after:pointer-events-none transition antialiased flex items-center gap-3"><svg width="1.5em" height="1.5em" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-4 w-4"><path d="M17 10H20M23 10H20M20 10V7M20 10V13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        Request a Schedule </a>
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
                        {{--                        <th class="px-2.5 py-2 text-start font-medium"></th>--}}
                    </tr>
                    </thead>
                    <tbody class="group text-sm text-stone-800 dark:text-white">
                    @foreach($appointments as $appointment)
                        <tr class="border-b border-stone-200 last:border-0">
                            <td class="p-3">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset($appointment->physician->logo) }}" alt="{{ $appointment->physician->FName }}" class="inline-block object-cover object-center w-8 h-8 rounded" />
                                    <div class="flex flex-col">
                                        <small class="font-sans antialiased text-sm text-current"> {{ $appointment->physician->FName }} {{ $appointment->physician->LName }}</small>
                                        <small class="font-sans antialiased text-sm text-current opacity-70">{{ $appointment->physician->email }}</small>
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
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>
</x-layout>
