@extends('backend.layouts.main')

@section('content')
<div class="konten-berita mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="comtainer">
          <div class="body-konten mt-3">
            <h2 class="title-body">{{$berita->title}}</h2>
            <p>
              <span class="badge rounded-pill text-bg-secondary text-black bg-opacity-25 fw-normal"> <i class="fa-regular fa-user"></i> {{$berita->user->name}}</span> 
              <span class="badge rounded-pill text-bg-secondary bg-opacity-25 fw-normal"> <a href="/berita?category={{$berita->category->slug}}" class="text-decoration-none fw-normal">#{{$berita->category->name}}</a></span> 
            </p>
            <p class="text-muted"><small>{{$berita->created_at->diffForHumans()}}</small></p>
            
              <a href="/dashboard/beritas/{{$berita->slug}}/edit" class="btn btn-warning btn-sm rounded-pill px-3"><i class="fa-solid fa-pen"></i> Edit</a>
              {{-- <a href="" class="btn btn-danger btn-sm rounded-pill px-3"><i class="fa-solid fa-trash"></i> Delete</a> --}}
              <form action="/dashboard/beritas/{{$berita->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Yakin Ingin menghapus berita ini?')"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
            @if ($berita->image)
              <div class="card text-bg-dark mt-3" style="max-height: 399px; overflow:hidden">
                <img src="{{ asset('storage/'. $berita->image )}}" class="card-img img-fluid" alt="{{$berita->title}}">
              </div>
            @else
              <div class="card text-bg-dark mt-3">
                <img src="https://source.unsplash.com/1199x399/{{$berita->category->name}}" class="card-img img-fluid" alt="{{$berita->title}}">
              </div>
            @endif
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
    </div>
  </div>
</div>
@endsection