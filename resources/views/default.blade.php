<!doctype html>
<html>
  <head>
    @include('head')
  </head>

  <body>

    @include('header')

    <div class="container">

      @yield('content')

    </div>
  </body>
  <script src="{{ elixir('js/app.js') }}"></script>
</html>