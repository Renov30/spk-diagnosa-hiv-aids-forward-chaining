<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    
    <!-- my icons (feather icons) -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- my font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- my style --> 
    {{-- <link rel="stylesheet" href="{{ asset('css/filament/style.css') }}"/> --}}
    @stack('after-styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- my script -->
  </head>
  <body>
    @yield('content')
    <!-- javascript -->
    <!-- my javascript -->
    <script src="{{ asset('js/filament/script.js')}}"></script>
    <!-- feather icons -->
    <script>
      feather.replace();
    </script>
    @stack('after-scripts')
  </body>
</html>