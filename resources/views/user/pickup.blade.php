@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')
<!-- make form -->
<form action="/pickup" method="POST">
    @csrf

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Isi Form
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:max-w-md">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <div class="mt-1 pb-2">
                    <input id="nama" name="nama" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Nama">
                </div>
                <div class="mt-1 pb-2">
                    <input id="alamat" name="alamat" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Alamat">
                </div>
                <div class="mt-1 pb-2">
                    <input id="phone" name="phone" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Nomor Hp">
                </div>
                <div class="mt-1 pb-2">
                    <input id="email" name="email" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Email">
                </div>
                <div class="mt-1 pb-2">
                    <input id="jenissampah" name="jenissampah" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Jenis Sampah">
                </div>
                <div class="mt-1 pb-2">
                    <input id="beratsampah" name="beratsampah" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Berat Sampah">
                </div>
                <div>
                    <div class="flex justify-center">
                        <label
                            class="flex flex-col border-4 border-dashed w-60 h-32 hover:bg-gray-100 hover:border-blue-300 group">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <svg class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <p class="lowercase text-sm text-gray-400 group-hover:text-blue-600 pt-1 tracking-wider">
                                    Select a file</p>
                            </div>
                            <input type='file' class="hidden" />
                        </label>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-bold py-2 px-4 rounded-md">
                        <a href="/confirm">
                            Send >
                    </button>
                </div>
                
            </div>





        </form>
        @endsection
