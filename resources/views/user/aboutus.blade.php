@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')

<section id="home" class=" ">
    <div class="container content-center')">
        <div class="flex flex-wrap">
            <div class="w-full self-center text-center pt-14">
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="pb-0 w-1/4 h-359 w-459 mx-auto">
                <span class="text-center block font-light pt-0 pb-20 px-20 text-xl mt-1 lg:text-xl text-[#282929]">
                    Dari permasalahan yang ada, kami memberikan sebuah solusi kepada masyarakat dengan menciptakan
                    sebuah aplikasi mobile multifungsi untuk membantu pengguna dalam mengelola sampah secara efektif dan
                    efisien.
                    Aplikasi ini dapat digunakan untuk penjemputan sampah, melihat info harga sampah yang ditukar, serta
                    penukaran poin.
                    Poin dapat ditukar menjadi berbagai macam kebutuhan rumah tangga seperti sembako, token listrik, dan
                    pulsa.
                    Sehingga dapat membantu perekonomian rumah tangga.
                    Aplikasi ini juga dapat membantu pengguna untuk melihat tata cara pengolahan sampah yang baik
                    terhadap lingkungan.
                </span>
            </div>
        </div>
    </div>
</section>

@endsection