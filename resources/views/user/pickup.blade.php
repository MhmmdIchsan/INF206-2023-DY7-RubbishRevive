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
    <div class="mt-8 sm:mx-auto sm:max-w-md">
        <form class="space-y-6" action="{{ route('pickup.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-center">
        @csrf
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
                <div class="form-group">
                    <label class="font-weight-bold">GAMBAR</label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                        name="image">

                    <!-- error message untuk title -->
                    @error('image')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
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
