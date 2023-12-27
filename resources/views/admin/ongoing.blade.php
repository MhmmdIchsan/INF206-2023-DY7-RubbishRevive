@extends('layouts.app')


@section('body')
class="bg-gradient-to-tl from-cyan-500"
@endsection

@section('content')

<section id="home" class="pt-20 ">
    <div class="container content-center mx-auto">
        <div class="flex flex-wrap ">
            <div class="w-full self-center px-4 text-center ">
                <ul class="lg:flex justify-center">
                    <li class="group">
                        <a href="/ongoing" class="text-base text-black py-5 flex group-hover:text-primary "><img
                                src="{{ asset('image/ongoing.png') }}" class="scale-100"></img></a>
                    </li>
                </ul>
                <h1 class="block font-normal text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1] underline py-3">
                    On-Going
                    Transaction</h1>
                <div class="card border-0 shadow-sm rounded">

                </div>
            </div>
        </div>
    </div>
</section>
<div class="flex flex-warp justify-center">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">

                @forelse ($pickups as $pickup)
                <div
                    class="flex flex-col mb-5 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="/docs/images/blog/image-4.jpg" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $pickup->nama }}</h5>
                        <h6 class="mb-2 text-xl tracking-tight text-gray-900">{{ $pickup->status }}</h6>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pickup->alamat }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Driver : {{ $pickup->driver_id }} -
                            {{ $pickup->driver_name }}</p>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger text-center">
                    Data Request Pickup belum Tersedia.
                </div>
                @endforelse
                {{ $pickups->links() }}

                @forelse ($tukarpoin as $pickup)
                <div
                    class="flex flex-col mb-5 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="{{ asset('image/voucherpulsa.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $pickup->nama }}</h5>
                        <h6 class="mb-2 text-xl tracking-tight text-gray-900">{{ $pickup->namahadiah }}</h6>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pickup->status }}</p>
                    </div>
                    <div class="items-center px-5">
                        <form action="{{ route('pickup.destroy',$pickup->id) }}" method="POST">
                            <a class="btn btn-primary text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                href="{{ route('tukarpoin.edit',$pickup->id) }}">Terima</a>
                        </form>
                    </div>
                </div>

                @empty
                <div class="alert alert-danger">

                    @endforelse

                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function () {
            // Set Toastr options
            toastr.options = {
                positionClass: 'toast-top-right',
                closeButton: true,
                progressBar: true,
            };

            // Display Toastr messages
            @if(session()->has('success'))
                toastr.success('{{ session('success') }}', 'BERHASIL!');
            @elseif(session()->has('error'))
                toastr.error('{{ session('error') }}', 'GAGAL!');
            @endif
        });
    </script>
@endsection