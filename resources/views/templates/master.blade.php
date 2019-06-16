<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>fs-task | @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
  </head>
  <body>
    @include('templates.navbar')

    <div class="jumbotron">
      <h1 class="text text-center">fs-task</h1>
    </div>

    <div class="container">
      @yield('main-content')
    </div>


    <script src="/js/app.js" charset="utf-8"></script>
    @yield('scripts')
  </body>
</html>
