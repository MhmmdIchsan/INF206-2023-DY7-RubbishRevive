@extends('layouts.app')

@section('body')
class="bg-[#D6EEF5]"
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
        <form class="flex justify-center border border-black p-5 rounded bg-white shadow"
            action="{{ route('tukarpoin.update',$tukarpoin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $tukarpoin->nama }}"
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $tukarpoin->nohp }}"
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <select name="status"
                            class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                            <option value="0">Pending</option>
                            <option value="1">Done</option>
                    </div>
                </div>
                <!-- set poin value based on poin in hadiah table -->
                <input type="hidden" name="poin" value="{{ $tukarpoin->poin }}">
                @if ($tukarpoin-> namahadiah == 'Pulsa 10.000')
                <input type="hidden" name="poin" value="10">
                @elseif ($tukarpoin-> namahadiah == 'Pulsa 20.000')
                <input type="hidden" name="poin" value="20">
                @elseif ($tukarpoin-> namahadiah == 'Pulsa 50.000')
                <input type="hidden" name="poin" value="50">
                @elseif ($tukarpoin-> namahadiah == 'Token Listrik 50.000')
                <input type="hidden" name="poin" value="50">
                @elseif ($tukarpoin-> namahadiah == 'Token Listrik 100.000')
                <input type="hidden" name="poin" value="100">
                @elseif ($tukarpoin-> namahadiah == 'Token Listrik 200.000')
                <input type="hidden" name="poin" value="200">
                @endif
                
                <div class="flex justify-center py-2">
                    <div class="text-center flex ">
                        <a class="btn btn-primary focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                            href="{{ route('pickup.ongoing') }}"> Back</a>
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
