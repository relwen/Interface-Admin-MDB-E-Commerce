<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ADMIN') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}


          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
          <!-- Bootstrap core CSS -->
          <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
          <!-- Material Design Bootstrap -->
          <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
          <!-- Your custom styles (optional) -->
          <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script> --}}

          <style>

                .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
            }
            .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
            }
              </style>

    </head>
    <body class="font-sans antialiased">
            {{-- @livewire('navigation-dropdown') --}}


            @include('layouts.partials.nav')
            @include('layouts.partials.sidenav')



  <main class="pt-5 mx-lg-5">
        @yield('content')

    </main>



        {{-- @stack('modals') --}}

        @livewireScripts

          <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();


  </script>

    </body>
</html>
