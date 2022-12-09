<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm sticky-top rounded-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">
      <img src="{{ url('/frontend/images/logo.png')}}" alt="Logo Al-Hidayah" width="50" height="50" >
      <span class="text-wrap" style="width: 3rem;">Al-HIDAYAH</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fw-bold" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administrasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Berita</a></li>
            <li><a class="dropdown-item" href="#">PPDB 2O23/2O24</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Berita") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/berita">Berita Pesantren</a></li>
            <li><a class="dropdown-item" href="#">Agenda Pesantren</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->