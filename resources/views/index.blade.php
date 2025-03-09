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
                    <a href="#home" class="font-bold text-lg text-primary block py-6">SPKHIV</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="text-primary cursor-pointer"><i id="icon-menu" data-feather="menu" class="transition duration-300 ease-in-out"></i></button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white rounded-lg shadow-lg max-w-[250px] right-4 top-full w-full ">
                        <ul class="block text-base text-dark mx-8">
                            <li><a href="" class="py-2 flex hover:text-primary">Home</a></li>
                            <li><a href="" class="py-2 flex hover:text-primary">About Us</a></li>
                            <li><a href="" class="py-2 flex hover:text-primary">About SPK</a></li>
                            <li><a href="" class="py-2 flex hover:text-primary">Konsultasi</a></li>
                            <li><a href="" class="py-2 flex hover:text-primary">Login</a></li> 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- nav end --}}
    {{-- hero start --}}
    <section id="home" class="pt-30">
        <div class="container"> 
            <div class="flex flex-wrap">
                {{-- kiri start --}}
                <div class="px-4 w-full lg:w-1/2">
                    <h2 class="text-base font-medium text-primary py-3">Sistem Pakar Diagnosa HIV/AIDS</h2>
                    <h1 class="font-bold text-4xl py-3">Periksa Dirimu,<br><span class="text-primary">Kapan Saja</span></h1>
                    <p class="text-base py-3 text-secondary leading-relaxed">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem aperiam quis maiores necessitatibus minima quos, totam eaque blanditiis exercitationem?</p>
                    <div class="flex py-3">
                        <a href="" class="text-white px-5 py-3 rounded-lg bg-primary hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Pelajari Lebih</a>
                        <a href="" class="font-medium text-dark ml-5 flex px-5 py-3 rounded-lg bg-white border border-slate-400 hover:shadow-lg hover:border-slate-500 duration-300 ease-in-out" ><i data-feather="search" class="mr-2 text-primary"></i>Konsultasi</a>
                    </div>
                </div>
                {{-- kiri end--}}
                {{-- kanan start--}}
                <div class="px-4 w-full self-end">
                    <div class="relative mt-10">
                        <img src="{{asset('img/bohemian-man-with-his-arms-crossed-removebg-preview.png')}}" alt="hero image" class="relative z-10 ">
                        <span class="absolute p-4 bg-white/90 top-6 max-w-[200px] left-0 rounded-lg shadow-lg z-0">
                            <ul class="list-disc list-inside text-gray-700 space-y-1 mb-3">
                                <h4 class="font-bold text-sm">Kenapa SPKHIV?</h4>
                                <li class="text-xs">konsultasi cepat</li>
                                <li class="text-xs">konsultasi tepat</li>
                                <li class="text-xs">admin responsif</li>
                            </ul>
                            <a href="" class="text-xs bg-primary text-white py-2 px-3 rounded-lg w-full block text-center">Buat Akun</a>
                        </span>
                        <span class="absolute p-4 bg-white/90 bottom-4 right-0 rounded-lg shadow-lg z-20 flex flex-col items-center">
                            <div class="relative flex items-center justify-center w-10 h-10 bg-primary rounded-full mb-2">
                                <i data-feather="message-circle" class="text-white w-5 h-5"></i>
                            </div>
                            <div class="text-center">
                                <p class="text-sm rounded-lg w-full block text-secondary font-bold">Contact Us</p>
                                <p class="text-xs rounded-lg w-full block text-secondary">+6281343026394</p>
                            </div>
                        </span>
                        <span class="absolute px-40 py-40 bg-primary bottom-0 left-1/2 -translate-x-1/2 rounded-t-full -z-10"></span>
                    </div>  
                </div>
                {{-- kanan end--}}
            </div>
        </div>
    </section>
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