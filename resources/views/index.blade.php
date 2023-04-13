 @extends('layouts.app')


 @section('body')
 class="background-image: asset('image/background.png')"

 @endsection


 @section('content')
 <section id="home" class=" ">
    <div class="relative overflow-hidden bg-[url('../../public/image/background.png')] backdrop-blur bg-center bg-cover">
     <div class="container content-center')">
         <div class="flex flex-wrap">
             <div class="w-full self-center text-center pt-14">
                 <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-1/4 h-359 w-459 mx-auto">
                 <h1 class="block font-bold text-5xl lg:text-5xl underline text-[#9ADCF1]">Rubbish Revive</h1>
                 <span class="block font-normal text-5xl mt-1 lg:text-5xl text-[#9ADCF1]"> We are here to help you</span>
                 <ul class="lg:flex justify-center">
                     <a href="/register" class="text-base text-black py-5 flex group-hover:text-primary "><img src="{{ asset('image/GetStarted.png') }}" class="scale-75"></img></a>
                 </ul>
             </div>
         </div>
     </div>
    </div>
 </section>

 <!-- End Hero Section -->



 @endsection
