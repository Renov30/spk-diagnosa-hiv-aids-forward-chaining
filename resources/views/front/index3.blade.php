@extends('front.layouts.app')
@section('title', 'Home')
@section('content')
    <x-nav/>
    <!-- hero section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>
          Selamat Datang di Aplikasi <span class="green">Peta </span>
          <span>Jagung</span>
        </h1>
        <p>
          Sistem informasi Geografis lahan jagung, disediakan oleh Dinas Tanaman Pangan, Hortikultura dan Perkebunan Kabupaten Merauke
        </p>
        <a href="{{route('front.data')}}" class="cta">Lihat Data</a>
      </main>
    </section>
    <!-- hero section end -->
    <!-- about section start -->
    <section class="about" id="about">
      <h2><span>Tentang</span> Aplikasi</h2>

      <div class="row">
        
        <div class="content">
          <h3>Peta <span>Jagung</span></h3>
          <p>
            Aplikasi Peta Jagung adalah aplikasi berbasis website yang menyediakan informasi lahan jagung di sekitar wilayah kabupaten Merauke.
          </p>
          <p>
            Aplikasi ini bertujuan untuk memberikan kemudahan kepada Dinas Tanaman Pangan, Hortikultura dan Perkebunan Kabupaten Merauke dalam memberikan informasi mengenai lahan jagung yang ada di Merauke kepada investor dan masyarakat melalui Geographic Information System.
          </p>
        </div>
        <div class="about-img">
          <img src="{{asset('img/tentang-kami.jpg') }}" alt="Tentang Kami" />
        </div>
      </div>
    </section>
    <!-- about section end -->
    <!-- visi mis section start -->
    <section class="visi-misi">
      <h2><span>Tentang</span> Kami</h2>
      {{-- <p class="dinas">Dinas Tanaman Pangan, Hortikultura dan Perkebunan Kabupaten Merauke. </p> --}}
      <h3 class="visi">Visi</h3>
      <p>
        " Terwujudnya kabupaten merauke sebagai kawasan pertumbuhan ekonomi
        perbatasan yang strategis dengan mengoptimalkan sumber daya manusia
        dan sumber daya alam lokal melalui pertanian sebagai sektor utama "
      </p>
      <div class="row">
        <div class="visi-misi-img">
          <img src="{{asset('img/profil-kepala.jpg') }}" alt="Tentang Kami" />
        </div>

        <div class="content">
          <h3>Misi</h3>
              <ul>
                <li>
                  <span>1</span>
                  Peningkatan stabilitas wilayah dan peran sebagai daerah perbatasan
                </li>
                <li>
                  <span>2</span>
                  Peningkatan kapasitas kelembagaan pemerintahan dan wilayah pengembangan pada tingkat kampung, distrik dan kabupaten.
                </li>
                <li>
                  <span>3</span>
                  Pembentukan kota madya dan provinsi papua selatan</li>
                <li>
                  <span>4</span>
                  Pembangunan pertanian yang berorientasi pada perwujudan lumbung pangan untuk ketahanan pangan di tingkat nasional maupun internasional
                </li>
                <li>
                  <span>5</span>
                  Penguatan ekonomi daerah dan peluang investasi</li>
                <li>
                  <span>6</span>
                  Peningkatan kualitas sumber daya manusia sesuai pengembangan potensi daerah
                </li>
                <li>
                  <span>7</span>
                  Peningkatan kualitas pelayanan kesehatan sampai ke tingkat
                  kampung
                </li>
                <li>
                  <span>8</span>
                  Penguatan identitas budaya dan kearifan lokal.</li>
              </ul>
            </div>
          </div>
    </section>
    <!-- visi mis section end -->
    <!-- contact section start -->
        <section id="contact" class="contact">
          <h2><span>Informasi</span> Terkini</h2>
          <p>
            Dengan adanya Peta Jagung, data lahan jagung yang dikumpulkan oleh gapoktan dapat ditampilkan untuk diketahui semua orang.
          </p>
    
          <div class="row">
            <!-- From Uiverse.io by paesjr --> 
            <div class="e-card playing">
              <div class="image"></div>

              <div class="wave"></div>
              <div class="wave"></div>
              <div class="wave"></div>

              <div class="infotop">
                <i data-feather="map"></i>
                <p>Jumlah Distrik</p>
                <br>
                <h1>{{$jumlahDistrik}}</h1>
              </div>
            </div>

            <!-- From Uiverse.io by paesjr --> 
            <div class="e-card playing">
              <div class="image"></div>

              <div class="wave"></div>
              <div class="wave"></div>
              <div class="wave"></div>

              <div class="infotop">
                <i data-feather="map-pin"></i>
                <p>Jumlah Lahan</p>
                <br>
                <h1>{{$jumlahLahan}}</h1>
              </div>
            </div>
            <!-- From Uiverse.io by paesjr --> 
            <div class="e-card playing">
              <div class="image"></div>

              <div class="wave"></div>
              <div class="wave"></div>
              <div class="wave"></div>

              <div class="infotop">
                <i data-feather="bar-chart-2"></i>
                <p>Luas Lahan</p>
                <br>
                <h1>{{$jumlahLuas}}h</h1>
              </div>
            </div>
            <!-- From Uiverse.io by paesjr --> 
            <div class="e-card playing">
              <div class="image"></div>

              <div class="wave"></div>
              <div class="wave"></div>
              <div class="wave"></div>

              <div class="infotop">
                <i data-feather="bar-chart"></i>
                <p>Jumlah Produksi</p>
                <br>
                <h1>{{$jumlahProduksi}}ton</h1>
              </div> 
            </div>
          </div>
        </section>
        <!-- contact section end -->
        {{-- build using section start --}}
        {{-- build using section end --}}
    <x-footer/>
@endsection
