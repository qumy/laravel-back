<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')

    @yield('title')

    @include('layouts.css')

    @yield('css')

</head>

<body role="document">

 @include('layouts.facebook')

<div id="app">
   @include('layouts.nav')

  <div class="container theme-showcase" role="main">
      <br/>
      @yield('content')
      @include('layouts.bottom')

  </div> <!-- /container -->
</div>
@include('layouts.scripts')

@include('Alerts::show')

@yield('scripts')

</body>
</html>
