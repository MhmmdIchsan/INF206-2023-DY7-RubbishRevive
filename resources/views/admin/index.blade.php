@extends('layouts.app')

@section('body')
class="bg-gradient-to-tl from-cyan-500"
@endsection


@section('content')
<h1 class="text-center m-5 p-5 text-3xl font-bold underline">MANAGE USERS</h1>
<div id="toastr-container"></div>
<div class="flex justify-center flex-wrap overflow-x-auto">
    <table class="border-collapse border border-gray-300 w-full md:max-w-2xl mx-2">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Role</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2 bg-white hover:bg-gray-100">{{ $user->name }}</td>
                <td class="border px-4 py-2 bg-white hover:bg-gray-100">{{ $user->email }}</td>
                <td class="border px-4 py-2 bg-white hover-bg-gray-100">{{ $user->role }}</td>
                <td class="border px-4 py-2 bg-white hover:bg-gray-100">
                    <a href="{{ route('manageusers.edit', $user) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

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
        @if(session() -> has('success'))
        toastr.success('{{ session('
            success ') }}', 'BERHASIL!');
        @elseif(session() -> has('error'))
        toastr.error('{{ session('
            error ') }}', 'GAGAL!');
        @endif
    });

</script>
@endsection
