@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Buat Berita</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <p class="fw-bold">Blog Berita</p>
    </div>
  </div>
</div>

<div class="col-lg-8">  
  <form method="post" action="/dashboard/beritas">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Input title">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>
    <button type="submit" class="btn btn-primary">Post <i class="fa-solid fa-paper-plane"></i></button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/beritas/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script>
@endsection