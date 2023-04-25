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
                <p class="text-2xl font-bold text-center text-black">Information !!</p><br>
            </div>

            <div class="flex max-w-7xl mx-auto gap-8 pb-10">
               <div class="bg-white opacity-90 p-8 rounded-xl shadow-slate-600 border-2 ">
                   <img src="https://images.unsplash.com/photo-1565886728041-a239b6a3ec42?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="" class=" h-auto mx-auto"/>
                   <h5 class="text-lg font-bold p-2">Cara Pengolahan Sampah Plastik Menjadi Kerajinan</h5>
                   <p class="text-sm leading-7 my-3 font-dark pl-2 text-justify">
                   Penggunaan plastik yang masif dalam kehidupan sehari-hari telah menyebabkan pencemaran lingkungan meliputi tanah, air, laut, bahkan udara.
                   Salah satu solusi untuk mengatasinya yakni dengan mendaur ulang limbah plastik menjadi kerajinan.
                   </p>
                   <a href="/informasi" class=" bg-slate-400 font-semibold text-xs py-2 px-4 rounded-3xl border-2 shadow-2xl">
                       Baca lebih lanjut >></a>
               </div>

               <div class="bg-white opacity-90 p-8 rounded-xl shadow-slate-600 border-2 ">
                   <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class=" h-32 mx-auto"/>
                   <h5 class="text-lg font-bold p-2">Cara Pembuatan Pupuk Kompos dari Sampah Bekas</h5>
                   <p class="text-sm leading-7 my-3 font-dark pl-2 text-justify">
                   Berbagai macam bentuk limbah  pun dihasilkan mulai dari yang cair maupun yang padat. 
                   Jika limbah tersebut tidak diolah dengan baik bisa mencemari lingkungan sehingga diperlukan pengolahan limbah yang baik dan benar. 
                   Salah satu pengolahan limbah yang sering dilakukan oleh masyarakat adalah pembuatan pupuk kompos.
                   Simak cara pembuatan pupuk kompos dari sampah bekas pada artikel.
                   </p>
                   <a href="/informasi" class=" bg-slate-400 font-semibold text-xs py-2 px-4 rounded-3xl border-2 shadow-2xl">
                       Baca lebih lanjut >></a>
               </div>

               <div class="bg-white opacity-90 p-8 rounded-xl shadow-slate-600 border-2 ">
                   <img src="https://images.unsplash.com/photo-1616990277483-c801063f6946?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1039&q=80" alt="" class=" h-32 mx-auto"/>
                   <h5 class="text-lg font-bold p-2">Cara Aman Mengelola Sampah Kertas</h5>
                   <p class="text-sm leading-7 my-3 font-dark pl-2 text-justify">
                        Dikutip dari Environmental Paper Network, produksi kertas global telah menembus angka 400 juta ton per tahun. 
                        Setiap ton kertas yang diproduksi membutuhkan setidaknya 24 batang pohon. 
                        Hal ini menunjukkan bahwa dalam setahun ada setidaknya 9.600 pohon yang ditebang untuk memenuhi kebutuhan kertas global.
                        Simak berbagai cara alternatif dalam mengelola sampah kertas.
                   </p>
                   <a href="/informasi" class=" bg-slate-400 font-semibold text-xs py-2 px-4 rounded-3xl border-2 shadow-2xl">
                       Baca lebih lanjut >></a>
               </div>
               <div class="bg-white opacity-90 p-8 rounded-xl shadow-slate-600 border-2 ">
                   <img src="https://images.unsplash.com/photo-1606901302392-ca613ab6abb7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class=" h-32 mx-auto"/>
                   <h5 class="text-lg font-bold p-2">Cara Tepat Mengolah Sampah Anorganik</h5>
                   <p class="text-sm leading-7 my-3 font-dark pl-2 text-justify">
                        Dikutip dari Environmental Paper Network, produksi kertas global telah menembus angka 400 juta ton per tahun. 
                        Setiap ton kertas yang diproduksi membutuhkan setidaknya 24 batang pohon. 
                        Hal ini menunjukkan bahwa dalam setahun ada setidaknya 9.600 pohon yang ditebang untuk memenuhi kebutuhan kertas global.
                        Simak berbagai cara alternatif dalam mengelola sampah kertas.
                   </p>
                   <a href="/informasi" class=" bg-slate-400 font-semibold text-xs py-2 px-4 rounded-3xl border-2 shadow-2xl">
                       Baca lebih lanjut >></a>
               </div>
            </div>
            
        </div>
    </div>
   </div>
</section>

<!-- End Hero Section -->



@endsection
