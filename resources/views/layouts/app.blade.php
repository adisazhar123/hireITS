<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{config('app.name','hireITS')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  @yield('style')
  <style media="screen">
  @import url('https://fonts.googleapis.com/css?family=Raleway');
  body {
    font-family: 'Raleway', sans-serif;
    background-color: #E9E9E9;
  }

  body, html {
    height: 100%;
    margin: 0;
}

  </style>
  <body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.login-modal')
      @include('inc.signup-modal')
    </div>
    @yield('content')
  </body>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    $(".login").click(function(){
      $('.login-modal').fadeIn().modal('show')
    });
    $(".signup").click(function(){
      $('.signup-modal').fadeIn().modal('show')
    });
  </script>
  @yield('script')

</html>
