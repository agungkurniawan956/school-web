@extends('backend.layouts.main')

@section('content')
<div class="konten-berita mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="comtainer">
          <div class="body-konten mt-3">
            <a href="/dashboard/agenda/{{$agenda->slug}}/edit" class="btn btn-warning btn-sm rounded-pill px-3"><i class="fa-solid fa-pen"></i> Edit</a>
              <form action="/dashboard/agenda/{{$agenda->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Yakin Ingin menghapus berita ini?')"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
            <h2 class="title-body">{{$agenda->title}}</h2>
            {{-- <p>
              <span class="badge rounded-pill text-bg-secondary text-black bg-opacity-25 fw-normal"> 
                <i class="fa-regular fa-user"></i> {{$agenda->user->name}}
              </span> 
              <span class="badge rounded-pill text-bg-secondary bg-opacity-25 fw-normal"> 
                <a href="/berita?category={{$berita->category->slug}}" class="text-decoration-none fw-normal">#{{$berita->category->name}}</a>
              </span> 
            </p> --}}
            <p class="text-muted"><small>{{$agenda->created_at->diffForHumans()}}</small></p>
            @if ($agenda->image)
              <div class="card text-bg-dark mt-3" style="max-height: 399px; overflow:hidden">
                <img src="{{ asset('storage/'. $agenda->image )}}" class="card-img img-fluid" alt="{{$agenda->title}}">
              </div>
            @else
              <div class="card text-bg-dark mt-3">
                <img src="https://via.placeholder.com/728x300.png?text=No+Picture+For+This+Page" class="card-img img-fluid" alt="{{$agenda->title}}">
              </div>
            @endif
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
    </div>
  </div>
</div>
@endsection