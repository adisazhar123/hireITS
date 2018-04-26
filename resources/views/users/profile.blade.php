@section('style')
  <style media="screen">
    .background-pic{
      background-image: url('https://images.pexels.com/photos/735911/pexels-photo-735911.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
      height: 60%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-color: rgba(0,0,0,0);
    }

    .profile{
      margin-top: -230px;
      margin-bottom: 20px;
      border-radius: 4px;
    }

    .profile-pic{
      height: 240px;
      margin-top: -20px;
      background-color: white;
      margin-left: 10px;
      border: solid #E9E9E9;
      border-width: 1px;
    }

    .profile-pic img{
      border-radius: 5px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding-top: 13px;
      }

    .profile-desc{
      padding: 25px;
    }

    .info{
      margin-top: 10px;
      text-align: center;
      line-height: 50%;
    }

    .profile-price{
      border-left: solid #DEDEDE;
      border-width: 1px;
      padding: 10px;
      height: 450px;
    }

    .project{
      margin-bottom: 10px;
    }
    .fa-star{
      color: orange;
    }

    @media only screen and (max-width: 768px) {

      .profile-pic{
        margin-left: 0;
      }
      .profile-price{
        height: auto;
      }


    }



  </style>


@endsection

@extends('layouts.app')

@section('content')
    <div class="background-pic">
    </div>
    <div class="container">
      <div class="profile" style="background-color: white; height : auto; min-height: 400px">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              <div class="profile-pic">
                <img src="{{asset('adis.jpg')}}" style="height: 95%; width: 95%" alt="">
              </div>
            </div>
                <div class="info">
                  <p>Informatics Department</p>
                  <p>@adisazhar123</p>
                  <p>Member since: 20-07-2017</p>
                  <p>3 recommendations</p>
                  <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                </div>
          </div>
          <div class="col-md-6">
            <div class="profile-desc">
              <h2>Adis A.</h2>
              <h3>Software Engineer</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile-price" style="background-color: #F7F7F7;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

      <section id="portfolio">
        <div class="container">
          <h3>Portfolio</h3>
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio" style="background-color: grey">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card project">
                      <div class="card-body">
                        project 1
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card project">
                      <div class="card-body">
                        project 2
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card project">
                      <div class="card-body">
                        project 3
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card project">
                      <div class="card-body">
                        project 4
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card project">
                      <div class="card-body">
                        project 5
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card project">
                      <div class="card-body">
                        project 6
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <br>
@endsection

@section('script')

@endsection
