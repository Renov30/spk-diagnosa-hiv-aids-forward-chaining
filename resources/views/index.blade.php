<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <title>Home</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    {{-- nav start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#" class="font-bold text-lg text-primary block py-6">SPKHIV</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="text-primary"><i id="icon" data-feather="menu"></i></button>
                    <nav id="nav-menu" class="hidden">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">About SPK</a></li>
                            <li><a href="">Konsultasi</a></li>
                        </ul>
                        <div>
                            <a href="">Login</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- nav end --}}
    {{-- hero start --}}
    {{-- hero end --}}
    {{-- about start --}}
    {{-- about end --}}
    {{-- data start --}}
    {{-- data end --}}
    {{-- contact start --}}
    {{-- contact end --}}
    {{-- footer start --}}
    {{-- footer end --}}
    {{-- script --}}
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('js/app.js')}}"></script>
    {{-- script --}}
</body>
</html>