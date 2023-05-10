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
                    Kami hadir dengan solusi inovatif untuk mengatasi permasalahan sampah. Aplikasi mobile multifungsi
                    kami membantu pengguna dalam mengelola sampah secara efektif dan efisien, mulai dari penjemputan
                    sampah hingga penukaran poin yang dapat ditukar dengan kebutuhan rumah tangga seperti sembako, token
                    listrik, dan pulsa.
                    Dalam aplikasi ini, pengguna juga dapat mengetahui informasi harga sampah terkini dan tata cara
                    pengolahan sampah yang baik terhadap lingkungan.
                </span>
            </div>
        </div>
    </div>

    <div class="container mb-4 mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-[#2b3437]">Meet Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card for Team Description -->
            <div class="bg-white shadow-md rounded-md overflow-hidden text-sm h-60 text-center">
                <div class="p-4">
                    <h3 class="text-xl font-medium mb-2">Our Story</h3>
                    <p class="text-gray-600 mb-4">Berawal dari keprihatinan kami terhadap permasalahan sampah yang ada
                        di lingkungan sekitar. Kami menyadari bahwa masalah ini memerlukan
                        solusi yang inovatif dan nyata.
                        Melalui diskusi dan riset, kami menciptakan sebuah aplikasi
                        mobile multifungsi yang dapat membantu pengguna dalam mengelola sampah dengan lebih efektif dan
                        efisien. Kami berkomitmen untuk memberikan solusi yang ramah lingkungan dan berkelanjutan.
                    </p>
                </div>
            </div>

            <!-- Profile Card for Muhammad Ichsan -->
            <div class="bg-white shadow-md rounded-md overflow-hidden text-sm h-60 text-center">
                <img class="w-full h-40 object-cover" src="{{ asset('image/ichsanprofile.jpg') }}"
                    alt="Muhammad Ichsan">
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Muhammad Ichsan</h3>
                    <p class="text-gray-600 mb-2">Ketua Kelompok</p>
                </div>
            </div>

            <!-- Profile Card for Andrean Badar -->
            <div class="bg-white shadow-md rounded-md overflow-hidden text-sm h-60 text-center">
                <img class="w-full h-40 object-cover" src="{{ asset('image/andreprofile.jpg') }}" alt="Andrean Badar">
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Andrean Badar</h3>
                    <p class="text-gray-600 mb-2">Anggota</p>
                </div>
            </div>

            <!--

            Profile Card for Laila Asrin 
            <div class="bg-white shadow-md rounded-md overflow-hidden text-sm h-60 text-center">
                <img class="w-full h-40 object-cover" src="{{ asset('image/lailaprofile.jpeg') }}" alt="Laila Asrin">
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Laila Asrin</h3>
                    <p class="text-gray-600 mb-2">Anggota</p>
                </div>
            </div>

            Profile Card for Tyara Raynasari 
            <div class="bg-white shadow-md rounded-md overflow-hidden text-sm h-60 text-center">
                <img class="w-full h-40 object-cover" src="{{ asset('image/tyaraprofile.jpeg') }}"
                    alt="Tyara Raynasari">
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Tyara Raynasari</h3>
                    <p class="text-gray-600 mb-2">Anggota</p>
                </div>
            </div>

             Profile Card for Nabilah Qurratul Annisa 
            <div class="bg-white shadow-md rounded-md overflow-hidden text-sm h-60 text-center">
                <img class="w-full h-40 object-cover" src="{{ asset('image/nabilaprofile.jpeg') }}"
                    alt="Nabilah Qurratul Annisa">
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Nabilah Qurratul Annisa</h3>
                    <p class="text-gray-600 mb-2">Anggota</p>
                </div>
            </div>
        </div>
    </div>
-->
</section>

@endsection