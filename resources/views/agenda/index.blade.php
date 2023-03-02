@extends('layouts.main')

@section('content')
    <!-- breadcrumb -->
    <div class="navigation bg-dark">
      <div class="container">
        <div class="row py-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a style="text-decoration: none;" href="#">Informasi</a></li>
              <li class="breadcrumb-item"><a style="text-decoration: none;" href="/berita">Agenda</a></li>
              {{-- @if (request('category'))
                <li class="breadcrumb-item active" aria-current="page">#{{request('category')}}</li>
              @endif --}}
            </ol>
        </div>
        </nav>
      </div>
    </div>
    <!-- end breadcrumb -->
  
    
    <!-- Agenda pesantren -->
  <section class="agenda-pesantren py-4">
    <div class="container">
      <div class="row mb-2">
        <h1 class="text-center">Agenda Pesantren</h1>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @if ($agendas->count())
          {{-- <div class="col">
            <div class="card h-100 shadow-sm bg-light">
              <div class="card-img-agenda card-img-top" style="background-image: url('images/tapaksuci.jpg');">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                  New
                  <span class="visually-hidden">unread messages</span>
                </span>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$agendas['0']->title}} </h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, nobis odio!</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$agendas['0']->tempat}}</li>
                <li class="list-group-item">{{$agendas['0']->time}}</li>
              </ul>
              <div class="card-body">
                <a href="#" class="btn btn-sm btn-primary">Details..</a>
              </div>
            </div>
          </div> --}}

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
        @else
        <div class="col-12">
          <p class="fs-1 text-center fw-bold">Not Found</p>
        </div>
        @endif
      </div>
      <div class="d-flex my-4 justify-content-center">
        {{$agendas->links()}}
      </div>
    </div>
  </section>
  <!-- End Agenda Pesantren -->
@endsection