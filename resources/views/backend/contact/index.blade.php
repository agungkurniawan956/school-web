@extends('backend.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Message</h1>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <p class="fw-bold">Blog Agenda</p>
      </div>
    </div> --}}
  </div>

  <div class="table-responsive">

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Email</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)    
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->created_at->diffForHumans() }}</td>
            <td>
              <a href="/dashboard/contact/{{ $contact->id }}" class="btn btn-info btn-sm m-1"><i class="fa-regular fa-eye"></i></a>
              <form action="/dashboard/contact/{{$contact->id}}" method="post" class="d-inline">
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