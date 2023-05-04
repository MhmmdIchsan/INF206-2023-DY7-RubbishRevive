<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <title> {{$title}} | Rubbish Revive </title>
  @vite('resources/css/app.css')
</head>
<body @yield('body')>
 
 
  @include('partials.navbar')
 
  
  <main class="min-h-screen">
    @yield('content')
    
  </main>
 
  @include('partials.footer')
  @include('sweetalert::alert')
  @vite('resources/js/app.js')
 
  
</body>
</html>