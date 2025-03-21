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
                    <a href="#home" class="font-bold text-lg text-primary block py-6 lg:text-2xl">SPKHIV</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="text-primary cursor-pointer lg:hidden"><i id="icon-menu" data-feather="menu" class="transition duration-300 ease-in-out"></i></button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white rounded-lg shadow-lg max-w-[250px] right-4 top-full w-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block text-base text-dark mx-8 lg:flex">
                            <li><a href="" class="text-dark py-2 mx-5 flex hover:text-primary">Home</a></li>
                            <li><a href="" class="text-dark py-2 mx-5 flex hover:text-primary">About Us</a></li>
                            <li><a href="" class="text-dark py-2 mx-5 flex hover:text-primary">About SPK</a></li>
                            <li><a href="" class="text-dark py-2 mx-5 flex hover:text-primary">Konsultasi</a></li>
                            <li><a href="" class="text-dark py-2 mx-5 flex hover:text-primary">Login</a></li> 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- nav end --}}
    {{-- hero start --}}
    <section id="home" class="pt-36 mb-36">
        <div class="container"> 
            <div class="flex flex-wrap">
                {{-- kiri start --}}
                <div class="px-4 w-full lg:w-1/2">
                    <h2 class="text-base font-medium text-primary py-3 lg:text-lg">Sistem Pakar Diagnosa HIV/AIDS</h2>
                    <h1 class="font-bold text-4xl py-3 leading-relaxed lg:text-6xl">Periksa Dirimu,<br><span class="text-primary">Kapan Saja</span></h1>
                    <p class="text-base py-3 text-secondary leading-relaxed mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem aperiam quis maiores necessitatibus minima quos, totam eaque blanditiis exercitationem?</p>
                    <div class="flex py-3 mb-7">
                        <a href="" class="text-white px-5 py-3 rounded-lg bg-primary hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Learn More</a>
                        <a href="" class="font-medium text-dark ml-3 flex px-5 py-3 rounded-lg bg-white border border-slate-400 hover:shadow-lg hover:border-slate-500 duration-300 ease-in-out" ><i data-feather="search" class="mr-2 text-primary"></i>Konsultasi</a>
                    </div>
                </div>
                {{-- kiri end--}}
                {{-- kanan start--}}
                <div class="px-4 w-full self-end lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img 
                        src="{{asset('img/9109565-2.png')}}" 
                        alt="hero image" 
                        class="relative z-10 max-w-full mx-auto">
                        <span 
                        class="absolute p-4 bg-white/90 top-3 max-w-[180px] -left-3 rounded-lg shadow-lg z-0 lg:w-full lg:left-8 lg:top-6">
                            <ul class="list-disc list-inside text-gray-700 space-y-1 mb-3">
                                <h4 class="font-bold text-sm lg:text-base">Kenapa SPKHIV?</h4>
                                <li class="text-xs lg:text-sm">konsultasi cepat</li>
                                <li class="text-xs lg:text-sm">konsultasi tepat</li>
                                <li class="text-xs lg:text-sm">admin responsif</li>
                            </ul>
                            <a href="" class="text-xs bg-primary text-white py-2 px-3 rounded-lg w-full block text-center lg:text-sm">Buat Akun</a>
                        </span>
                        <span class="absolute p-4 bg-white/90 bottom-4 -right-3 rounded-lg shadow-lg z-20 flex flex-col items-center lg:right-12">
                            <div class="relative flex items-center justify-center w-10 h-10 bg-primary rounded-full mb-2">
                                <i data-feather="message-circle" class="text-white w-5 h-5"></i>
                            </div>
                            <div class="text-center">
                                <p class="text-sm rounded-lg w-full block text-secondary font-bold">Contact Us</p>
                                <p class="text-xs rounded-lg w-full block text-secondary">+6281343026394</p>
                            </div>
                        </span>
                        <span class="absolute px-38 py-40 bg-primary bottom-10 left-1/2 -translate-x-1/2 rounded-t-full -z-10 md:scale-125"></span>
                    </div>  
                </div>
                {{-- kanan end--}}
            </div>
        </div>
    </section>
    {{-- hero end --}}
    {{-- about start --}}
    <section class="pt-36 pb-20 bg-primary" id="about">
        <div class="container">
            <div class="flex flex-wrap w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h1 class="font-bold text-2xl text-white mb-10 leading-relaxed lg:text-3xl md:text-2xl lg:mb-5">Dapatkan Diagnosa Dengan Cepat</h1>
                    <p class="text-sm text-white lg:text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat numquam tempore eaque enim odit odio?</p>
                </div>
                <div class="grid md:grid-cols-4 md:gap-5">
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="info" class="text-white w-full md:w-12 md:h-12 w-10 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Masukkan Biodata</h4>
                            <p class="text-sm text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium at voluptates ad autem expedita quos.</p>   
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="smile" class="text-white w-full md:w-12 md:h-12 w-10 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Pilih Gejala</h4>
                            <p class="text-sm text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum repellat autem hic totam non id.</p>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="plus" class="text-white w-full md:w-12 md:h-12 w-10 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Dapatkan Diagnosa</h4>
                            <p class="text-sm text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nostrum saepe suscipit officiis quam tempora.</p>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="book" class="text-white w-full md:w-12 md:h-12 w-10 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Lihat Riwayat</h4>
                            <p class="text-sm text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo perspiciatis optio eaque, deserunt tempora minus!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about end --}}
    {{-- data start --}}
    <section class="pt-36 pb-20">
        <div class="container">
            <div class="w-full px-4">
                <div class="grid grid-cols-2 space-x-5">
                    <div>
                        <img src="{{asset('img/elderly-female-smiling-with-doctor-visiting-senior-patient-woman-hospital-ward.jpg')}}" alt="">
                    </div>
                    <div>
                        <div class="mb-5">
                            <h1 class="font-bold lg:text-3xl md:text-3xl lg:mb-5 text-dark leading-relaxed">Berdasarkan data <br> diagnosa <span class="text-primary">Terpercaya</span></h1> 
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta animi omnis aliquam dolore cumque iure aut modi reiciendis, autem deserunt!</p>
                        </div>
                        <div class="bg-primary px-8 py-5">
                            <div class="space-x-4 mb-4">
                                <h1 class="font-bold lg:text-xl md:text-xl text-white leading-relaxed flex-1">Forward Chaining Method</h1>
                                <p class="text-white leading-relaxed flex-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus laudantium, labore nemo quos laborum voluptates harum rem quasi amet quas!</p>
                            </div>
                            <button class="bg-white py-3 px-5">Lebih Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- data end --}}
    {{-- tech stack start --}}
    <section class="pt-20 pb-20  bg-slate-300">
        <div class="container">
            <div class="w-full px-4 mx-auto text-center">
                {{-- <h1 class="font-bold text-2xl text-dark mb-10 leading-relaxed lg:text-3xl md:text-2xl lg:mb-15 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-500">Tech Stack Yang Digunakan</h1> --}}
                <div class="flex flex-wrap items-center justify-center">  
                    <img src="{{asset('img/icon/Logo.min.svg.png')}}" alt="" class="w-[200px] py-4 mx-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6">
                    <img src="{{asset('img/icon/Logo-2.png')}}" alt="" class="w-[200px] py-4 mx-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6">
                    <img src="{{asset('img/icon/Tailwind_CSS_logo.svg.png')}}" alt="" class="w-[200px] py-4 mx-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6">
                    <img src="{{asset('img/icon/MySQL_textlogo.svg.png')}}" alt="" class="w-[200px] py-4 mx-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6">
                </div>
            </div>
        </div>
    </section>
    {{-- tech stack end --}}
    {{-- footer start --}}
    <footer>
        <div class="container">
            <div class="w-full px-4">
                <div class="flex justify-between">
                    <ul>
                        <li>Alamat : Jl. Lepro Seri  Mopah Lama, Kelurahan Rimba Jaya, Merauke, Papua Selatan</li>
                        <li>No. Hp : 0899 9098 0988</li>
                        <li>Email : dinaskesehatanmerauke@gmail.com</li>
                    </ul>
                    <ul>
                        <li><a href=""><i data-feather="facebook"></i>Facebook</a></li>
                        <li><a href=""><i data-feather="instagram"></i>Instagram</a></li>
                        <li><a href=""><i data-feather="youtube"></i>Youtube</a></li>
                    </ul>
                </div>
                <div>
                    Copyright by Novgeny R. Ermiawan 2025. All rights reserved
                </div>
            </div>
        </div>
    </footer>
    {{-- footer end --}}
    {{-- script --}}
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('js/app.js')}}"></script>
    
    {{-- script --}}
</body>
</html>