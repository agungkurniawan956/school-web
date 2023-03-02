@extends('layouts.main')

@section('content')
    <!-- header -->
    <section class="section-banner">
      <div id="carouselHeader" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active w-100" data-bs-interval="3000" style="background-position: center; background-image: url('/frontend/images/futsal\ \(1\).jpg');">
            <div class="carousel-caption text-center text-light">
              <h1 class="title-carousel">WELCOME TO</h1>
              <P>Website PONDOK-PESANTREN AL-HIDAYAH</P>
            </div>
          </div>
          <div class="carousel-item d-block w-100" data-bs-interval="3000" style="background-position: center; background-image: url('/frontend/images/pramuka.jpg');">
              <div class="carousel-caption align-self-center text-center text-light">
                <h1 class="title-carousel">PONDOK-PESANTREN AL-HIDAYAH</h1>
                <P>Selamat Datang di Website Resmi Kami</P>
              </div>
          </div>
          <div class="carousel-item d-block w-100" data-bs-interval="2000" style="background-position: center; background-image: url('/frontend/images/tapaksuci.jpg');">
            <div class="carousel-caption text-center text-light">
              <h1 class="title-carousel">AYO MONDOK</h1>
              <P>Pesantren itu Keren</P>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- end header -->
  
    <!-- profile  -->
    <section class="profile mt-5">
      <div class="container">
        <div class="row">
          <h1 class="text-center mb-5 ms-sm-1">ABOUT</h1>
        </div>
        <div class="row">
          <div class="col-lg">
            <h1>PONDOK-PESANTREN <br>AL-HIDAYAH</h1>
            <P>
              Adalah lembaga yang berkiprah dibidang pendidikan dengan memberikan kontribusi positif dalam pengembangan 
              karakter masyarakat, turut mencerdaskan anak bangsa, perhatian kepada santri yatim piatu dan dhuafa, melakukan pembinaan, 
              bimbingan, dan pengembangan potensi baik secara pendidikan formal kedinasan (SMP-SMA) maupun pendidikan agama di dalam pesantren, 
              membangun keselarasan kefahaman ilmu dan pengalaman. Mode pengembangan pendidikan formal 
              (Kurikulum Pendidikan Nasional) berbasiskan santri yang menguasai ilmu pengetahuan dan teknologi zaman, serta sholih dalam
              kefahaman agama.
            </P>  
          </div>
          <div class="col-lg ratio ratio-16x9">
              <iframe 
              src="https://www.youtube.com/embed/fSbX9DjhkvI" 
              title="YouTube video" allowfullscreen>
              </iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- end profile -->
  
    <!-- Berita Pesantren -->
    <section class="berita-pesantren my-5">
      <div class="container py-4">
        <div class="text-center mb-3">
          <h1>Berita Pesantren</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-4 pb-3">
          {{-- <div class="col">
            <div class="card h-100 shadow-md bg-light shadow">
              <div class="card-berita-image card-img-top" style="background-image: url('/frontend/images/osis.jpg');"></div>
              <div class="card-body">
                <h5 class="card-berita-title card-title">Title hear</h5>
                <p class="card-berita-caption card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, nobis odio!</p>
                <a href="/DetailBerita.html" class="btn btn-primary">Read more.. </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 bg-light shadow">
              <div class="card-berita-image card-img-top" style="background-image: url('/frontend/images/futsal\ \(1\).jpg');"></div>
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, suscipit in.</p>
              </div>
            </div>
          </div> --}}
          @foreach ($beritas as $berita)    
          <div class="col">
            <div class="card h-100 bg-light shadow">
              @if ($berita->image)
                  <div class="card-berita-image card-img-top shadow-sm"
                    style="background-image: url('{{asset('storage/'. $berita->image)}}');">
                  </div>
              @else
                <div class="card-berita-image card-img-top shadow-sm"
                  style="background-image: url('https://via.placeholder.com/728x300.png?text=No+Picture+For+This+Page');">
                </div>
              @endif
              {{-- <div class="card-berita-image card-img-top" style="background-image: url('/frontend/images/tapaksuci.jpg');"></div> --}}
              <div class="card-body">
                <h5 class="card-title">{{$berita->title}}</h5>
                <p class="card-text">{{$berita->excerpt}}</p>
                <p class="card-text text-muted"><small>{{$berita->created_at->diffForHumans()}}</small></p>
              </div>
              <div class="card-footer">
                <a href="/blogberita/{{ $berita->slug }}" class="btn btn-primary btn-sm">Detail..</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- end Berita Pesantren -->
  
    <!-- program unggulan -->
    <section class="program-unggulan my-5">
      <div class="container">
        <div class="text-center mb-4">
          <h1 class="title-text">Program Unggulan</h1>
        </div>
  
        <div class="text-center justify-conten-center mt-5">
          <div class="row row-cols-md-3 g-4">
            <div class="col-lg-4">
              <div class="icon">
                <img src="/frontend/images/translation (1).png" alt="" />
              </div>
              <h3 class="icon-title">Bahasa</h3>
              <p class="icon-caption">
                Terampil Berbahasa Arab dan Inggris
              </p>
            </div>
            <div class="col-lg-4">
              <div class="icon">
                <img src="/frontend/images/open-book.png" alt="" />
              </div>
              <h3 class="icon-title">Kitab Kuning</h3>
              <p class="icon-caption">
                Mampu membaca kitab kuning
              </p>
            </div>
            <div class="col-lg-4">
              <div class="icon">
                <img src="/frontend/images/alzheimer.png" alt="" />
              </div>
              <h3 class="icon-title">Tahfidz</h3>
              <p class="icon-caption">
                Tahfidz suwar Al-Mukhtaroh
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end program unggulan -->
  
    <!-- Agenda pesantren -->
    <section class="agenda-pesantren py-4">
      <div class="container">
        <div class="row mb-2">
          <h1 class="text-center">Agenda Pesantren</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          @foreach ($agendas as $agenda)
          <div class="col">
            <div class="card h-100 shadow-sm bg-light">
              <div class="card-img-agenda card-img-top" style="background-image: url('{{asset('storage/'.$agenda->image)}}');"></div>
              <div class="card-body">
                <h5 class="card-title">{{$agenda->title}}</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, nobis odio!</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> {{$agenda->tempat}}</li>
                <li class="list-group-item">{{$agenda->time}}</li>
              </ul>
              <div class="card-body">
                <a href="/informasi/agenda/{{$agenda->slug}}" class="btn btn-sm btn-primary">Details..</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <!-- End Agenda Pesantren -->
  
    <!-- Gallery -->
    <section class="section-galeri-popular my-5" id="galeri">
      <div class="container text-center justify-conten-center mb-4">
        <h1>Galeri Pesantren</h1>
      </div>
      <div class="container">
        <div class="section-galeri-content row justify-content-center">
          @foreach ($galleries as $gallery)
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card-galeri rounded" style="background-image: url('{{ asset('storage/'. $gallery->image)}}') ;">
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Gallery -->
@endsection
