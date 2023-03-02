@extends('backend.layouts.main')

@section('content')
<div class="konten-berita mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="comtainer">
          <div class="body-konten mt-3">
              <form action="/dashboard/contact/{{$contact->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Yakin Ingin menghapus berita ini?')"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
              <hr>
            <h2 class="title-body">From: {{$contact->name}}</h2>
            <h5 class="title-body">Email: {{$contact->email}}</h5>
            <p class="text-muted"><small>{{$contact->created_at->diffForHumans()}}</small></p>
            <div class="article-konten mb-5 mt-3">
              {{$contact->pesan}}
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection