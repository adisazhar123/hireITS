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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
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
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
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
                $("#email-error2").html( data.errors.email[0] );
                }
              if(data.errors.username){
                $("#name-error2").html( data.errors.username[0] );
              }
              if(data.errors.password){
                $("#password-error2").html( data.errors.password[0] );
              }
          }
          else if (data.success){
            $("#email-error2").html("");
            $("#password-error2").html("");
            $("#username-error2").html("");
            $(".alert-success").show().delay(5000).fadeOut();
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
            $(".alert-success").show().delay(5000).fadeOut();
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

  $.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
});

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
  @yield('script')

</html>
