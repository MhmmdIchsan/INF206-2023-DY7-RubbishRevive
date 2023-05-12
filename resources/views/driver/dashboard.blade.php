@extends('layouts.app')


@section('body')
    class="bg-[#D6EEF5]"
@endsection

@section('content')
    <div>
        <h1 class="block text-center font-bold text-5xl lg:text-5xl m-5 pt-15 text-[#737373]">Welcome <span class="underline">
                {{ Auth::user()->name }}</span>!</h1>
        <div class="max-w-2xl mx-auto">
            <!--carousel start-->
            <div id="default-carousel" class="relative drop-shadow-2xl" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ url('image/image2.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ url('image/image1.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ url('image/image3.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg"
                            alt="...">
                    </div>

                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>

                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <!--carousel end-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

        </div>
        <!--icon-->
        <div class="flex flex-wrap justify-center m-13 ">

            <ul class="lg:flex justify-center">
                <li class="group">
                    <a href="/pickup.history" class="text-base text-black py-5 flex group-hover:text-primary  w-40 h-40"><img
                            src="{{ asset('image/history.png') }}" class="scale-75 object-contain"></img></a>
                </li>
                <li class="group">
                    <a href="/myprofile" class="text-base text-black py-5 flex group-hover:text-primary w-40 h-40 "><img
                            src="{{ asset('image/AvatarIcon.png') }}" class="scale-75 object-contain"></img></a>
                </li>
                <li class="group">
                    <a href="/ongoing" class="text-base text-black py-5 flex group-hover:text-primary w-40 h-40"><img
                            src="{{ asset('image/ongoing.png') }}" class="scale-75 object-contain"></img></a>
                </li>
            </ul>
        </div>
        <!--icon end-->
    @endsection
