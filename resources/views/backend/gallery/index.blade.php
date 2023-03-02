@extends('backend.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gallery</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <p class="fw-bold">Welcome, {{ auth()->user()->name}}</p>
      </div>
    </div>
  </div>

  
  <div class="table-responsive">
    
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <a href="/dashboard/gallery/create" class="btn btn-primary px-4 mb-2"><i class="fa-solid fa-plus"></i> Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">Tgl Post</th>
          <th scope="col">Picture</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($galleries as $gallery)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$gallery->title}}</td>
          <td>{{$gallery->created_at}}</td>
          <td>
            <img src="{{ asset('storage/'.$gallery->image)}}" width="70" alt="">
          </td>
          <td>
            <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
            <a href="/dashboard/gallery/{{$gallery->id}}/edit" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="/dashboard/gallery/{{$gallery->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger btn-sm d-inline" onclick="return confirm('Yakin mau di hapus ?')" type="submit"><i class="fa-solid fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
