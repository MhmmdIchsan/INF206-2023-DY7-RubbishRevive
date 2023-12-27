 @extends('layouts.app')


 @section('body')

 @endsection

 @section('content')
 <!-- This is the login form -->

 <form action="/login" method="POST">
     @csrf
     <div class="select-none flex flex-col justify-center min-h-screen bg-gradient-to-tl from-cyan-500 to-cyan-100 ">
         <div class="sm:mx-auto sm:w-full sm:max-w-md">
             <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                 <a class="font-bold text-lg flex justify-center text-primary block py-1">
                     <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-32 ">
                 </a>
                 <form class="space-y-6" action="#" method="POST">
                     <div>
                         <div class="pb-2 mt-1">
                             <input id="email" name="email" required
                                 class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                 placeholder="Email">
                         </div>
                     </div>

                     <div>
                         <div class="pb-4 mt-1">
                             <input id="password" name="password" type="password" autocomplete="current-password"
                                 required
                                 class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                 placeholder="Password">
                             <input type="checkbox" class="ml-1 my-2 text-sm " onclick="myFunction()"> Show Password
                         </div>
                     </div>

                     <!-- make button for login -->
                     <div>
                         <button type="submit"
                             class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-cyan-600 border border-transparent rounded-md group hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                             Login
                         </button>
                     </div>
             </div>
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
         toastr.options = {
             positionClass: 'toast-top-right',
             closeButton: true,
             progressBar: true,
         };

         @if(session() -> has('success'))
         toastr.success('{{ session('
             success ') }}', 'Success!');
         @elseif(session() -> has('error'))
         toastr.error('{{ session('
             error ') }}', 'Error!');
         @endif

     </script>
 </form>
 @endsection
