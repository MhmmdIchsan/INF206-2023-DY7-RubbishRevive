@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')


<div>
    <h1 class="block text-center font-bold text-5xl lg:text-5xl m-5 pt-15 text-[#737373]">Welcome <span
            class="underline"> {{ Auth::user()->name }}</span>!</h1>
    <div class="flex flex-wrap justify-center m-13 ">
        <!--carousel start-->
        <div id="default-carousel" class="relative w-4/5 m-auto drop-shadow-2xl" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative  h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{url('image/image2.png')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('images/carousel2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('images/carousel3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-3 left-1/2">
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

        <!-- Kotak Pertama -->
        <div class="justify-center p-5">
            <div class="relative flex mb-6 shadow-lg rounded-lg bg-white border border-black">
                <div class="">
                    <div class="relative w-full m-auto pl-15 pr-15">
                        <a href="/ongoing"
                            class="justify-center pt-2 text-base text-black flex group-hover:text-primary "><img
                                src="{{ asset('image/Pickup trash.png') }}" class="w-32"></img></a>
                        <p class="text-center m-auto p-1 text-xs">Layanan Menjemput Sampah ke Rumah Anda.</p>
                        <div class="flex justify-center pb-2">
                            <button
                                class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-semibold text-xs py-1 px-20 rounded-md">
                                <a href="/pickup">
                                    GO >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak Kedua -->
        <div class="justify-center p-5">
            <div class="relative flex mb-6 shadow-lg rounded-lg bg-white border border-black">
                <div class="">
                    <div class="relative w-full m-auto pl-15 pr-15">
                        <a href="/ongoing"
                            class="justify-center pt-2 text-base text-black flex group-hover:text-primary "><img
                                src="{{ asset('image/Jadwal Pickup.png') }}" class="w-32"></img></a>
                        <p class="text-center m-auto p-1 text-xs">Informasi Tentang Jadwal Penjemputan Sampah.</p>
                        <div class="flex justify-center pb-2">
                            <button
                                class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-semibold text-xs py-1 px-20 rounded-md">
                                <a href="/jadwal">
                                    GO >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak Ketiga -->
        <div class="justify-center p-5">
            <div class="relative flex mb-6 shadow-lg rounded-lg bg-white border border-black">
                <div class="">
                    <div class="relative w-full m-auto pl-15 pr-15">
                        <a href="/ongoing"
                            class="justify-center pt-2 text-base text-black flex group-hover:text-primary "><img
                                src="{{ asset('image/exchange.png') }}" class="w-32"></img></a>
                        <p class="text-center m-auto p-1 text-xs">Informasi Tentang Jadwal Penjemputan Sampah.</p>
                        <div class="flex justify-center pb-2">
                            <button
                                class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-semibold text-xs py-1 px-20 rounded-md">
                                <a href="/jadwal">
                                    GO >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function Menu(e) {
            let list = document.querySelector('ul');

            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add(
                'opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove(
                    'opacity-100'))
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @endsection
