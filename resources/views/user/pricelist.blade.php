@extends('layouts.app')


@section('body')
    class="bg-[#D6EEF5]"
@endsection

@section('content')
    <section id="home" class="pt-10">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 text-center ">
                    <h1 class=" pt-1 font-normal text-slate-600 mt-1 text-3xl text-[#9ADCF1]">
                        DAFTAR HARGA SAMPAH</h1>
                </div>
                <!--Card-->
                <div class="pt-3 flex flex-wrap justify-center">
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/botolplastik.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Botol Plastik</h1>
                        <p class="text-sm text-gray-600">
                            5 poin /kg
                        </p>
                    </div>
                    <!--kotak kedua-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/botolkaca.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Botol Kaca</h1>
                        <p class="text-sm text-gray-600">
                            5 poin /kg
                        </p>
                    </div>
                    <!--kotak ketiga-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/kantongplastik.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Kantong Plastik</h1>
                        <p class="text-sm text-gray-600">
                            3 poin /kg
                        </p>
                    </div>
                    <!--kotak keempat-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/Kertas.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Kertas</h1>
                        <p class="text-sm text-gray-600">
                            5 poin /kg
                        </p>
                    </div>
                    <!--kotak kelima-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/aluminium.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Aluminium</h1>
                        <p class="text-sm text-gray-600">
                            7 poin /kg
                        </p>
                    </div>
                    <!--kotak keenam-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/koranbekas.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Koran Bekas</h1>
                        <p class="text-sm text-gray-600">
                            3 poin /kg
                        </p>
                    </div>
                    <!--kotak ketujuh-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/kaleng.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Kaleng</h1>
                        <p class="text-sm text-gray-600">
                            5 poin /kg
                        </p>
                    </div>
                    <!--kotak kedelapan-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/elektronik.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Elektronik</h1>
                        <p class="text-sm text-gray-600">
                            10 poin /kg
                        </p>
                    </div>
                    <!--kotak kesembilan-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/sampahorganik.jpg') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Sampah Organik</h1>
                        <p class="text-sm text-gray-600">
                            3 poin /kg
                        </p>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>

    <!-- End Hero Section -->
@endsection
