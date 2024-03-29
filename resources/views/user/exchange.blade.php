@extends('layouts.app')


@section('body')
class="bg-gradient-to-tl from-cyan-500"
@endsection

@section('content')
    <section id="home" class="pt-10">
        <div class="container mx-auto">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 text-center ">
                    <h1 class=" pt-1 font-normal text-slate-600 mt-1 text-3xl text-[#9ADCF1]">
                        PENUKARAN</h1>
                </div>
                <!--Card-->
                <div class="flex flex-wrap justify-center">
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherpulsa.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Voucher Pulsa 10000</h1>
                        <p class="text-sm text-gray-600">
                            10 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak kedua-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherpulsa.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Voucher Pulsa 20000</h1>
                        <p class="text-sm text-gray-600">
                            20 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak ketiga-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherpulsa.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Voucher Pulsa 50000</h1>
                        <p class="text-sm text-gray-600">
                            50 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak keempat-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherpulsa.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Voucher Pulsa 100000</h1>
                        <p class="text-sm text-gray-600">
                            100 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak kelima-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherlistrik.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Token Listrik 50000</h1>
                        <p class="text-sm text-gray-600">
                            50 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak keenam-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherlistrik.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Token Listrik 100000</h1>
                        <p class="text-sm text-gray-600">
                            100 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak ketujuh-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherlistrik.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Token Listrik 150000</h1>
                        <p class="text-sm text-gray-600">
                            150 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                    <!--kotak kedelapan-->
                    <div class="p-4 m-8 w-40 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block">
                            <img src="{{ asset('image/voucherlistrik.png') }}" class="w-40 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Token Listrik 200000</h1>
                        <p class="text-sm text-gray-600">
                            200 Poin
                        </p>
                        <div class="justify-end flex">
                            <a href="/tukarPoin" type="button"
                                class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Tukar
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>

    <!-- End Hero Section -->
@endsection
