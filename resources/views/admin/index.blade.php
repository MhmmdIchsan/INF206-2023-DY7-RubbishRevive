@extends('layouts.app')

@section('body')
    class="bg-[#D6EEF5]"
@endsection

@section('content')
    <h1 class="text-center m-5 p-5 text-3xl font-bold underline">MANAGE USERS</h1>
    <div class="flex justify-center flex-wrap">
        <table class="border-collapse border border-gray-300 w-full mx-2">
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
                        <td class="border px-4 py-2 bg-white hover:bg-gray-100">{{ $user->role }}</td>
                        <td class="border px-4 py-2 bg-white hover:bg-gray-100">
                            <a href="{{ route('manageusers.edit', $user) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
