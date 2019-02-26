<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    @include('partials._javascript')
  </head>
  <body>
    @include('partials._nav')
      <div class="container">
        @include('partials._messages')
        @yield('content')
        @include('partials._footer')
      </div>
      
    @yield('scripts')
  </body>
</html>