@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Gallery</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <p class="fw-bold">Welcome, {{ auth()->user()->name}}</p>
    </div>
  </div>
</div>

<form class="col-lg-6" method="post" action="/dashboard/gallery" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" name="title" required>
    @error('title')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <img class="img-preview img-fluid mb-3 col-sm-8" alt="">
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection