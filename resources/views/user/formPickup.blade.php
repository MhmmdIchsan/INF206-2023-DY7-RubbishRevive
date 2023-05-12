@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')
<!-- make form -->
<div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Isi Form
    </h2>
</div>

<div>
    <div class="mt-8 sm:mx-auto sm:max-w-md border border-black rounded shadow bg-white">
        <form class="space-y-6" action="{{ route('pickup.store') }}" method="POST" enctype="multipart/form-data"
            class="flex justify-center">
            @csrf
            <div class="m-10">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="mt-1 pb-2">
                    <input id="nama" name="nama" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                        placeholder="Nama">
                </div>
                <div class="mt-1 pb-2">
                    <select id="kecamatan" name="kecamatan" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                        <option value="">Pilih Kecamatan</option>
                        @foreach ($kecamatan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
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
                    <!-- make dropdown from sampah table -->
                    <select id="jenissampah" name="jenissampah" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                        <option value="">Pilih Sampah</option>
                        @foreach ($sampah as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group ">
                    <label for="beratsampah">Berat Sampah (kg) </label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="minus"
                                data-field="beratsampah">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="number" id="beratsampah" name="beratsampah" class="form-control input-number"
                            value="1" min="1" max="100">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus"
                                data-field="beratsampah">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="mt-1 pb-2">
                    <label class="block text-sm font-medium text-gray-900" for="image">Input Gambar</label>
                    <input
                        class="@error('image') is-invalid @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        id="image" name="image" type="file">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mt-1 pb-2">
                    <div class="flex justify-center">
                        <button type="submit"
                            class="btn btn-md btn-primary text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');

</script>
@endsection
