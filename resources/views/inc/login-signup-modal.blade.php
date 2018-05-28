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
					<form class="form-horizontal login-form" action="#" id="login_form">
            {{ csrf_field() }}
            <div class="alert alert-success" role="alert" style="display: none">

                </div>
            <div class="alert alert-danger" role="alert" style="display: none">

            </div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="email" id="login_username" placeholder="E-mail Address" required="" type="email"> <i class="fa fa-user"></i>
                <span class="help-block">
                  <strong style="color: red" id="email-error"></strong>
                </span>
        		</div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="password" id="login_password" placeholder="Password" required="" type="password"> <i class="fa fa-lock"></i>
              <span class="help-block">
                  <strong style="color: red" id="password-error"></strong>
              </span>
            </div>

						<div class="form-group">
							<button class="btn btn-success btn-lg btn-block" type="submit" style="font-size: 18px;">Login</button>
						</div>
            <hr />
<!-- 						<div class="text-center">
							<label><a href="#">Forgot your password?</a></label>
						</div> -->
					</form>
				</div>
				<div class="tab-pane" id="sign_up">
					<form class="form-horizontal login-form" id="register_form">
            {{ csrf_field() }}
            <div class="alert alert-success" role="alert" style="display: none">
              Register successful. Please login to complete profile.
            </div>
            <div class="form-group relative">
              <input class="form-control input-lg" id="username" name="username" placeholder="Username" required="" type="text"> <i class="fa fa-user"></i>
              <span class="help-block">
                  <strong style="color: red" id="name-error2"></strong>
              </span>
            </div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="email" id="login_username" placeholder="E-mail Address" required="" type="email"> <i class="fa fa-user"></i>
              <span class="help-block">
                  <strong style="color: red" id="email-error2"></strong>
              </span>
            </div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="password" id="login_password" placeholder="Password" required="" type="password"> <i class="fa fa-lock"></i>
              <span class="help-block">
                  <strong style="color: red" id="password-error2"></strong>
              </span>
            </div>
						<div class="form-group relative">
							<input class="form-control input-lg" name="password_confirmation" placeholder="Repeat Password" required="" type="password"> <i class="fa fa-lock"></i>

            </div>
            <div class="form-group" >
              <div class="col-md-12">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" value="employer" checked>
                  <label class="form-check-label" for="exampleRadios1" style="color: white">
                    Employer
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" value="freelancer">
                  <label class="form-check-label" for="exampleRadios1" style="color: white">
                    Freelancer
                  </label>
                </div>
              </div>
            </div>
<!-- 						<div class="checkbox checkbox-success">
							<input id="agree-terms" type="checkbox">
              <label for="agree-terms"> Agree our terms</label>
						</div> -->
						<hr>
						<div class="form-group">
							<button class="btn btn-success btn-lg btn-block" type="submit" style="font-size: 18px;">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </div>

    </div>
  </div>
</div>
