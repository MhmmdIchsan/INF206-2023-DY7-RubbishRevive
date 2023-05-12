@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')

<div class="relative flex flex-wrap ">
    <div class="flex justify-between px-4 mx-auto max-w-screen-7xl">
        <div class="absolute flex justify-center items-center left-0 right-0 m-auto w-100 h-12 mt-10">
            <p class="text-3xl font-bold leading-none tracking-tight text-[#737373] md:text-3xl lg:text-3xl dark:text-white"> Jadwal Pickup Sampah </p>
        </div>

        <div class="absolute mt-32 top-0 right-0 bottom-0 left-0 m-auto w-100 h-12">
            <div class="grid grid-cols-3 gap-16 place-items-center h-56 w-auto lg:px-40 px-0">
                <div class="border-1 border-sky-800 bg-[#6096B4] opacity-90 px-6 pt-6 pb-8 rounded-xl shadow-md shadow-zinc-400">
                    <div class="font-semibold text-xl underline text-center mb-4">Senin</div>
                    <div>
                        <ul class="list-disc list-inside"> 
                            <li>Kecamatan Syiah Kuala : 09.00 - 10.30 </li>
                            <li>Kecamatan Ulee Kareng : 11.00 - 12.30 </li>
                            <li>Kecamatan Lueng Bata : 14.00 - 16.00 </li>
                        </ul>
                    </div>
                </div>

                <div class="border-1 border-sky-800 bg-[#6096B4] opacity-90 px-6 pt-6 pb-8 rounded-xl shadow-md shadow-zinc-400">
                    <div class="font-semibold text-xl underline text-center mb-4">Selasa</div>
                    <div>
                        <ul class="list-disc list-inside"> 
                            <li>Kecamatan Kuta Alam : 09.00 - 10.30 </li>
                            <li>Kecamatan Baiturrahman : 11.00 - 12.30 </li>
                            <li>Kecamatan Banda Raya : 14.00 - 16.00 </li>
                        </ul>
                    </div>
                </div>

                <div class="border-1 border-sky-800 bg-[#6096B4] opacity-90 px-6 pt-6 pb-8 rounded-xl shadow-md shadow-zinc-400">
                    <div class="font-semibold text-xl underline text-center mb-4">Rabu</div>
                    <div>
                        <ul class="list-disc list-inside"> 
                            <li>Kecamatan Meuraxa : 09.00 - 10.30 </li>
                            <li>Kecamatan Kuta Raja : 11.00 - 12.30 </li>
                            <li>Kecamatan Jaya Baru : 14.00 - 16.00 </li>
                        </ul>
                    </div>
                </div>

                <div class="border-1 border-sky-800 bg-[#6096B4] opacity-90 px-6 pt-6 pb-8 rounded-xl shadow-md shadow-zinc-400">
                    <div class="font-semibold text-xl underline text-center mb-4">Kamis</div>
                    <div>
                        <ul class="list-disc list-inside"> 
                            <li>Kecamatan Syiah Kuala : 09.00 - 10.30 </li>
                            <li>Kecamatan Ulee Kareng : 11.00 - 12.30 </li>
                            <li>Kecamatan Lueng Bata : 14.00 - 16.00 </li>
                        </ul>
                    </div>
                </div>

                <div class="border-1 border-sky-800 bg-[#6096B4] opacity-90 px-6 pt-6 pb-8 rounded-xl shadow-md shadow-zinc-400">
                    <div class="font-semibold text-xl underline text-center mb-4">Jumat</div>
                    <div>
                        <ul class="list-disc list-inside"> 
                            <li>Kecamatan Kuta Alam : 09.00 - 10.30 </li>
                            <li>Kecamatan Baiturrahman : 11.00 - 12.30 </li>
                            <li>Kecamatan Banda Raya : 14.00 - 16.00 </li>
                        </ul>
                    </div>
                </div>

                <div class="border-1 border-sky-800 bg-[#6096B4] opacity-90 px-6 pt-6 pb-8 rounded-xl shadow-md shadow-zinc-400">
                    <div class="font-semibold text-xl underline text-center mb-4">Sabtu</div>
                    <div>
                        <ul class="list-disc list-inside"> 
                            <li>Kecamatan Meuraxa : 09.00 - 10.30 </li>
                            <li>Kecamatan Kuta Raja : 11.00 - 12.30 </li>
                            <li>Kecamatan Jaya Baru : 14.00 - 16.00 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection