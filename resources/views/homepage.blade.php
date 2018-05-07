@section('style')
  <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Raleway');
</style>
@endsection
@extends('layouts.app')


@section('content')

<div class="container">
  @if($errors->any())
  <h4>{{$errors->first()}}</h4>
  @endif
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-body login-container-wrapper clearfix">
      <div class="">
        <div class="">
			<ul class="switcher clearfix">
				<li class="first logo active" data-tab="login">
						<a>Login</a>
				</li>
				<li class="second logo" data-tab="sign_up">
						<a>Sign Up</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="login">
          <form class="form-horizontal" method="POST" action="#" id="login-form">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} relative">

                  <div class="col-md-12">
                      <input placeholder="Email" id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong id="email-error"></strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="col-md-12">
                      <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                          <span class="help-block">
                              <strong id="password-error"></strong>
                          </span>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-12">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">
                          Login
                      </button>

                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          Forgot Your Password?
                      </a>
                  </div>
              </div>
          </form>
				</div>
				<div class="tab-pane" id="sign_up">
					<form class="form-horizontal login-form">
						<div class="form-group relative">
							<input class="form-control input-lg" name="email" id="email" placeholder="E-mail Address" required="" type="email"> <i class="fa fa-user"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="password" id="password" placeholder="Password" required="" type="password"> <i class="fa fa-lock"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" required="" type="password"> <i class="fa fa-lock"></i>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-lg btn-block" type="submit">Sign Up</button>
						</div>
						<div class="checkbox checkbox-success">
							<input id="agree-terms" type="checkbox">
              <label for="agree-terms"> Agree our terms</label>
						</div>
						<hr>
						<div class="text-center">
							<label><a href="#">Already Member?</a></label>
						</div>
					</form>
				</div>
			</div>
		</div>
      </div>

    </div>
  </div>
</div>

<div class="backgg">
  	<div class="laptop">
		<div class="laptop_a laptop_def">
			<div class="front">
				<iframe width="400" height="225" src="https://www.youtube.com/embed/6RSmq2qV1bg?rel=0&amp;autoplay=1&amp;showinfo=0&amp;start=2" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="back"></div>
			<div class="top"></div>
		</div>
		<div class="bottom"></div>
	</div>
	<div id="buttons">
    	<a href="#" class="butn green">I'm a job maker</a>
		<a href="#" class="butn orange">I'm a job seeker</a>
	</div>
</div>

<div class="howto">
	<h2>How to use hireITS?</h2>
	<div class="">
      <div class="info">
          <i class="fa fa-suitcase" val="maker" style="font-size:60px;" data-toggle="tooltop" title="Job Maker"></i>
          <i class="fa fa-user" val="seeker" style="font-size:60px;" data-toggle="tooltop" title="Students"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="square">
        	<h3>Sign Up</h3>
          <img src="followers.png" alt="" width="170">
          <p>Apply for a legitible account to start.</p>
        </div>
      </div>
      <div class="col-md-4 maker" >
        <div class="square">
        	<h3>Post</h3>
          	<img src="invoice.png" alt="" width="170">
          	<p>Post your projects so freelancers will be able to browse.</p>
        </div>
      </div>
      <div class="col-md-4 seeker" style="display:none">
        <div class="square">
        	<h3>Search</h3>
        	<!-- <img class="fa fa-search" aria-hidden="true" src="followers.png" alt="" width="170"> -->
          <i class="fa fa-search" aria-hidden="true" style="font-size:89px;"></i>
          <p>Browse freely through many projects available accustomed to your likings.</p>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="square">
        	<h3>Discuss</h3>
          <img src="chat.png" alt="" width="170">
          <p>Negotiate bids, ideas and requirements with end user.</p>
        </div>
      </div>
  </div>
</div>


@endsection

@section('script')
<script type="text/javascript">

  $('[data-toggle="tooltip"]').tooltip();

  $(".info i.fa-suitcase").css('opacity','1');

  $('.info i').click(function(){
  var role = $(this).attr('val');

  if(role == "seeker"){
    $(".info i.fa-user").css('opacity','1');
    $(".info i.fa-suitcase").css('opacity','0.5');
    $(".howto .maker").css('display','none');
    $(".howto .seeker").css('display','block');

  }else{
    $(".info i.fa-user").css('opacity','0.5');
    $(".info i.fa-suitcase").css('opacity','1');
    $(".howto .maker").css('display','block');
    $(".howto .seeker").css('display','none');

  }
  });

$(document).ready(function(){

    var url;

	$('ul.switcher li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('li').removeClass('active');
    $('div.tab-pane').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');

    if (tab_id == "login"){

    }
	})

})
</script>
@endsection
