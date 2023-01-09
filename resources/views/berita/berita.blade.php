@extends('layouts.main')

@section('content')
    <!-- breadcrumb -->
    <div class="navigation bg-dark">
      <div class="container">
        <div class="row py-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a style="text-decoration: none;" href="#">Informasi</a></li>
              <li class="breadcrumb-item"><a style="text-decoration: none;" href="/berita">Berita</a></li>
              @if (request('category'))
                <li class="breadcrumb-item active" aria-current="page">#{{request('category')}}</li>
              @endif
            </ol>
        </div>
        </nav>
      </div>
    </div>
    <!-- end breadcrumb -->
  
    <!-- content -->
    <div class="berita-pesantren pb-1">
      <div class="container">
        <div class="row mb-3 pt-3">
          <div class="col-md-8">
            <h2 class="fw-bold">{{$title}}</h2>
            <hr class="algin-item-center border border-primary opacity-100 border-2" style="width: 100px;">
          </div>
          <div class="col-md-4">
            <form action="/berita">
              @if (request('category'))
                  <input type="hidden" name="category" value="{{request('category')}}">
              @endif
              <div class="input-group mb-3">
                <input type="text" class="form-control border-primary" placeholder="Telusuri Berita Terkini" name="search" value="{{request('search')}}">
                <button class="btn btn-primary" type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </form>
          </div>
        </div>

        <div class="row g-4 pb-3">

          @if ($beritas->count())
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="card h-100 shadow-md bg-light shadow-md">
                @if ($beritas['0']->image)
                  <div class="card-berita-image card-img-top shadow-sm" style="background-image: url('{{asset('storage/'. $beritas['0']->image)}}');">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                      New
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </div>
                @else
                  <div class="card-berita-image card-img-top shadow-sm" style="background-image: ">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                      New
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </div>
                @endif
                
                <div class="card-body">
                  <h5 class="card-berita-title card-title">{{ $beritas['0']->title }}</h5>
                  <p class="card-berita-caption card-text">{{ $beritas['0']->excerpt }}</p>
                  <p class="card-text text-muted"><small>{{$beritas['0']->created_at->diffForHumans()}}</small></p>
                </div>
                <div class="card-footer">
                  <a href="/blogberita/{{ $beritas['0']->slug }}" class="btn btn-primary btn-sm">Read more.. </a>
                </div>
              </div>
            </div>
      
            @foreach ($beritas->skip(1) as $berita)
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-md bg-light shadow-md">
                  @if ($berita->image)
                    <div class="card-berita-image card-img-top shadow-sm" 
                      style="background-image: url('{{asset('storage/'. $berita->image)}}');">
                    </div>
                  @else
                    <div class="card-berita-image card-img-top shadow-sm" 
                      style="background-image: url('');">
                    </div>
                  @endif
                  <div class="card-body">
                    <h5 class="card-berita-title card-title">{{ $berita->title }}</h5>
                    <p class="card-berita-caption card-text">{{ $berita->excerpt }}</p>
                    <p class="card-text text-muted"><small>{{$berita->created_at->diffForHumans()}}</small></p>
                  </div>
                  <div class="card-footer">
                    <a href="/blogberita/{{ $berita->slug }}" class="btn btn-primary btn-sm">Read more.. </a>
                  </div>
                </div>
              </div>
            @endforeach
            @else
              <div class="col-12">
                <p class="fs-1 text-center fw-bold">Not Found</p>
              </div>
          @endif
        </div>

        {{-- pagination --}}
        <div class="d-flex my-4 justify-content-center">
          {{$beritas->links()}}
        </div>

      </div>
    </div>
    <!-- end content -->
@endsection