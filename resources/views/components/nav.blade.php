   {{-- nav start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="{{route('front.index')}}"  class="font-bold text-lg text-primary block py-6 lg:text-2xl">SPKHIV</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="text-primary cursor-pointer lg:hidden"><i id="icon-menu" data-feather="menu" class="transition duration-300 ease-in-out"></i></button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white rounded-lg shadow-lg max-w-[250px] right-4 top-full w-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block text-base text-dark mx-8 lg:flex">
                            <li><a href="{{route('front.index')}}" class="text-dark py-2 mx-5 flex hover:text-primary">Home</a></li>
                            <li><a href="{{route('front.data')}}" class="text-dark py-2 mx-5 flex hover:text-primary">About Us</a></li>
                            <li><a href="{{route('front.peta')}}" class="text-dark py-2 mx-5 flex hover:text-primary">About SPK</a></li>
                            <li><a href="{{route('filament.admin.auth.login')}}" class="text-dark py-2 mx-5 flex hover:text-primary" target="blank">Login</a></li> 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- nav end --}}

<!-- navbar start -->
    {{-- <nav class="navbar" id="nav"> 
        <a href="{{route('front.index')}}" class="navbar-logo">Peta<span>Jagung.</span></a>
        <div class="navbar-nav">
          <a href="{{route('front.index')}}">Home</a>
          <a href="{{route('front.index')}}#about">Tentang</a>
          <a href="{{route('front.data')}}">Data</a>
          <a href="{{route('front.peta')}}">Peta</a>
        </div>
        <div class="navbar-extra">
          <a href="{{route('filament.admin.auth.login')}}" class="login" target="blank">Masuk</a>
          <a href="{{route('front.data')}}" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
      </nav> --}}
  <!-- navbar end -->