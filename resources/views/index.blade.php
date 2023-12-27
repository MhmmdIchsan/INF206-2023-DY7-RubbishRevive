@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<section id="home" class="select-none">
    <div class="bg-gradient-to-tl from-cyan-500 to-cyan-100 py-4">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex flex-wrap rounded-lg m-8">
                <div class="text-center item-center m-auto w-96">
                    <h1 class="block font-bold text-2xl text-justify text-black">"Mengubah Sampah Menjadi Harta karun!"
                    </h1>
                    <span class="block font-normal text-xl text-justify text-black pb-5"> Mengubah perspektif
                        sampah sebagai sesuatu yang berharga yang bisa menjadi 'harta karun' di masa depan, mungkin
                        melaluinya
                        mendaur ulang.</span>
                    <button
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-black dark:text-black focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <a href="/register"
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                            Get Started >
                        </a>
                    </button>
                </div>
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-fit h-359 w-459 mx-32">
            </div>

            <!-- Carousel start -->
            <div id="default-carousel" class="relative drop-shadow-2xl max-w-4xl mx-auto">
                <h1 class="text-center text-3xl mb-5 bg-white rounded-lg shadow-md">Informasi</h1>

                <!-- Carousel wrapper -->
                <div class="slick-carousel mb-10 shadow-inner">
                    <!-- Item 1 -->
                    <div class="card bg-white rounded-lg shadow-md p-4 w-64 mx-4 flex flex-col items-center">
                        <!-- Menambahkan class flex dan items-center -->
                        <img src="https://images.unsplash.com/photo-1565886728041-a239b6a3ec42?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            class="card-img object-cover h-40 w-full" alt="...">
                        <div class="card-body flex-1">
                            <h3 class="card-title text-black">Cara Pengolahan Sampah Plastik Menjadi Kerajinan</h3>
                            <a href="/informasi-jenis-plastik">
                                <button
                                    class="btn-read-more py-2 px-4 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 text-white">Read
                                    More</button> <!-- Menambahkan kelas dekoratif -->
                            </a>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="card bg-white rounded-lg shadow-md p-4 w-64 mx-4 flex flex-col items-center">
                        <!-- Menambahkan class flex dan items-center -->
                        <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="card-img object-cover h-40 w-full" alt="...">
                        <div class="card-body flex-1">
                            <h3 class="card-title text-black">Cara Pembuatan Pupuk Kompos dari Sampah</h3>
                            <a href="/informasi-jenis-kompos">
                                <button
                                    class="btn-read-more py-2 px-4 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 text-white">Read
                                    More</button> <!-- Menambahkan kelas dekoratif -->
                            </a>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="card bg-white rounded-lg shadow-md p-4 w-64 mx-4 flex flex-col items-center">
                        <!-- Menambahkan class flex dan items-center -->
                        <img src="https://images.unsplash.com/photo-1616990277483-c801063f6946?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1039&q=80"
                            class="card-img object-cover h-40 w-full" alt="...">
                        <div class="card-body flex-1">
                            <h3 class="card-title text-black">Cara Aman Mengelola Sampah Kertas</h3>
                            <a href="/informasi-jenis-kertas">
                                <button
                                    class="btn-read-more py-2 px-4 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 text-white">Read
                                    More</button> <!-- Menambahkan kelas dekoratif -->
                            </a>
                        </div>
                    </div>

                    <!-- Item 4-->
                    <div class="card bg-white rounded-lg shadow-md p-4 w-64 mx-4 flex flex-col items-center">
                        <!-- Menambahkan class flex dan items-center -->
                        <img src="https://images.unsplash.com/photo-1606901302392-ca613ab6abb7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="card-img object-cover h-40 w-full" alt="...">
                        <div class="card-body flex-1">
                            <h3 class="card-title text-black">Cara Tepat Mengolah Sampah Anorganik</h3>
                            <a href="/informasi-jenis-anorganik">
                                <button
                                    class="btn-read-more py-2 px-4 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 text-white">Read
                                    More</button>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- Custom symbols for next and previous buttons -->
                <button type="button" class="slick-prev slick-custom-button" id="prevButton">
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </span>
                </button>
                <button type="button" class="slick-next slick-custom-button" id="nextButton">
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </span>
                </button>
            </div>
            <!-- Carousel end -->
        </div>
    </div>
</section>

<style>
    .slick-custom-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        outline: none;
    }

    .slick-prev {
        left: 10px;
    }

    .slick-next {
        right: 10px;
    }

</style>

<script>
    // Initialize Slick Carousel with autoplay
    $(document).ready(function () {
        $('.slick-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            centerMode: true,
            variableWidth: true,
            prevArrow: '<button type="button" class="slick-prev slick-custom-button" id="prevButton"></button>',
            nextArrow: '<button type="button" class="slick-next slick-custom-button" id="nextButton"></button>'
        });

        // Add click event for the previous button
        $(document).on('click', '#prevButton', function () {
            $('.slick-carousel').slick('slickPrev');
        });

        // Add click event for the next button
        $(document).on('click', '#nextButton', function () {
            $('.slick-carousel').slick('slickNext');
        });
    });

</script>
@endsection
