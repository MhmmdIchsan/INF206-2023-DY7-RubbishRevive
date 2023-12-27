@extends('layouts.app')


@section('body')
class="bg-gradient-to-tl from-cyan-500"
@endsection

@section('content')
<section id="home" class="flex items-center justify-center mt-24">
    <div class="container">
        <div class="flex flex-col items-center">
            <ul class="lg:flex justify-center space-x-8">
                <li class="group">
                    <a href="pickup.history" class="text-3xl text-black py-5 flex group-hover:text-primary"><img
                            src="{{ asset('image/history.png') }}" class="scale-90"></img></a>
                </li>
                <li class="group">
                    <a href="/myprofile" class="text-3xl text-black flex group-hover:text-primary"><img
                            src="{{ asset('image/Avataricon.png') }}" class="scale-90"></img></a>
                </li>
                <li class="group">
                    <a href="/ongoing" class="text-3xl text-black py-5 flex group-hover:text-primary"><img
                            src="{{ asset('image/ongoing.png') }}" class="scale-90"></img></a>
                </li>
            </ul>

            <h1 class="font-normal text-slate-800 text-6xl lg:text-6xl text-[#9ADCF1] mb-8">MY PROFILE</h1>
            <div class="text-center text-2xl mb-8">
                <p>Username: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
                <p>Role: {{ Auth::user()->role }}</p>
            </div>
            <button class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-bold text-2xl py-3 px-6 rounded-md">
                <a href="/logout">Log out ></a>
            </button>
        </div>
    </div>
</section>
@endsection