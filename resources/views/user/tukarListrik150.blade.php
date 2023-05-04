@extends('layouts.app')


@section('body')
    class="bg-[#D6EEF5]"
@endsection

@section('content')
    <section id="home" class="pt-10">
        <div class="container flex justify-center">
            <div class="flex flex-wrap ">
                <div class="w-full text-center">
                    <div class="pb-3">
                        <h1 class=" pt-1 font-normal text-slate-600 mt-1 text-3xl text-[#9ADCF1]">
                            PENUKARAN</h1>
                    </div>
                    <!--card-->
                    <div class=" px-4 py-2 pt-10 bg-white shadow-md rounded-xl">
                        <picture class="rounded-lg block ">
                            <img src="{{ asset('image/pulsa.png') }}" class="w-60 h-40 object-cover" />
                        </picture>

                        <h1 class="mt-4 mb-2 text-xl font-bold">Voucher Listrik 150000</h1>
                        <p class="text-sm text-gray-600">
                            150 Poin
                        </p>
                    </div>
                    <!--Tempat isi-->
                    <div class=" px-4 py-2">
                        <input type="text" placeholder="Nomor HP"
                            class="border border-gray-400 rounded py-2 px-4 w-full">
                    </div>
                    <button
                        class=" rounded bg-blue-700 px-1 pb-2 pt-2 text-xs font-medium 
      leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] 
      transition duration-150 ease-in-out hover:bg-primary-600 
      hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
      focus:outline-none focus:ring-0 active:bg-primary-700 
      active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init data-te-ripple-color="light">
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
