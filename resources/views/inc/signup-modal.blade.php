<div class="modal signup-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body">
        <form id="register" method="POST" action="#">
          {{ csrf_field() }}

          <div class="alert alert-success" role="alert" style="display: none">
            Register successful. Please login to complete profile.
      </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

              <div class="col-md-12">
                  <input placeholder="Username" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                      <span class="help-block">
                          <strong id="name-error"></strong>
                      </span>              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

              <div class="col-md-12">
                  <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                      <span class="help-block">
                          <strong id="email-error"></strong>
                      </span>
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
                  <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
          </div>



          <div class="form-group">
            <div class="col-md-12">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role"value="employer" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Employer
                </label>
              </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="role" value="freelancer">
            <label class="form-check-label" for="exampleRadios1">
              Freelancer
            </label>
          </div>
            </div>
          </div>

          <div class="form-group">
              <div class="col-md-12 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Register
                  </button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
