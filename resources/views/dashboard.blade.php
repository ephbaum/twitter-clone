<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-center w-screen">
        <form action="/api/twoot" method="post">
            <div class="min-w-fit">
                <label for="twoot" class="form-label block mb-2 text-gray-700">Twoot something magical:
                    <textarea class="
                        form-control
                        block
                        min-w-fit
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="twootTextarea"
                    rows="4"
                    placeholder="What's shakin' bacon?"
                    name="twoot_body"
                    ></textarea>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                </label>
                <input type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                   Twoot!
                </input>
        </div>
        </form>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($twoots as $twoot)
                            <div class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800" style="max-width: 400px">
                                <div class="w-full flex mb-4">
                                    <div class="overflow-hidden rounded-full w-12 h-12">
                                        <img src="https://uifaces.co/our-content/donated/1H_7AxP0.jpg" alt="">
                                    </div>
                                    <div class="flex-grow pl-3">
                                        <h6 class="font-bold text-md">{{ $twoot->user->name }}</h6> <!-- user name -->
                                        <p class="text-xs text-gray-600">{{ $twoot->user->email }}</p> <!-- username -->
                                    </div>
                                    <div class="w-12 text-right">
                                        <i class="mdi mdi-twitter text-blue-400 text-3xl"></i>
                                    </div>
                                </div>
                                <div class="w-full mb-4">
                                    <p class="text-sm">
                                        {{ $twoot->twoot_body }}
                                    </p>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs text-gray-500 text-right">
                                        @displayDate($twoot->created_at)
                                    </p>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
