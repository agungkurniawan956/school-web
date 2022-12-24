@extends('backend.layouts.main')

@section('content')
<div class="konten-berita mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="comtainer">
          <div class="card text-bg-dark">
            <img src="https://source.unsplash.com/1199x299/{{$berita->category->name}}" class="card-img img-fluid" alt="{{$berita->title}}">
          </div>
          <div class="body-konten mt-3">
            <h2 class="title-body">{{$berita->title}}</h2>
            <p>
              <span class="badge rounded-pill text-bg-secondary text-black bg-opacity-25 fw-normal"> <i class="fa-regular fa-user"></i> {{$berita->user->name}}</span> 
              <span class="badge rounded-pill text-bg-secondary bg-opacity-25 fw-normal"> <a href="/berita?category={{$berita->category->slug}}" class="text-decoration-none fw-normal">#{{$berita->category->name}}</a></span> 
            </p>
            <div class="article-konten mb-5 mt-3">
              {!! $berita->body !!}
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
@endsection