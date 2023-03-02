@extends('layouts.main')

@section('content')
  <!-- form -->
<div class="container pt-4 mb-5">
  <div class="row">
    <div class="col">
      <div class="row text-center mb-4">
        <h2>Contact us</h2>
      </div>
      <div class="row container justify-content-center">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show col-sm-12 col-md-7 col-lg-6" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
      <div class="row container justify-content-center">
        
        <div class="card card-contact col-sm-12 col-md-7 col-lg-6 shadow">
          <div class="row">
            <form class="form-contact p-4" method="post" action="/contact">
              @csrf
            <div class="mb-3">
              <label for="name " class="form-label-nama">Nama</label>
              <input type="text" placeholder="your name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror " name="name" id="name">
              @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" placeholder="youremail@gmail.com" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror " name="email" id="email">
              @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control @error('pesan') is-invalid @enderror" placeholder="Saran / Kritikan / Pertanyaan" value="{{old('pesan')}}" name="pesan" id="pesan" rows="4"></textarea>
              @error('pesan')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end form -->
@endsection