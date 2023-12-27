@extends('layouts.app')

@section('body')
class="bg-gradient-to-tl from-cyan-500"
@endsection

@section('content')
<div class="py-3">
    <div class="flex justify-center py-3">
        <div class="">
            <h2 class="block font-bold underline text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]">Ambil Pesanan
            </h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> <br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div>
    <div class="mt-2 sm:mx-auto sm:max-w-md border-solid">
        <form class="flex justify-center border border-black p-5 rounded bg-white shadow" action="{{ route('pickup.update',$pickup->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="m-5">
                @if ($pickup->image)
                <img src="{{ asset ('storage/' . $pickup->image) }}" alt="image" class="w-25 h-25 rounded-lg border border-black">
                @else
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                    src="/docs/images/blog/image-4.jpg" alt="">
                @endif
            </div>
            <div class="">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $pickup->nama }}"
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <textarea
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            style="height:150px" name="alamat" placeholder="Alamat">{{ $pickup->alamat }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="text" name="phone" value="{{ $pickup->phone }}"
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="Phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <select name="status"
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                            <option value="0">Pending</option>
                            <option value="1">On Process</option>
                            <option value="2">Done</option>
                    </div>
                </div>
                <input type="hidden" name="harga" value="{{ $pickup->harga }}">
                @if ($pickup->jenissampah == '1')
                <input type="hidden" name="harga" value="3">
                @elseif ($pickup->jenissampah == '2')
                <input type="hidden" name="harga" value="5">
                @elseif ($pickup->jenissampah == '3')
                <input type="hidden" name="harga" value="5">
                @elseif ($pickup->jenissampah == '4')
                <input type="hidden" name="harga" value="3">
                @elseif ($pickup->jenissampah == '5')
                <input type="hidden" name="harga" value="5">
                @elseif ($pickup->jenissampah == '6')
                <input type="hidden" name="harga" value="7">
                @elseif ($pickup->jenissampah == '7')
                <input type="hidden" name="harga" value="3">
                @elseif ($pickup->jenissampah == '8')
                <input type="hidden" name="harga" value="5">
                @elseif ($pickup->jenissampah == '9')
                <input type="hidden" name="harga" value="10">
                @endif


                <!-- make driver_id as authenticated users -->
                <input type="hidden" name="driver_id" value="{{ Auth::id() }}">
                <input type="hidden" name="driver_name" value="{{ Auth::user()->name }}">
                <div class="flex justify-center py-2">
                    <div class="text-center flex ">
                        <a class="btn btn-primary focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                            href="{{ route('pickup.index') }}"> Back</a>
                    </div>
                    <div class="text-center items-center">
                        <button type="submit"
                            class="btn btn-primary text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Confirm
                            Pesanan</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
