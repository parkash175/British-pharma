<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Authentication</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <style>
    .logo
    {
      padding: 20px;
background: white;
border: 3px solid #eb3d00;
margin-top: 135px;
position:relative;
z-index:9;
    }
    .nav
    {
    height: 100px;
      background: linear-gradient(to bottom, #33ccff 0%, #ff66ff 100%);
    }

  .mainbg
  {
    background-image:url("{{url('/images/bg.jpg')}}");
    background-size:cover;
    background-attachment:fixed;
    height:50vh;
  }

  * {
    margin: 0;
    padding: 0;

  }

  canvas#canvas {
    display: block;
    background: #000;
  }

  div.controller {
    position: absolute;

    bottom: 0;
    left: 0;
    padding: 1.6rem
  }

    </style>
    @stack('headerstyle')
</head>
<body>
    <div id="app">
      <x-header></x-header>
        <main class="py-0">
            @yield('content')
        </main>
    </div>
    @include('front.footer')
<script src="{{url('js/jquery-3.5.1.min.js')}}" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
    (function($){

    $('.numbers').each(function (index) {
    var characters = $(this).text().split("");

    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
    $this.append("<span>" + el + "</span");
    });

    });

  })(jQuery);
    </script>
</body>

</html>
