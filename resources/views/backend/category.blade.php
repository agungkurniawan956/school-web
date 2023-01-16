@extends('backend.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category</h1>
  </div>

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/categories/create" class="btn btn-primary btn-smal px-3 mb-3"><i class="fa-solid fa-plus"></i> New</a>

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)    
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning btn-sm m-1"><i class="fa-solid fa-pen-to-square"></i></a>
              {{-- <form action="/dashboard/categories/{{$category->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></button>
              </form> --}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection