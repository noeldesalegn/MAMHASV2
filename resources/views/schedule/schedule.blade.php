<x-layout>
    <form method="POST" action="/login" enctype="multipart/form-data">
        @csrf

        <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <h2 class="font-semibold text-xl text-gray-600">MAMHAS</h2>
                    <p class="text-gray-500 mb-6">CARING & REASSURING.</p>

                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Login</p>

                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                    <div class="md:col-span-5">
                                        <label for="email">Email Address</label>
                                        <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>


                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Log in</button>
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
