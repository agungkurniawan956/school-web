@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Berita</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <p class="fw-bold">Form Edit Berita</p>
    </div>
  </div>
</div>

<div class="col-lg-8">  
  <form method="post" action="/dashboard/categories/{{$category->slug}}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name)}}" required>
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required>
      @error('slug')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</i></button>
  </form>
</div>

<script>

  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function(){
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

</script>
@endsection