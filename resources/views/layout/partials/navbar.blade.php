@include('layout.partials.login')
<div class="fixed-top">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">

      {{-- Navbar Brand --}}
      <a class="navbar-brand" href="/">
        <div class="brand-container">
          <img src="{{ url('img/logo.png') }}" class="brand" alt="AL Ittihad" />
        </div>
        <div class="brand-caption">
          <p class="title">Pondok Pesantren Al-Ittihad</p>
          <p class="caption">Karang Tengah Cianjur</p>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/lowongan">Lowongan</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Artikel</a>
          </li>
        </ul>
        <button class="btn bg-primary text-white rounded-pill mx-2 px-3" data-bs-toggle="modal"
          data-bs-target="#loginModal">
          <i class="fas fa-arrow-right-to-bracket fa-xs"></i>
          Login
        </button>
      </div>
    </div>
  </nav>
  <div class="w-100 bg-secondary py-2">
    <marquee behavior="" direction="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor blandit
      placerat. Aenean sodales commodo metus sed ullamcorper. Nulla tempor hendrerit massa facilisis congue.</marquee>
  </div>
</div>