@extends('backend.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Blog Berita</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <p class="fw-bold">Blog Berita</p>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <a href="/dashboard/beritas/create" class="btn btn-primary btn-smal px-3 mb-3"><i class="fa-solid fa-plus"></i> Create</a>

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Roles</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)    
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->level}}</td>
            <td>
              {{-- <a href="/dashboard/uaer/{{ $user->email }}" class="btn btn-info btn-sm m-1"><i class="fa-regular fa-eye"></i></a> --}}
              <a href="/dashboard/user/{{ $user->id }}/edit" class="btn btn-warning btn-sm m-1"><i class="fa-solid fa-pen-to-square"></i></a>
              <form action="/dashboard/user/{{$user->email}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection