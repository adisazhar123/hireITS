<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name','hireITS')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!--  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/homepage.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

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
      @include('inc.login-signup-modal')

    </div>
    @yield('content')
    <div id="ohsnap"></div>
  </body>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/ohsnap.min.js') }}"></script>

  <!-- Main Quill library -->
  <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script src="https://www.paypalobjects.com/api/checkout.js">

  </script>
  <script type="text/javascript">

    var action="";

    $(".login").click(function(){
      alert("hi")
      $('.login-modal').fadeIn().modal('show')
    });
    $(".signup").click(function(){
      $('.signup-modal').fadeIn().modal('show')
    });

    $("#register_form").submit(function(e){
      e.preventDefault();
      $.ajax({
        method :"POST",
        url:"{{route('register')}}",
        data: $(this).serialize(),
        success: function(data){
          if(data.errors) {
            $(".alert-success").css("display", "none")
              if(data.errors.email){
                $("#email-error").html( data.errors.email[0] );
                }
              if(data.errors.name){
                $("#name-error").html( data.errors.name[0] );
              }
              if(data.errors.password){
                $("#password-error").html( data.errors.password[0] );
              }
          }
          else if (data.success){
            $("#email-error").html("");
            $("#password-error").html("");
            $("#name-error").html("");
            $(".alert-success").css("display", "block")
          }

        },
        error: function(data){
          console.log("fail")
        }
      })
    });

    $("#login_form").submit(function(e){
      e.preventDefault();
      $.ajax({
        method: "POST",
        url:"{{route('login')}}",
        data: $(this).serialize(),
        datatype: "json",
        success: function(data){
          if (data.auth){
            console.log(data.auth)
            $(".alert-danger").css("display", "none")

            $(".alert-success").html("Login successful")
            $(".alert-success").css("display", "block")
          }
          window.location.replace(data.intended);

        console.log(data)
        },
        error: function(data){
          if(data){
            console.log(data.responseJSON.message)
            $(".alert-danger").html(data.responseJSON.message)
            $(".alert-danger").css("display", "block")
          }

          else{
            console.log("Error Ajax - Login")
          }
        }
      });
    });

    $(document).ready(function(){

      $('ul.switcher li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('li').removeClass('active');
      $('div.tab-pane').removeClass('active');

      $(this).addClass('active');
      $("#"+tab_id).addClass('active');


    })
  })

  </script>
  @yield('script')

</html>
