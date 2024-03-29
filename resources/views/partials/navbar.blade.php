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
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
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
          <a class="nav-link dropdown-toggle {{ Request::is('berita') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/berita">Berita Pesantren</a></li>
            <li><a class="dropdown-item" href="/informasi/agenda">Agenda Pesantren</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact/create">Kontak</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i> {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </ul>
        @else
          <li class="nav-item">
            <a href="/login" class="btn btn-outline-primary ms-2 {{ Request::is('login') ? 'active' : '' }}">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->