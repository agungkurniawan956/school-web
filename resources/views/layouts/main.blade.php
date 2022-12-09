<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ponpes Al-Hidayah | {{$title}}</title>
  <link rel="shortcut icon" href="{{ url('/frontend/ico/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="{{ url('/frontend/libraries/Bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('/frontend/css/main.css')}}">
</head>
<body>
  @include('partials.navbar')

  
  @yield('content')


  @include('partials.footer')
  <script src="{{url('/frontend/libraries/Bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>