@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit User</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <p class="fw-bold">Create User</p>
    </div>
  </div>
</div>

<div class="col-lg-8">  
  <form method="post" action="/dashboard/user">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}" required>
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
      @error('email')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="level" class="form-label">Roles</label>
      <select name="level" class="form-select" aria-label="Default select example">
        {{-- <option value="{{$user->level}}">{{$user->level}}</option> --}}
        <option selected disabled>---------------</option>
        <option value="admin">Admin</option>
        <option value="guru">Guru</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
      @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    
    {{-- <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      @if ($berita->image)
        <img src="{{ asset('storage/'. $berita->image)}}" class="img-fluid img-preview mb-3 col-sm-5 d-block">
      @else
        <img class="img-fluid img-preview mb-3 col-sm-5">
      @endif
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div> --}}

    {{-- <div class="mb-3">
      <label for="body" class="form-label">Caption</label>
      @error('body')  
        <p class="text-danger">{{$message}}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body', $berita->body)}}" required>
      <trix-editor input="body"></trix-editor>
    </div> --}}
    <button type="submit" class="btn btn-primary">Create</i></button>
  </form>
</div>

<script>
  // const title = document.querySelector('#title');
  // const slug = document.querySelector('#slug');

  // title.addEventListener('change', function(){
  //   fetch('/dashboard/beritas/checkSlug?title=' + title.value)
  //   .then(response => response.json())
  //   .then(data => slug.value = data.slug)
  // });

  // document.addEventListener('trix-file-accept', function(e) {
  //   e.preventDefault();
  // })

  // function previewImage() {
  //   const image = document.querySelector('#image');
  //   const imgPreview = document.querySelector('.img-preview');

  //   imgPreview.style.display = 'block';
    
  //   const oFReader = new FileReader();
  //   oFReader.readAsDataURL(image.files[0]);

  //   oFReader.onload = function(oFREvent) {
  //     imgPreview.src = oFREvent.target.result;
  //   }
  // }

</script>
@endsection