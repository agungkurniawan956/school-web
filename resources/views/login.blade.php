@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5 vh-100">
    <div class="col-lg-4">
      
      @if (session()->has('success'))          
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p><i class="fa-sharp fa-solid fa-circle-check"></i> {{ session('success')}}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <main class="form-signin w-100 m-auto">
        <div class="text-center mt-5">
          <img class="mb-3" src="{{ url('/frontend/images/logo.png')}}" alt="Logo Al-hidayah" width="72" height="72">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
        <form>
          <div class="form-floating">
            <input type="email" class="form-control input-email" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control input-password" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>          
        </form>
        <small class="mt-3 d-block text-end">Not Registed? <a href="/register">Register Here!</a></small>
      </main>
    </div>
  </div>
</div>
@endsection