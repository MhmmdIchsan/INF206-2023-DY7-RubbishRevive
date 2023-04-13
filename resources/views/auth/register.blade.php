@extends('layouts.app')
 
 
@section('body')
    class="bg-[#D6EEF5]"
@endsection
 
@section('content')
    <!-- Register form that includes the name, npm, password  using tailwind css -->
        <div class="min-h-screen flex flex-col justify-center pb-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign-Up
                </h2>
            </div>
 
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form action="/register" method="POST">
                        @csrf
 
                        <!-- Name -->
                        <div>
                            <div class="mt-1 pb-2">
                                <input id="name" name="name" required
                                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                    placeholder="Name" required>
                            </div>
 
                        <!-- Email -->
                        <div>
                            </label>
                            <div class="mt-1 pb-2">
                                <input id="email" name="email" required
                                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                    placeholder="Email" required>
                            </div>
                        </div>
 
                        <div>
                            <div class="mt-1 pb-4">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                    placeholder="Password" required>
                            </div>
                        </div>

                        <!-- make button for login -->
                        <div>
                            <button type="submit"
                                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <!-- Heroicon name: solid/lock-closed -->
                                    <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5 8a3 3 0 016 0v1h1a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2h1V8zm3 0V7a1 1 0 10-2 0v1H5a1 1 0 00-1 1v5a1 1 0 001 1h10a1 1 0 001-1v-5a1 1 0 00-1-1h-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center pt-3">
            <p> Already have an account? <a href="/login">Login</a></p>
            </div>
        </div>
                @endsection
    
 