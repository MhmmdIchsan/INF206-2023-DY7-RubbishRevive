@extends('layouts.app')


@section('body')
class="bg-gradient-to-tl from-cyan-500"
@endsection

@section('content')

<div class="select-none flex flex-warp justify-center ">
    <div class="overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <div class="flex flex-col justify-center pt-5">
                <h1 class="block font-normal text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1] text-center my-5">Pick-up Request</h1>
                    <a href="{{ route('pickup.create') }}"
                        class="btn btn-md btn-success text-center text-white m-2 p-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mb-5">Request
                        Pickup</a>
                </div>
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
                        <h6 class="mb-2 text-xl tracking-tight text-gray-900">{{ $pickup->status }}</h6>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pickup->alamat }}</p>
                    </div>
                    <div class="items-center px-5">
                    </div>
                </div>
                <!-- make button to show harga -->
                @empty
                <div class="alert alert-danger">
                    Data Request Pickup belum Tersedia.
                </div>
                @endforelse
                {{ $pickups->links() }}
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
