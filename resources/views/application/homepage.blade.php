@extends('layout.main')

@section('content')
<div class="content">

  {{-- carousel --}}
  <div id="carouselExampleControls" class="carousel slide h-25" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: 600px;">
      @for ($i = 0; $i < 3; $i++)
        <div class="carousel-item active" style="height: 600px;">
          <img src="{{ url('img/home.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-start">
            <h1 class="heading-1">Platform pengembangan <br> karir Pondok pesantren <br> Al-Ittihad Cianjur</h1>
            <p class="mt-3 font-weight-bold">REGISTRASI SEKARANG, BANGUN & RAIH KARIR IMPIAN MU</p>
            <button class="bg-secondary text-white px-5 py-3 rounded-pill btn mt-3 mb-5 ">CARI LOWONGAN</button>
            <button class="bg-primary text-white px-5 py-3 rounded-pill btn mt-3 mb-5 ms-4">REGISTRASI SEKARANG</button>
          </div>
        </div>
      @endfor
    </div>
  </div>

  {{-- section search job --}}
  <div class="p-5">
    <div class="text-center p-5">
      <h6 class="mb-4 text-secondary">TEMUKAN LOWONGAN PEKERJAAN</h6>
      <h2 class="mb-4">Jutaan lowongan pekerjaan di depan mata anda</h2>
      <p class="text-secondary mb-5">Bergabung bersama platform pengembangan karir Pondok Pesantren Al-Ittihad, dapatkan lowongan pekerjaan yang potensial <br>, aman dan telah dipercaya oleh ribuan perusahaan di seluruh Indonesia. Lupakan cara lama dan dapatkan pekerjaan dengan<br>cara yang modern & cepat dengan kami.</p>
      <p>Cari pekerjaan yang cocok dengan anda</p>
      <form action="" class="w-100 d-flex justify-content-center">
        <div class="form-group w-50">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" aria-label="search" placeholder="Ketik jenis keahlian / posisi / nama perusahaan">
            <span class="input-group-text">
              <i class="fas fa-magnifying-glass"></i>
            </span>
          </div>
        </div>
      </form>
    </div>
    <div class="px-5 d-flex justify-content-between">
      <x-tagcard title="Informasi Teknologi" total="998"> 
      </x-tagcard>
      <x-tagcard title="Desain & Kreatif" total="998"> 
      </x-tagcard>
      <x-tagcard title="Penjualan & Pemasaran" total="998"> 
      </x-tagcard>
      <x-tagcard title="Akuntansi & Keuangan" total="998"> 
      </x-tagcard>
    </div>
  </div>

  {{-- section article --}}
  <div class="p-5">
    <div class="bg-light mx-5 p-5">
      <div class="w-100 text-center mb-5">
        <h5 class="font-weight-bold text-secondary">INFORMASI TERKINI</h5>
        <h2 class="font-weight-bold">Artikel terkini sahabat redaksi Al-Ittihad</h2>
      </div>
      <div class="mb-3">
        <x-articlecard cover="img/article.png" title="Kesempatan Jadi Pegawai Bapenda Jakarta Lewat Rekrutmen Ini, Ayo Segera Daftar!" subtitle="Sebagai informasi rekrutmen Bapenda Jakarta ini terbuka untuk mengisi posisi Regional Manager sebagai Tenaga Ahli Pemetaan." uploadDtm="1 Jam yang lalu" class="mb-3">
        </x-articlecard>
      </div>
      <div class="mb-3">
        <x-articlecard cover="img/article.png" title="Kesempatan Jadi Pegawai Bapenda Jakarta Lewat Rekrutmen Ini, Ayo Segera Daftar!" subtitle="Sebagai informasi rekrutmen Bapenda Jakarta ini terbuka untuk mengisi posisi Regional Manager sebagai Tenaga Ahli Pemetaan." uploadDtm="1 Jam yang lalu" class="mb-3">
        </x-articlecard>
      </div>
      <div class="mb-3">
        <x-articlecard cover="img/article.png" title="Kesempatan Jadi Pegawai Bapenda Jakarta Lewat Rekrutmen Ini, Ayo Segera Daftar!" subtitle="Sebagai informasi rekrutmen Bapenda Jakarta ini terbuka untuk mengisi posisi Regional Manager sebagai Tenaga Ahli Pemetaan." uploadDtm="1 Jam yang lalu" class="mb-3">
        </x-articlecard>
      </div>
      <div class="mb-3">
        <x-articlecard cover="img/article.png" title="Kesempatan Jadi Pegawai Bapenda Jakarta Lewat Rekrutmen Ini, Ayo Segera Daftar!" subtitle="Sebagai informasi rekrutmen Bapenda Jakarta ini terbuka untuk mengisi posisi Regional Manager sebagai Tenaga Ahli Pemetaan." uploadDtm="1 Jam yang lalu" class="mb-3">
        </x-articlecard>
      </div>
      <p class="text-center w-100 mt-5">
        Lihat artikel lainnya
        <i class="fas fa-arrow-right"></i>
      </p>
    </div>
  </div>
</div>
@endsection