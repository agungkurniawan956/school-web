
@extends('layouts.main')

@section('content')
  <!-- breadcrumb -->
  <div class="navigation bg-dark">
    <div class="container">
      <div class="row py-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none;" href="#">Informasi</a></li>
            <li class="breadcrumb-item"><a style="text-decoration: none;" href="/informasi/agenda">Agenda</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$agenda->title}}</li>
          </ol>
      </div>
      </nav>
    </div>
  </div>
  <!-- end breadcrumb -->

  <!-- content -->
  <div class="konten-berita mt-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12">
          <div class="comtainer">
            <h2 class="title-body">{{$agenda->title}}</h2>
              <p>
                <span class="badge rounded-pill text-bg-secondary text-black bg-opacity-25 fw-normal"> <i class="fa-regular fa-user"></i> {{$agenda->user->name}}</span> 
                {{-- <span class="badge rounded-pill text-bg-secondary bg-opacity-25 fw-normal"> <a href="/berita?category={{$agenda->category->slug}}" class="text-decoration-none fw-normal">#{{$berita->category->name}}</a></span>  --}}
              </p>
            @if ($agenda->image)
            <div class="card text-bg-dark" style="max-height: 399px; overflow:hidden">
              <img src="{{asset('storage/'. $agenda->image)}}" class="card-img img-fluid" alt="{{$agenda->title}}">
            </div>
            @else
            <div class="card text-bg-dark">
              <img src="https://via.placeholder.com/728x300.png?text=No+Picture+For+This+Page" class="card-img img-fluid" alt="{{$agenda->title}}">
            </div>
            @endif
            
            <div class="body-konten mt-3">
              
              <div class="article-konten mb-5 mt-3">
                {!! $agenda->body !!}
              </div>
              <hr>
              <!-- <div class="share-post">
                <ul class="list-unstyled d-flex g-4">
                  <li>Bagikan :</li>
                  <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="side-konten">
            <div class="container">
              <div class="header-side">
                <h3 class="mb-4 text-decoration-underline">Berita Lainnya</h3>
              </div>
              <div class="row-cols-1 body-side">
                <div class="main-side card p-3 mb-3">
                  <a href="" class="text-dark fw-semibold pb-3 text-decoration-none">Pendaftaran PPDB 2O23/2O24</a>
                  <div class="timeline fw-light">
                    <span><i class="far fa-clock"></i> 19 Juli 2021</span>
                  </div>
                </div>
                <div class="main-side card p-3 mb-3">
                  <a href="" class="text-dark fw-semibold pb-3 text-decoration-none">Pendaftaran PPDB 2O23/2O24</a>
                  <div class="section-item-timeline-meta">
                    <span><i class="far fa-clock"></i> 19 Juli 2021</span>
                  </div>
                </div>
                <div class="main-side card p-3 mb-3">
                  <a href="" class="text-dark fw-semibold pb-3 text-decoration-none">Pendaftaran PPDB 2O23/2O24</a>
                  <div class="section-item-timeline-meta">
                    <span><i class="far fa-clock"></i> 19 Juli 2021</span>
                  </div>
                </div>
                <div class="main-side card p-3 mb-3">
                  <a href="" class="text-dark fw-semibold pb-3 text-decoration-none">Pendaftaran PPDB 2O23/2O24</a>
                  <div class="section-item-timeline-meta">
                    <span><i class="far fa-clock"></i> 19 Juli 2021</span>
                  </div>
                </div>
                <div class="main-side card p-3 mb-3">
                  <a href="" class="text-dark fw-semibold pb-3 text-decoration-none">Pendaftaran PPDB 2O23/2O24</a>
                  <div class="section-item-timeline-meta">
                    <span><i class="far fa-clock"></i> 19 Juli 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end content -->
@endsection