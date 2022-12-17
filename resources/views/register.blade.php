@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5 vh-100">
    <div class="col-lg-4">
      <main class="form-signin w-100 m-auto">
        <div class="text-center mt-5">
          <img class="mb-3" src="{{ url('/frontend/images/logo.png')}}" alt="Logo Al-hidayah" width="72" height="72">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Form Register</h1>
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="name" required>
            <label for="name">Nama</label>
            @error('name')    
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="name@example.com" required>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>
      
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registration</button>          
        </form>
        <small class="mt-3 d-block text-end">Alredy Registed? <a href="/login">Login now!</a></small>
      </main>
    </div>
  </div>
</div>
@endsection