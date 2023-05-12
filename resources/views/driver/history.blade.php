@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')

<section id="home" class="pt-20 ">
    <div class="container content-center')">
        <div class="flex flex-wrap ">
            <div class="w-full self-center px-4 text-center ">
            <ul class="lg:flex justify-center">
                    <li class="group">
                        <a href="/history" class="text-base text-black py-5 flex group-hover:text-primary "><img
                                src="{{ asset('image/history.png') }}" class="scale-100"></img></a>
                    </li>
                </ul>
                <h1 class="block font-normal text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]">History</h1>
            </div>
        </div>
    </div>
</section>
<div class="flex flex-warp justify-center">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden py-5">

                @forelse ($pickups as $pickup)
                <div
                    class="flex flex-col mb-5 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                    <div class="m-5">
                    @if ($pickup->image)
                    <img src="{{ asset ('storage/' . $pickup->image) }}" alt="image" class="w-25 h-25 rounded-lg">
                    @else
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="/docs/images/blog/image-4.jpg" alt="">
                    @endif
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $pickup->nama }}</h5>
                        <h6 class="mb-2 text-m tracking-tight text-gray-900">{{ $pickup->status }}</h6>
                        <p class="mb-2 text-sm font-normal text-gray-700 dark:text-gray-400">{{ $pickup->kecamatan }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pickup->alamat }}</p>
                    </div>
                    
                </div>
                @empty
                <div class="alert alert-danger">
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
                        <p class="mb-2 text-sm font-normal text-gray-700 dark:text-gray-400">{{ $pickup->nohp }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pickup->status }}</p>
                    </div>
                    
                </div>
                
                @empty
                <div class="alert alert-danger">
                    
                @endforelse
                
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    //message with toastr
    @if(session() -> has('success'))

    toastr.success('{{ session('
        success ') }}', 'BERHASIL!');

    @elseif(session() -> has('error'))

    toastr.error('{{ session('
        error ') }}', 'GAGAL!');

    @endif

</script>
<!-- End Hero Section -->
@endsection
