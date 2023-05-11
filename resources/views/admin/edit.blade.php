@extends('layouts.app')

@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')
<div class="mt-2 sm:mx-auto sm:max-w-md border-solid">
<h1 class="text-center my-4 text-3xl font-bold underline">Edit User</h1>
<form class="bg-white border-black border rounded p-5 shadow" action="{{ route('manageusers.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $user->email }}" class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                <select name="role" id="role" class="form-control appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                    <option value="0" {{ $user->role == '0' ? 'selected' : '' }}>User</option>
                    <option value="1" {{ $user->role == '1' ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->role == '2' ? 'selected' : '' }}>Driver</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center py-2">
            <button type="submit" class="btn btn-primary  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
        </div>
    </div>
</form>
</div>
@endsection
