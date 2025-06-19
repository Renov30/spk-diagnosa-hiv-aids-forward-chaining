@extends('front.layouts.app')
@section('title', 'Home')
@section('content')
<x-nav />

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
    <section class="pt-36 pb-25 bg-primary mb-30" id="about">
        <div class="container">
            <div class="flex flex-wrap w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h1 class="font-bold text-2xl text-white mb-10 leading-relaxed lg:text-3xl md:text-2xl lg:mb-5">Dapatkan Diagnosa Dengan Cepat</h1>
                    <p class="text-sm text-white lg:text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat numquam tempore eaque enim odit odio?</p>
                </div>
                <div class="grid md:grid-cols-4 md:gap-5">
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="info" class="text-white w-full md:w-12 md:h-12 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Masukkan Biodata</h4>
                            <p class="text-sm text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium at voluptates ad autem expedita quos.</p>   
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="smile" class="text-white w-full md:w-12 md:h-12 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Pilih Gejala</h4>
                            <p class="text-sm text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum repellat autem hic totam non id.</p>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="plus" class="text-white w-full md:w-12 md:h-12 h-10 p-1"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-dark md:mb-4 md:text-lg">Dapatkan Diagnosa</h4>
                            <p class="text-sm text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nostrum saepe suscipit officiis quam tempora.</p>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg flex md:flex-wrap items-center md:justify-between mb-7">
                        <div class="items-center bg-primary rounded-full p-2 mr-4 md:mb-6">
                            <i data-feather="book" class="text-white w-full md:w-12 md:h-12 h-10 p-1"></i>
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
    <section class="pt-36 pb-25">
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
                        <div class="bg-primary px-8 py-5 rounded-lg">
                            <div class="space-x-4 mb-4">
                                <h1 class="font-bold lg:text-xl md:text-xl text-white leading-relaxed flex-1 mb-5">Forward Chaining Method</h1>
                                <p class="text-white leading-relaxed flex-2 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus laudantium, laborum voluptates harum rem quasi amet quas!</p>
                            </div>
                            <button class="bg-white py-3 px-5 rounded-lg mb-1">Lebih Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- data end --}}
    {{-- team start --}}
    <section class="pt-36 pb-25 mb-50">
        <div class="container">
            <div class="w-full px-4">
                <div class="bg-primary px-25 rounded-4xl grid grid-cols-2">
                    <div class=" py-20">
                        <h3 class="font-medium text-white text-5xl mb-10 leading-normal">Kenali tim kami dengan lebih baik</h3>
                        <a href=""><button class="font-medium text-dark text-base bg-white rounded-lg px-6 py-4 ">Learn More</button></a>
                    </div>
                    <div class="w-full relative">
                        <img src="{{asset('img/medium-shot-doctors-wearing-face-masks-tpb.png')}}" alt="" class="absolute bottom-0 right-0 h-[440px]">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- team end --}}
    {{-- tech stack start --}}
    <section class="pt-30 pb-30 mb-30 bg-slate-300">
        <div class="container">
            <div class="w-full px-4 mx-auto text-center">
                <h1 class="font-bold text-2xl text-dark mb-5 leading-relaxed lg:text-4xl md:text-2xl opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-500">Tech Stack Yang Digunakan</h1>
                <p class="text-base text-dark mb-10 leading-relaxed lg:text-base md:text-base lg:mb-20 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, sequi natus.</p>
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
<x-footer />
@endsection