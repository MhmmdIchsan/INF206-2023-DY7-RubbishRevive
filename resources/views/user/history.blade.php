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
                        <a href="/history" class="text-base text-black py-5 flex group-hover:text-primary "><img
                                src="{{ asset('image/history.png') }}" class="scale-100"></img></a>
                    </li>
                </ul>
                <h1 class="block font-normal text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]">History</h1>
            </div>
        </div>
    </div>
</section>

<!-- End Hero Section -->

@endsection
