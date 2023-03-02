@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Agenda</h1>
</div>

<div class="col-lg-8">  
  <form method="post" action="/dashboard/agenda/{{$agenda->slug}}" enctype="multipart/form-data" >
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $agenda->title)}}" placeholder="Input title" required>
      @error('title')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $agenda->slug) }}" required>
      @error('slug')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="tempat" class="form-label">Tempat</label>
      <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{ old('tempat', $agenda->tempat)}}" placeholder="Input tempat" required>
      @error('tempat')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="time" class="form-label">Waktu</label>
      <input type="datetime-local" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ old('time', $agenda->time)}}" required>
      @error('time')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      @if ($agenda->image)
        <img src="{{asset('storage/'. $agenda->image)}}" class="img-fluid img-preview mb-3 col-sm-5 d-block"> 
      @else
        <img class="img-fluid img-preview mb-3 col-sm-5">
      @endif
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Caption</label>
      @error('body')  
        <p class="text-danger">{{$message}}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body', $agenda->body)}}" required>
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Post <i class="fa-solid fa-paper-plane"></i></button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/agenda/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection