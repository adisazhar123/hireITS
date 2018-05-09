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
      height: 40px;
      display: none;
      margin-bottom: 20px;
      width: 100%;
      font-size: 28px;
    }
    #user-name{
      height: 40px;
      display: none;
      margin-bottom: 20px;
      width: 100%;
      font-size: 28px;

    }
    #user-desc{
      display: none;
      width: 100%;
      max-height: 300px;
    }

    #user-price{
      display: none;

      height: 40px;
      margin-bottom: 20px;
      width: 100%;
      font-size: 28px;
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

    .edit-portfolio{
      margin-top: -43px;
      display: none;
      width: auto;
    }

    .portfolio:hover .edit-portfolio{
      display: block;
      animation: fade;
    }
    .card-img-top{
      height: 250px;
      width: 100%;
    }

    .portfolio .card{
      width: auto;
    }


    .text {
      padding-top: 120px;
      color: white;
      opacity: 1;
    }

    .text .btn{
      width: auto;
    }

    .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background-color: black;
    height: 100%;
    width: 100%;
  }

  .text{
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background-color: black;
    height: 100%;
    width: 100%;
  }

  .portfolio .card:hover .text{
    opacity: 0.8;
  }

  .portfolio .card:hover .middle{
    opacity: 0.1;
  }

  .new-skills{
    display: none;
  }

  .skills:hover .new-skills{
    display: block;
    margin-top: -45px;

  }

    @media only screen and (max-width: 768px) {

      .profile-pic{
        margin-left: 0;
      }
      .profile-reputation{
        height: 100%;
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
        @if (Auth::check())
          @if (!Auth::user()->hassetprofile)
            <div class="alert alert-warning" role="alert">
              You must complete your basic details before you can go anywhere.
            </div>
          @endif

        @endif
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              <div class="profile-pic">
                <img src="{{asset('adis.jpg')}}" style="height: 95%; width: 95%" alt="">
              </div>
            </div>
                <div class="info">
                  <p class="cant" id="department">{{$freelancer->major}} Department</p>
                  <p class="cant">@ {{Auth::user()->username}} </p>
                  <p class="cant">Member since: {{date_format(Auth::user()->created_at,"d/m/Y")}}</p>
                  <p class="cant">3 recommendations</p>
                </div>
          </div>
          <div class="col-md-6">
            <div class="profile-desc">
              <h2 id="name2">@if (!Auth::user()->hassetprofile)
                Please set your name.
              @else
                {{$freelancer->name}}
              @endif

              </h2>
              <h3 id="title">@if (!Auth::user()->hassetprofile)
                What is your title?
              @else
                {{$freelancer->title}}
              @endif

              </h3>

              <form action="#" method="post" class="form-profile">
                {{ csrf_field() }}
                <input id="user-name" type="text" name="user-name" value="">
                <input id="user-title" type="text" name="user-title" value="">
                <input id="user-desc" name="user-desc" type="hidden" value="">
                <div class="editor">

                </div>
                <button type="submit" id="save-profile" class="btn btn-primary" style="display: none">Save Profile</button>

              </form>

              <div class="profile-details">
                <p>
                @if (!Auth::user()->hassetprofile)
                  We want to know a little bit more of you. What are your mastery? Do you like to draw?
                  @else
                    {!! $freelancer->description !!}

                @endif



              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile-reputation" style="background-color: #F7F7F7;">
              <button type="button" id="edit-profile" class="btn btn-primary" name="button">Edit Profile</button>

              <br><br><br><br><br>
              <h3 id="freelancer-price">$ {{$freelancer->price}} USD/hr</h3>
              <input id="user-price" type="text" name="user-price" placeholder="Price per hour" value="{{$freelancer->price}}">
              @if (!$freelancer->reviews)
                <p class="cant">{{$freelancer->reviews}} reviews</p>
                @else
                  <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 5 reviews
              @endif
              <br><br><br><br>
               <p class="cant">{{$freelancer->jobs_completed}} jobs completed</p>
               <p class="cant">{{$freelancer->jobs_ontime}} on time</p>
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
                <div class="row">

                </div>
                <h3>Portfolio</h3>
                @if (!count($portfolios))
                  <p>No portfolio</p>

                @else
                  <button class="btn btn-default float-right edit-portfolio">edit</button>
                  <button class="btn btn-default float-right new-port edit-portfolio" style="width: auto" type="button" name="button">Add new portfolio</button>

                  <div class="row">

                    @foreach ($portfolios as $portfolio)
                      <div class="col-md-4">
                        <div class="card project">

                          <div class="card-body">
                            <img class="card-img-top" src="data:{{$portfolio->img_type}};base64,{{base64_encode( $portfolio->img_name )}}"/>

                            <div class="middle">

                            </div>
                            <div class="text">
                              <h3>{{$portfolio->name}}</h3>
                              <p>{{$portfolio->description}}</p>
                              <form class="" action="{{route('delete.portfolio',$portfolio->portfolio_id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @endif

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
                <button class="btn btn-default float-right new-skills edit-skills" style="width: auto" type="button" name="button">New Skills</button>
                <div class="card">
                  <div class="card-body">
                    <form>
                <div class="">
                    <label for="tag_list">Tags:</label>
                    <select id="search_skills" name="search_skills[]" class="" multiple></select>
                </div>
            </form>
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

      <div class="container">
        <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="{{route('add.portfolio')}}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" id="port_name" name="port_name" placeholder="Portfolio Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="port_desc" name="port_desc" placeholder="Portfolio Description">
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control" name="image" id="port_img">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
@endsection

@section('script')
  <script type="text/javascript">
  $("#edit-profile").click(function(){
    $("input#user-title").css("display", "block");
    $("input#user-name").css("display", "block");
    $(".editor").css("display","block");
    $(".ql-toolbar.ql-snow").css("display", "block");
    $("#name2").css("display", "none");
    $("#title").css("display", "none");
    $("#save-profile").css("display", "block")
    $(".profile-details").css("display", "none")
    $("#user-price").css("display",'block')
    $("#freelancer-price").css("display",'none')
    $(".cant").css("display", "none")

    $.ajax({
      method: "GET",
      url: "{{route('get.freelancer.profile')}}",
      dataType: "json",
      success: function(data){
        console.log(data)
        $("input#user-name").val(data.name);
        $("input#user-title").val(data.title);
        $("#user-price").val(data.price)
        quill.root.innerHTML = data.description
      }
    });

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

  $(".form-profile").submit(function(e){
    e.preventDefault();
    var desc =   quill.root.innerHTML
    var name = $("input#user-name").val();
    var title = $("input#user-title").val();
    var id = '{{Auth::user()->id}}'
    var price =   $("#user-price").val()

    if (desc=="" || name=="" || title=="")
      alert("Fields cannot be empty!")
    else{
      //css
      $("input#user-title").css("display", "none");
      $("input#user-name").css("display", "none");
      $(".editor").css("display","none");
      $(".ql-toolbar.ql-snow").css("display", "none");
      $(".profile-desc h3").css("display", "block");
      $(".profile-desc .profile-details").css("display", "block");
      $("#save-profile").css("display", "none")
      $("#name2").css("display", "block")
      $("#user-price").css("display",'none')
      $("#freelancer-price").css("display",'block')


      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
        url: "{{route('update.freelancer.profile')}}",
        method: "PUT",
        data: {name: name, description: desc, title: title, id: id, price: price},
        success: function(data){
          if(data.success == 1)
            alertify.success('Profile Updated!');

          console.log(data)
        },
        error: function(data){
          console.log(data)
        }
      })

      $(".profile-details").html(desc)
      $("#name2").text(name);
      $("#title").text(title);
      $("#freelancer-price").html(price +" USD/hr")
      $(".cant").css("display", "block")
    }


  });

  $(".new-port").click(function(){
    $(".modal").modal('show')
  });

  $('#search_skills').select2({
      placeholder: "Choose tags...",
      minimumInputLength: 2,
      ajax: {
          url: '/getSkills',
          dataType: 'json',
          data: function (params) {
              return {
                  q: $.trim(params.term)
              };
          },
          processResults: function (data) {
              return {
                  results: data
              };
          },
          cache: true
      }
  });


  </script>
@endsection
