@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')

<section id="home" class="pt-24 ">
    <div class="container content-center')">
        <div class="flex flex-wrap ">
            <div class="w-full self-center px-4 text-center ">
                <ul class="lg:flex justify-center">
                    <li class="group">
                        <a href="/history" class="text-base text-black py-5 flex group-hover:text-primary ">
                            <img src="{{ asset('image/history.png') }}" class="scale-100"></img></a>
                    </li>
                </ul>
                <h1 class="block font-normal text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]">HISTORY</h1>
            </div>
        </div>
    </div>
</section>

<!-- make card -->
<div class="flex flex-wrap justify-center pt-5">
    <div class="w-full sm:w-6/12 md:w-4/12 lg:w-3/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-[#ADFF2F] w-full mb-6 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
                <div class="text-center">
                    <p class="text-xs text-[#959595]"> COMPLETE | Menukar Voucher Menjadi Pulsa </p>
                    <p class="font-bold text-2xl text-[#737373]"> 9, February 2023 </p>
                    <p class="text-center text-[#737373]"> -50 Poin</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- make card 2-->
<div class="flex flex-wrap justify-center pt-5">
    <div class="w-full sm:w-6/12 md:w-4/12 lg:w-3/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-[#FFFF00] w-full mb-6 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
                <div class="text-center">
                    <p class="text-xs text-[#959595]"> COMPLETE | Sampah Telah Diambil oleh Driver </p>
                    <p class="font-bold text-2xl text-[#737373]"> 16, January 2023 </p>
                    <p class="text-center text-[#737373]"> +50 Poin</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- End Hero Section -->

@endsection