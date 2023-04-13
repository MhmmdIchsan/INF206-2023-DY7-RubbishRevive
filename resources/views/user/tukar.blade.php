@extends('layouts.app')


@section('body')
    class="bg-[#D6EEF5]"
@endsection

@section('content')
    <section id="home" class="pt-24">
        <div class="container flex justify-center">
            <div class="flex flex-wrap ">
                <div class="w-full text-center">
                    <h1 class="pb-4 block pt-10 font-normal text-slate-600 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]">
                        PENUKARAN
                    </h1>
                    <!--card-->
                    <div class=" px-4 py-2 pt-10 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block ">
                            <img src="{{ asset('image/pulsa.png') }}" class="w-60 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Voucher Pulsa 10000</h1>
                        <p class="text-sm text-gray-600">
                            10 Poin
                        </p>
                    </div>
                    <!--Tempat isi-->
                    <div class=" px-4 py-2">
                        <input type="text" placeholder="Nomor HP"
                            class="border border-gray-400 rounded py-2 px-4 w-full">
                    </div>
                    <button class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-bold py-2 px-4 rounded-md">
                        <a href="#" class="btn btn-danger delete">
                            Tukar >
                    </button>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
            integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $('.delete').click(function() {
                swal("SUKSES", "Berhasil Menukar Poin", "success");
            });
        </script>
    </section>
@endsection
