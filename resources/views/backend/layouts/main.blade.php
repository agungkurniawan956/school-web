<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al-Hidayah|Dashboard</title>
    <link rel="shortcut icon" href="{{ url('/frontend/ico/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/frontend/libraries/Bootstrap/css/bootstrap.min.css')}}">
    
    <!-- Custom styles dashboard -->
    <link href="/backend/css/dashboard.css" rel="stylesheet">

    {{-- style trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display:none;
      }
    </style>
  </head>
  
  <body>
    @include('backend.partials.header')
    
    <div class="container-fluid">
      <div class="row">
        @include('backend.partials.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

          @yield('content')
        
        </main>
      </div>
    </div>
    



    <script src="/frontend/libraries/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/js/dashboard.js"></script>
  </body>
</html>
