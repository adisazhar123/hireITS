@section('title')
  Profile Freelancer
@endsection

@section('style')
<style media="screen">
.main-container{
  max-height: 60vh !important;
}
/*Box sizing stuff*/
* { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}
/*Font styels*/

h1 {font-weight: normal; font-size:1.6em;}
h1.callout{color:#FFFFFF; font-size:2em; margin:1em 0;}
p{font-size: 1.2em; color:#a3a3a3 ; line-height: 1.5;}
p strong{color:#555555;}
p a{color:#27ae60; text-decoration:none;}
  img {max-width: 100%;}

  body{
    @if ($cover->isEmpty())
    background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
    @else
      background-image: url({{asset($cover)}});
    @endif


  }

  .profile-pic{
    margin-top: 20px;
    justify-content: center;  margin-left: auto;
    margin-right: auto;
    width: 300px;
    height: 100%;
    position: relative;
  }
      .profile-pic img{
      border-radius: 5px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      height: 224.467px;
      /*width: 300px;*/

      }

  .info{
    margin-top: 25px;
    text-align: center;
  }

  .info p{
    margin-top: 10px;
    text-align: center;
    line-height: 10px;
    color: black;
    font-size: 25px;
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
    .text {
          padding-top: 120px;
          color: white;
          opacity: 1;
        }
        .profile-header h2{

          border-bottom: 1px solid #ddd;
          padding-bottom: 10px;
          color: #404040;
        }

        .edit-portfolio{
          margin-top: -46px;
          display: none;
          width: auto;
          display: block;
       /*   font-size: 2em;*/
          padding: -50px;
          background-color: #f0ad4e;
          color : #fff;
        }

          .btn-primary {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;

}

.btn-primary:hover {
    color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
}
/*
        .portfolio:hover .edit-portfolio{
          
          animation: fade;
        }*/
        .card-img-top{
          height: 250px;
          width: 100%;
        }

        .portfolio .card{
          width: auto;
        }

        .portfolio img{
          border-radius: 4px;
        }

        .input-group-text{
          width: 55px;
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
        height: 95%;
        width: 95%;
      }
      .text2{
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
      }
      .portfolio .card:hover .text{
        opacity: 0.8;
      }

      .portfolio .card:hover .middle{
        opacity: 0.1;
      }

      .new-skills{
        display: block;
        margin-top: -45px;

      }
      .editor{
        margin-bottom: 10px;
      }
      .editor.ql-container{
        border: 1px solid #ccd0d2;
        border-top: none;
        border-width: 1px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        background-color: white;
      }


      .ql-editor:focus{
        color:#495057;
        background-color:#fff;
        border-color:#98cbe8;
        outline:0;
        box-shadow:0 0 0 .2rem rgba(0,123,255,.25);

      }
      .ql-toolbar.ql-snow{
        border: 1px solid #ccd0d2;
        border-bottom: none;
        border-width: 1px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        background-color: white;
      }
      .fa-star{
        color: #FFAA2A;
        margin-right: 3px;
      }

      .divider{
        border-left: solid #E9E9E9;
        border-width: 1px;
      }
      .text2:hover{
        cursor: pointer;
      }

      .profile-pic:hover .text2{
        opacity: 1;
      }

      #user-title{
        height: 40px;
        display: none;
        margin-bottom: 20px;
        font-size: 24px;
      }
      #user-name{
        height: 40px;
        display: none;
        margin-bottom: 20px;
        font-size: 24px;

      }
      #user-desc{
        display: none;
        width: 100%;
        max-height: 300px;
      }

      #user-price, #paypal{
        display: none;

        height: 40px;
        margin-bottom: 20px;
        font-size: 24px;
      }

      #jurusan{
        display: none;
        height: 40px;
        margin-bottom: 20px;
        font-size: 24px;
      }


      .input-group-prepend{
        display: none;
      }

      .input-group-text{
        height: 40px;
      }


      .user-tags {
        margin: 20px 0 0 0;
        padding: 0;
        list-style: none;
        cursor: default;
      }
.user-tags .tag {
    display: inline-block;
    /*font-size: 8pt;
    text-transform: lowercase;*/
   /* background: rgba(255,255,255,.07);*/
    height: 20px;
    line-height: 20px;
    padding: 0 10px;
    border-radius: 10px;
    box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.24), 0 1.5px 6px rgba(0, 0, 0, 0.12);
}

      #search_skills{
        width: 100%;

      }
      span.select2.select2-container{
        width: 100%;

      }

      #upload{
       background-color: rgba(0,0,0,0);
      }

      .skills .card{
        top: -15px;
      }

/*Generic styles*/
#wrapper{ max-width: 800px; width:100%; margin:0 auto;}
#generic-tabs{
  width:100%; padding:20px;
  margin-top: 30px;
}

#first-tab,#second-tab,#third-tab{
  box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
  border-radius: 3px;
}

/*Tab styles*/
#generic-tabs ul#tabs { overflow: hidden; margin:0; padding:0;}
#generic-tabs ul#tabs li{min-height: 100px; float:left; display:inline-block; width:33.33%; background:#EDEDED; border-top:4px solid #CCCCCC; border-right:1px solid #CCCCCC; }
#generic-tabs ul#tabs li:last-child {border-right:none;}
#generic-tabs ul#tabs li:first-child { padding-left:0; }

/*Tab link styles*/
#generic-tabs ul#tabs li a { text-align:center; display:block; font-size: 1.2em; text-decoration: none; padding: 1.2em 1em; line-height: 16px; color:#BBBBBB;}

/*Active tab styles*/
#generic-tabs ul#tabs li.active {background:#FFFFFF; border-top:4px solid #f39c12;}
#generic-tabs ul#tabs li.active a { color:#333333;}
#generic-tabs ul#tabs li.active a i {color:#6da768;}

/*Tab content styles*/

#generic-tabs .tab-content{ background:#FFFFFF; padding:3em 2em;}
#generic-tabs .tab-content h1 {margin-top:0;}

#first-tab{
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#second-tab{
  display: none;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#third-tab{
  display: none;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#tabs{
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.delete-skills{
  display: none;
}

.skills .card:hover .delete-skills{
  display: block;
}



@media only screen and (max-width: 990px) {
  .divider{
    border-left: none;
  }
  #generic-tabs ul#tabs li { font-size: 1.1em;width:100%;}

  .text2{
    top: 25%;
    left: 50%;
  }

  }

@media only screen and (min-width: 650px) {
  h1{font-size:2em;}
  h1.callout{font-size:3em;}
  p{font-size:1.4em;}
  #generic-tabs ul#tabs li a { font-size:1.6em; padding: 1.2em 2em ; line-height: 16px; }
}

#edit-profile{
  float: right;
  padding: 10px;

}

#my_file {
  visibility: hidden;
  position: absolute;
  left: -9999px;
  top: -9999px
}



.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.7);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;

}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
    background-color: rgba(255,255,255,0.1);
}

#file_selector:hover{
  cursor: pointer;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.modal{
  top: 20%;
}
#second-tab{
  padding-top: 51px !important;
}

#edit-profile{
  display: none;
}

#first-tab:hover #edit-profile{
  display: block;
}

.oke{
  position: relative;
}


</style>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
      @if (Auth::check())
              @if (!Auth::user()->hassetprofile)
                <div class="alert alert-warning" role="alert">
                  You must complete your basic details before you can go anywhere.
                </div>
              @endif

            @endif
            <div class="profile-pic  bounceInDown">
              @if ($pf->isEmpty())
                <img class="rounded" src="{{asset('https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png')}}" alt="profile_pic12">
                @else
                  <img class="rounded" src="data:{{$pf[0]->img_type}};base64,{{base64_encode( $pf[0]->name )}}" alt="profile_pic">
              @endif

                <form action="#" enctype="multipart/form-data" id="upload-dp" style="text-align: center;">
                  {{ csrf_field() }}
                    <input type="file" id="my_file" name="image"/>
                    <i class="fa fa-wrench" id="file_selector" style="font-size:30px;"></i>
                    <button id="upload" class="btn btn-default" type="submit" name="button">Upload profile picture</button>
                 </form>

            </div>
            <div class="info  bounceInUp">
                <h5 class="cant">{{"@".Auth::user()->username}} </h5>
                <h5 class="cant" id="department">{{$freelancer->major}} Department</h5>
                <h5 class="cant">{{$freelancer->jobs_completed}} jobs completed</h5>

                @if ($freelancer->review)
                  <h5 class="cant">{{$freelancer->review}} reviews</h5>
                  @for ($i=0; $i < $freelancer->rating/$freelancer->review; $i++)
                    <i class="fa fa-star"></i>
                  @endfor
                @else
                 <!--  <p>No reviews.</p> -->
                @endif

                      <h5 class="cant">Member since: {{date_format(Auth::user()->created_at,"d/m/Y")}}</h5>
                    </div>
          <section id="generic-tabs">


            <ul id="tabs">
                <li>
                    <a title="About" href="#first-tab"><i class="fa fa-home"></i> About Me</a>
                </li>
                <li>
                    <a title="Portfolio" href="#second-tab"><i class="fa fa-picture-o"></i> Portfolio</a>
                </li>
                <li>
                    <a title="Reviews" href="#third-tab"><i class="fa fa-info-circle"></i> Reviews </a>
                </li>
            </ul>

            <div id="first-tab" class="tab-content  fadeIn">

              <div class="row">
                <div class="col-lg-8">
                  <button type="button" id="edit-profile" class="btn btn-warning" name="button" style="float: right">Edit Profile</button>
                  <h2><i class="profile-user fa fa-address-card-o"></i> Information</h2>

                  <h3 id="name2">@if (!Auth::user()->hassetprofile)
                        Please set your name.
                      @else
                        {{$freelancer->name}}
                      @endif

                    </h3>
                      <h5 id="title">@if (!Auth::user()->hassetprofile)
                        What is your title?
                      @else
                        {{$freelancer->title}}
                      @endif
                    </h5>

                      <form action="#" method="post" class="form-profile">
                        {{ csrf_field() }}
                        <div class="input-group inputt  fadeIn">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-address-card" aria-hidden="true"></i></span>
                              </div>
                              <input class=" form-control" id="user-name" type="text" placeholder="what is your name?" name="user-name" value="" style="display: none">
                         </div>

                         <div class="input-group inputt  fadeIn">
                               <div class="input-group-prepend ">
                                 <span class="input-group-text"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                               </div>
                               <input class="fadeIn form-control" id="user-title" type="text" placeholder="what is your title?" name="user-title" value="" style="display: none">
                          </div>

                          <div class="input-group inputt  fadeIn">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="text" name="jurusan" id="jurusan" placeholder="what do you study in ITS?">
                           </div>

                           <div class="input-group inputt  fadeIn">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text"><i class="fa fa-money" aria-hidden="true"></i></span>
                                 </div>
                             <input type="text" class="form-control" name="paypal" id="paypal" placeholder="if you want to be paid, fill in a valid bank account number" value="">
                            </div>
                            <div class="input-group inputt  fadeIn">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input class="form-control" id="user-price" type="number" step="0.5" name="user-price" placeholder="Price per hour" value="{{$freelancer->price}}" style="display: none">
                             </div>


                        <h5 id="freelancer-price"> $ {{$freelancer->price}} USD/hr</h5>
                        <input id="user-desc" name="user-desc" type="hidden" value="">
                        <div class="editor  fadeIn">

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
                <div class="col-lg-4 divider">
                  <div class="skills">

                    <h2><i class="profile-user fa fa-cogs"></i> Skills</h2>
                      <form id="skills-form" style="opacity:0">
                        <div class="form-group">
                          <label for="tag_list">Tags:</label>
                          <select class="form-control col-md-12" id="search_skills" name="search_skills[]" multiple></select>

                        </div>
                      </form>

                      @foreach ($skills as $skill)
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                {{$skill->name}}
                              </div>
                              <div class="col-md-6">
                                <button type="button" class="btn btn-danger delete-skills" skill-id="{{$skill->skills_id}}" style="margin-left: 5px; margin-top:-5px" name="button">Delete</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                  </div>
                </div>
              </div>

            </div>

            <div id="second-tab" class="tab-content portfolio" style="text-align: center;">
              @if (!$portfolios->count())
                      <h5 style="color:#c6c4c4; text-align: center;">No portfolio.</h5>
                      <button class="btn btn-default new-port edit-portfolio" style="width: auto; display: inline-block;" type="button" name="button">Add new portfolio</button>

                    @else
                      @if ($portfolios->count() < 6)
                        <button class="btn btn-default new-port edit-portfolio" style="width: auto; display: inline-block;" type="button" name="button">Add new portfolio</button>
                      @endif

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
                      </div>
                      @endif
                        <div class="modal portfolio  fadeIn" tabindex="-1" role="dialog">
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
                                    <input type="text" class="form-control" id="port_name" name="port_name" placeholder="Portfolio Name" required>
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" id="port_desc" name="port_desc" placeholder="Portfolio Description" required></textarea>
                                  </div>
                                  <div class="form-group">
                                    <input type="file" class="form-control" name="image" id="port_img" required>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>
            </div>

            <div id="third-tab" class="tab-content  fadeIn">
                @if ($reviews->isEmpty())
                  <h5 style="color:#c6c4c4; text-align: center;">No reviews.</h5>
                @else
                  @foreach ($reviews as $review)
                      @for ($i=0; $i < $review->rating; $i++)
                        <i class="fa fa-star" aria-hidden="true"></i>
                      @endfor
                    <br><strong>From: {{$review->employer->username}}</strong>
                    <h6>Project name: {{$review->job->name}}</h6>
                    <p>{{$review->comment}}</p>
                  @endforeach
                @endif
            </div>
        </section>


      </div>



@endsection

@section('script')
<script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    $("#edit-profile").click(function(){
      $(".input-group-prepend").css("display", "block")

      $("input#user-title").css("display", "block");
      $("input#user-name").css("display", "block");
      $("#skills-form").css("opacity","1")
      $(".editor").css("display","block");
      $(".ql-toolbar.ql-snow").css("display", "block");
      $("#name2").css("display", "none");
      $("#title").css("display", "none");
      $("#save-profile").css("display", "block")
      $(".profile-details").css("display", "none")
      $("#user-price").css("display",'block')
      $("#jurusan").css("display",'block')
      $("#paypal").css("display",'block')
      $("#freelancer-price").css("display",'none')
      $(".cant").css("display", "none")
      $(this).hide();
      $.ajax({
        method: "GET",
        url: "{{route('get.freelancer.profile')}}",
        dataType: "json",
        success: function(data){
          console.log(data)
          $("input#user-name").val(data.name);
          $("input#user-title").val(data.title);
          $("#user-price").val(data.price)
          $("#jurusan").val(data.major)
          $("#paypal").val(data.paypal)
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
    var jurusan = $("#jurusan").val()
    var paypal = $("#paypal").val()

    if (desc=="" || name=="" || title=="" || jurusan =="")
      alertify.error('Do not leave any fields empty!');
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
      $("#jurusan").css("display",'none')
      $("#paypal").css("display",'none')
      $("#freelancer-price").css("display",'block')
      $("#skills-form").css("opacity","0")
      $(".input-group-prepend").css("display", "none");


      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      var mySkills = [];
      var skills = $("#search_skills").select2('data')
      console.log(skills)
      for(var i=0; i<skills.length; i++)
        mySkills.push(skills[i].id)

      $.ajax({
        url: "{{route('update.freelancer.profile')}}",
        method: "PUT",
        data: {name: name, description: desc, title: title, id: id, price: price, skills: mySkills, jurusan: jurusan,
          paypal: paypal
              },
        success: function(data){
          if(data.success == 1){

            $(".profile-details").html(desc)
            $("#name2").text(name);
            $("#title").text(title);
            $("#department").text(jurusan + " Department")
            $("#freelancer-price").html("$ " +price +" USD/hr")
            $(".cant").css("display", "block")
            $("#title").css("display", "block")
            $(".profile-details").css("display", "block")
            $("#edit-profile").show()
            for(var i=0; i<skills.length; i++){
              $(".skills").append(        "<div class=card>"+
                        "<div class=card-body>"+
                          "<div class=row>"+
                            "<div class=col-md-6>"+
                              skills[i].text+
                            "</div>"+
                            "<div class=col-md-6>"+
                              "<button type=button class='btn btn-danger delete-skills' skill-id="+skills[i].id+"style=margin-left: 5px; margin-top:-5px name=button>Delete</button>"
                            +"</div>"+
                          "</div>"+
                        "</div>"+
                      "</div>")
            }
            alertify.success('Profile Updated!');

          }

          console.log(data)
        },
        error: function(data){
          console.log(data)
        }
      })
    }
  });

  $(".new-port").click(function(){
    $(".modal.portfolio").modal('show')
  });

(function($){
  /* trigger when page is ready */
  $(document).ready(function (){

        //Tabs functionality
        //Firstly hide all content divs
        $('#generic-tabs .tab-content').hide();
        //Then show the first content div
        $('#generic-tabs div:first').show();
        //Add active class to the first tab link
        $('#generic-tabs ul#tabs li:first').addClass('active');
        //Functionality when a tab is clicked
        $('#generic-tabs ul#tabs li a').click(function(){
          //Firstly remove the current active class
            $('#generic-tabs ul#tabs li').removeClass('active');
            //Apply active class to the parent(li) of the link tag
            $(this).parent().addClass('active');
            //Set currentTab to this link
            var currentTab = $(this).attr('href');
            //Hide away all tabs
            $('#generic-tabs .tab-content').hide();
            //show the current tab
            $(currentTab).show();
            //Stop default link action from happening
            return false;
        });
  });
})(window.jQuery);

$('#search_skills').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getSkills',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.name,
                  id: item.skills_id
              }
          })
      };
    },
    cache: true
  }
});

$('#search_skills').on('select2:select', function (e) {
    var data = e.params.data;
    //console.log(data);
});
$('#search_skills').on('select2:unselect', function (e) {
    var data = e.params.data;
    console.log(data);
});



$(".text2").on('click',function(e){
 $("#upload_dp").trigger('click');
});

$(".text2").hover(function(){

})

	$('#file_selector').on('click', function(e) {
  	$('#my_file').trigger('click');
	});

	$('#my_file').on('change', function() {
	});

  $("#upload-dp").submit(function(){
    if ($('#my_file').val() == ""){
      alert("fill in a pic")
      return false;
    }else{
      $("#upload-dp").attr('action', '{{route('store.freelancer.dp')}}');
      $("#upload-dp").attr('method', 'post');

      $("#upload-dp").trigger('submit');

    }
  })


  $(document).on('click','.delete-skills', function(){
    var skill_id = $(this).attr('skill-id');
    var this2 = $(this);

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: '{{route('delete.skill')}}',
      method: "DELETE",
      data:{skill_id: skill_id},
      success:function(data){
        if (data=="ok"){
          this2.closest(".card").remove()
          alertify.success('Skill Deleted!');

        }
        console.log(data)
      },
      error: function(data){
        console.log("AJAX ERROR - DELETE")
      }
    });
  });

  @if(session()->has('success'))
      alertify.success('{{ session()->get('success') }}')
  @endif

</script>

@endsection
