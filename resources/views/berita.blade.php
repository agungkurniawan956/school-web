@extends('layouts.main')

@section('content')
    <!-- breadcrumb -->
    <div class="navigation bg-dark">
      <div class="container">
        <div class="row py-5">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a style="text-decoration: none;" href="#">Informasi</a></li>
              <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </div>
        </nav>
      </div>
    </div>
    <!-- end breadcrumb -->
  
    <!-- content -->
    <div class="berita-pesantren pb-1">
      <div class="container">
        <div class="row mb-3 pt-3 justify-content-center">
          <h2 class="text-center fw-bold">{{$title}}</h2>
          <hr class="border border-primary opacity-100 border-2" style="width: 100px; color:black;">
        </div>
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pb-3">
          @foreach ($beritas as $berita)
            <div class="col">
              <div class="card h-100 shadow-md bg-light shadow-md">
                <div class="card-berita-image card-img-top shadow-sm" style="background-image: url('{{$berita["img"]}}');"></div>
                <div class="card-body">
                  <h5 class="card-berita-title card-title">{{ $berita->title }}</h5>
                  <p class="card-berita-caption card-text">{{ $berita->excerpt }}</p>
                  <a href="/blogberita/{{ $berita->slug }}" class="btn btn-primary">Read more.. </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
  
        <nav aria-label="...">
          <ul class="pagination py-4 justify-content-center">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- end content -->
@endsection