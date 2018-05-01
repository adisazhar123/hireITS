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

    .profile-reputation{
      border-left: solid #DEDEDE;
      border-width: 1px;
      padding: 30px;
      height: 450px;
      border-radius:5px;

    }

    .project{
      margin-bottom: 20px;
    }
    .fa-star{
      color: orange;
    }

    .profile-review{
      background-color: #E9E9E9;
      height: auto;
    }

    #department{
      font-weight: bold;
    }
    #edit-profile{
      width: 100%;
    }
    #user-title{
      display: none;
      margin-bottom: 20px;
      width: 100%;
    }
    #user-desc{
      display: none;
      width: 100%;
      max-height: 300px;
    }

    .profile-review .card{
      border-radius: 0px;
      width: 100%;
    }

    .profile-review{
      border-radius:5px;
      margin-bottom: 20px;
      padding: 10px;
    }

    .profile-review .card{
      border-left: none;
      border-right: none;
    }

    #portfolio{
      margin-bottom: 20px;
    }

    .portfolio{
      background-color: white;
      border-radius:5px;

    }

    .portfolio{
      padding: 10px;
    }

    .skills{
      border-radius: 5px;

    }

    .skills h3{
      padding: 10px;
    }

    .skills .card{
      border-radius: 0px;
      width: 100%;
      border-left: none;
      border-right: none;
    }

    .showcase{
      border-radius:5px;

    }

    .editor{
      margin-bottom: 20px;
    }

    .editor.ql-container{
      border: solid #7A7A7A;
      border-top: none;
      border-width: 1px;
    }

    .ql-toolbar.ql-snow{
      border: solid #7A7A7A;
      border-bottom: none;
      border-width: 1px;
    }


    @media only screen and (max-width: 768px) {

      .profile-pic{
        margin-left: 0;
      }
      .profile-reputation{
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
                  <p id="department">Informatics Department</p>
                  <p>@adisazhar123</p>
                  <p>Member since: 20-07-2017</p>
                  <p>3 recommendations</p>
                </div>
          </div>
          <div class="col-md-6">
            <div class="profile-desc">
              <h2>Adis A.</h2>
              <h3>Software Engineer</h3>

              <form action="{{route('test')}}" method="post">
                {{ csrf_field() }}
                <input id="user-title" type="text" name="user-title" value="">
                <input id="user-desc" name="user-desc" type="hidden">
                <div class="editor">

                </div>
                <button type="submit" id="save-profile" class="btn btn-primary">Save Profile</button>

              </form>


              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile-reputation" style="background-color: #F7F7F7;">
              <button type="button" id="edit-profile" class="btn btn-primary" name="button">Edit Profile</button>

              <br><br><br><br><br>
              <h3>$ 14 USD/hr</h3>
              <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 5 reviews
              <br><br><br><br><br>
               <p>5 Jobs Completed</p>
               <p>5 On Time</p>
            </div>
          </div>
        </div>
      </div>
    </div>

      <section id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio">
                <h3>Portfolio</h3>

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

      <section id="showcase">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio">
                <h3>Showcase</h3>
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

      <section id="review">
        <div class="container">
          <br>
          <div class="row">
            <div class="col-md-9">
              <div class="profile-review" style="background-color: white">
                <h3>Reviews</h3>

                <div class="card">
                  <div class="card-body">
                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    <br><strong>Joni</strong>
                    <p>This guy is awesome!! work is always on time</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    <br><strong>Joni</strong> Project mobile app
                    <p>This guy is awesome!! work is always on time</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="skills" style="background-color: white; width: 100%; height:200px">
                <h3>My Skills</h3>
                <div class="card">
                  <div class="card-body">
                    <ul>
                      <li>C++</li>
                      <li>Photoshop</li>
                    </ul>
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
  <script type="text/javascript">
  $("#edit-profile").click(function(){
    $("input#user-title").css("display", "block");
    $(".editor").css("display","block");
    $(".ql-toolbar.ql-snow").css("display", "block");
    $(".profile-desc h3").css("display", "none");
    $(".profile-desc p").css("display", "none");

  });

  var toolbarOptions = [
    ['bold', 'italic', 'underline'],
    [{ 'list': 'ordered'}, { 'list': 'bullet' }]
  ];

  var formats = [
  'bold',
  'italic',
  'underline',
  'list',
  ];

  var quill = new Quill('.editor', {
    modules: {
      toolbar: toolbarOptions
    },
    theme: 'snow',
    formats: formats
  });

  $(".editor").css("display","none");
  $(".ql-toolbar.ql-snow").css("display", "none");

  $("form").submit(function(){
    var desc = $("#user-desc").val(quill.root.innerHTML)
  });


  </script>
@endsection
