 
@extends('layouts.app')
 
 
 @section('body')
     class="bg-[#D6EEF5]"
  
 @endsection
  
 @section('content')
     <!-- This is the login form -->
  
     <form action="/login" method="POST">
     @csrf
     <div class="min-h-screen flex flex-col justify-center mt-2 pt-2 ">
         <div class="sm:mx-auto sm:w-full sm:max-w-md">
             <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900">
                 Sign In
             </h2>
         </div>
  
         <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-md">
             <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                 <form class="space-y-6" action="#" method="POST">
                     <div>
                         <div class="mt-1 pb-2">
                             <input id="email" name="email" required
                                 class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                 placeholder="Email">
                         </div>
                     </div>
  
                     <div>
                         <div class="mt-1 pb-4">
                             <input id="password" name="password" type="password" autocomplete="current-password"
                                 required
                                 class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                 placeholder="Password">
                         </div>
                     </div>
  
                     <!-- make button for login -->
                     <div>
                         <button type="submit"
                             class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                             Login
                         </button>
                     </div>
  
     
     </form>
         
  
 @endsection
  