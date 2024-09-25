<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Harba-Dz</title>
    <!--=============== css  ===============-->

    @include('frontend.partials.style')


    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" />
  </head>
  <body>
    <!--loader-->
    @yield('content')
    @include('frontend.partials.scripts')
  </body>
</html>

