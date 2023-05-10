@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')

<section id="home" class="pt-24 ">
    <div class="container content-center')">
        <div class="flex flex-wrap ">
            <div class="w-full self-center px-4 text-center ">
                <ul class="lg:flex justify-center">
                    <li class="group">
                        <a href="/ongoing" class="text-base text-black py-5 flex group-hover:text-primary "><img
                                src="{{ asset('image/ongoing.png') }}" class="scale-100"></img></a>
                    </li>
                </ul>
                <h1 class="block font-normal text-slate-800 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]">On-Going
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
    <div class="flex justify-center pt-5">
        <a href="{{ route('pickup.create') }}" class="btn btn-md btn-success text-white m-2 p-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Request Pickup</a>
</div>
<table class="border min-w-full text-left text-sm font-light table-auto">
            <thead class="border font-medium dark:border-neutral-500">
                    <th scope="col" class="m-1 p-2">Nama</th>
                    <th scope="col" class="m-1 p-2">Alamat</th>
                    <th scope="col" class="m-1 p-2">Nomor Hp</th>
                    <th scope="col" class="m-1 p-2">Email</th>
                    <th scope="col" class="m-1 p-2">Jenis Sampah</th>
                    <th scope="col" class="m-1 p-2">Berat Sampah</th>
                    <th scope="col" class="m-1 p-2">Status</th>
                    <th scope="col" class="m-1 p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pickups as $pickup)
                <tr class="border-b dark:border-neutral-500 hover:bg-stone-100 border">
                    <td class="font-bold py-2 px-4 border-black text-center"">{{ $pickup->nama }}</td>
                    <td class="whitespace-nowrap ">{{ $pickup->alamat }}</td>
                    <td class="whitespace-nowrap ">{{ $pickup->phone }}</td>
                    <td class="whitespace-nowrap ">{{ $pickup->email }}</td>
                    <td class="whitespace-nowrap ">{{ $pickup->jenissampah }}</td>
                    <td class="whitespace-nowrap ">{{ $pickup->beratsampah }}</td>
                    <td class="whitespace-nowrap ">{{ $pickup->status }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('pickup.destroy', $pickup->id) }}" method="POST">
                            <a href="{{ route('pickup.show', $pickup->id) }}" class="btn btn-sm btn-dark text-white m-2 p-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SHOW</a>
                            <a href="{{ route('pickup.edit', $pickup->id) }}" class="btn btn-sm btn-primary text-white m-2 p-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm m-1 p-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data Request Pickup belum Tersedia.
                </div>
                @endforelse
            </tbody>
        </table>
        {{ $pickups->links() }}
    </div>
</div> 
</div>
</div>
<!-- make card -->
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
