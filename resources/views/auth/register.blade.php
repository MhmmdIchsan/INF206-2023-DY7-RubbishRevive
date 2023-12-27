@extends('layouts.app')


@section('body')
@endsection

@section('content')
<!-- Register form that includes the name, npm, password  using tailwind css -->
<div class="select-none flex flex-col bg-gradient-to-tl from-cyan-500 to-cyan-100 justify-center min-h-screen pb-8">
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <div class=" sm:mx-auto sm:w-full sm:max-w-md">
                <a class="font-bold text-lg flex justify-center text-primary block py-1">
                    <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-32 ">
                </a>
            </div>
            <form action="/register" method="POST">
                @csrf

                <!-- Name -->
                <div>
                    <div class="pb-2 mt-1">
                        <input id="name" name="name" required
                            class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="Name" required>
                    </div>

                    <!-- Email -->
                    <div>
                        </label>
                        <div class="pb-2 mt-1">
                            <input id="email" name="email" required
                                class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                placeholder="Email" required>
                        </div>
                    </div>

                    <div>
                        <div class="pb-4 mt-1">
                            
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                placeholder="Password" required> 
                                <input type="checkbox" class="ml-1 my-1 text-sm "onclick="myFunction()"> Show Password
                                
                        </div>
                    </div>

                    <!-- make button for login -->
                    <div>
                        <button type="submit"
                            class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-cyan-600 border border-transparent rounded-md group hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            </span>
                            Register
                        </button>

                    </div>
                    <div class="pt-3 text-center">
                        <p> Already have an account? <a href="/login" class="text-cyan-600 hover:text-cyan-800">Login</a></p>
                    </div>
            </form>
        </div>
    </div>
    <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</div>
@endsection


