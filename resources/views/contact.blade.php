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
        <div class="card card-contact col-sm-12 col-md-7 col-lg-6 shadow">
          <div class="row">
            <form class="form-contact p-4">
            <div class="mb-3">
              <label for="nama " class="form-label-nama">Nama</label>
              <input type="text" placeholder="your name" class="form-control" id="nama">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" placeholder="youremail@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
              <textarea class="form-control" placeholder="Saran / Kritikan / Pertanyaan" id="exampleFormControlTextarea1" rows="4"></textarea>
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