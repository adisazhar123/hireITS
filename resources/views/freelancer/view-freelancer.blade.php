@section('style')
<style media="screen">

/*Box sizing stuff*/
* { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}
/*Font styels*/

h1 {font-weight: normal; font-size:1.6em;}
h1.callout{color:#FFFFFF; font-size:2em; margin:1em 0;}
p{font-size: 1.2em; color:#a3a3a3 ; line-height: 1.5;}
p strong{color:#555555;}
p a{color:#27ae60; text-decoration:none;}

/*img stuff*/
  img {max-width: 100%;}

  body{
    @if ($cover->isEmpty())
      background-image: url('https://images.pexels.com/photos/735911/pexels-photo-735911.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
    @else
      background-image: url({{asset($cover)}});
    @endif
    background-repeat: no-repeat;
    background-size: 100% 465px;
    background-position: top;

  }
  .profile-pic{
    margin-top: 28px;
    justify-content: center;  margin-left: auto;
    margin-right: auto;
    width: 300px;
    height: 100%;
  }
  .profile-pic img{
  border-radius: 5px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  height: 224.467px;
  width: 300px;

  }

  .info{
    text-align: center;
  }

      .info p{
      margin-top: 10px;
      text-align: center;
      line-height: 10px;
      color: white;
      font-size: 18px;
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
        height: 95%;
        width: 95%;
      }
      .text2{
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        height: 10%;
        width: 10%;
      }
      .portfolio .card:hover .text{
        opacity: 0.8;
      }

      .portfolio .card:hover .middle{
        opacity: 0.1;
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


      #user-desc{
        display: none;
        width: 100%;
        max-height: 300px;
      }

      .fa-star{
        color: #FFAA2A;
        margin-right: 3px;
      }



#wrapper{ max-width: 800px; width:100%; margin:0 auto;}
#generic-tabs{
  width:100%; padding:10px;
  margin-top: 43px;
}

#first-tab,#second-tab,#third-tab{
  box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
  border-radius: 3px;
}

#generic-tabs ul#tabs { overflow: hidden; margin:0; padding:0;}
#generic-tabs ul#tabs li{min-height: 100px; float:left; display:inline-block; width:33.33%; background:#EDEDED; border-top:4px solid #CCCCCC; border-right:1px solid #CCCCCC; }
#generic-tabs ul#tabs li:last-child {border-right:none;}
#generic-tabs ul#tabs li:first-child { padding-left:0; }

#generic-tabs ul#tabs li a { text-align:center; display:block; font-size: 1.2em; text-decoration: none; padding: 1.2em 1em; line-height: 16px; color:#BBBBBB;}

#generic-tabs ul#tabs li.active {background:#FFFFFF; border-top:4px solid #3d82ab;}
#generic-tabs ul#tabs li.active a { color:#333333;}
#generic-tabs ul#tabs li.active a i {color:#85b8cb;}

#generic-tabs .tab-content{ background:#FFFFFF; padding:3em 2em;}
#generic-tabs .tab-content h1 {margin-top:0;}

#first-tab{
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#second-tab, #third-tab{
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  display: none;
}

#tabs{
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
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
  #generic-tabs ul#tabs li a { font-size:1.6em; padding: 1.2em 2em; line-height: 16px; }
}


@media screen and (max-width: 768px) {
  .hire-me a{
    width: 100%;
  }
}



</style>
@endsection

@extends('layouts.app')

@section('content')

<div class="container">

        <div class="profile-pic">
          @if ($pf->isEmpty())
            <img class="rounded" src="{{asset('img/avatar.png')}}" alt="profile_pic12">
            @else
              <img class="rounded" src="data:{{$pf[0]->img_type}};base64,{{base64_encode( $pf[0]->name )}}" alt="profile_pic">
          @endif
        </div>
        <div class="info">
            <p class="cant">{{"@".$freelancer[0]->username}} </p>
            <p class="cant" id="department">{{$freelancer[0]->major}} Department</p>

                     @if ($freelancer[0]->review)
                       <p class="cant">{{$freelancer[0]->review}} reviews</p>
                       @for ($i=0; $i < $freelancer[0]->rating; $i++)
                         <i class="fa fa-star"></i>
                       @endfor
                      @else
                        <p>No reviews</p>
                     @endif

                  <p class="cant">Member since: {{date_format(date_create($freelancer[0]->created_at), "d-m-Y")}}</p>
                </div>
      <section id="generic-tabs">


        <ul id="tabs">
            <li>
                <a title="About" href="#first-tab"><i class="fa fa-home"></i> About</a>
            </li>
            <li>
                <a title="Portfolio" href="#second-tab"><i class="fa fa-picture-o"></i> Portfolio</a>
            </li>
            <li>
                <a title="Reviews" href="#third-tab"><i class="fa fa-info-circle"></i> Reviews </a>
            </li>

        </ul>

        <div id="first-tab" class="tab-content animated fadeIn">
          <div class="row">
            <div class="col-lg-8">
              <h2><i class="profile-user fa fa-user"></i> Information</h2>

              <h3 id="name2">
                    {{$freelancer[0]->name}}

                </h3>
                  <h5 id="title">
                    {{$freelancer[0]->title}}
                </h5>



                  <div class="profile-details">

                        {!! $freelancer[0]->description !!}

                  </div>
            </div>
            <div class="col-lg-4 divider">
              <div class="skills">
                <h2><i class="profile-user fa fa-user"></i> Skills</h2>
                  @foreach ($skills as $skill)
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            {{$skill->name}}
                          </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
              </div>
            </div>
          </div>

          <div class="hire-me">
            <a href="{{route('post.project.page')}}?q=project+for+{{$freelancer[0]->username}}" class="btn btn-middle">Hire Me</a>
          </div>
        </div>

        <div id="second-tab" class="tab-content portfolio animated fadeIn">
          @if (!$portfolios->count())
                  <p>No portfolio</p>
                @else
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

                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  @endif

        </div>



        <div id="third-tab" class="tab-content animated fadeIn">
          @if ($reviews->isEmpty())
            <h4>No reviews.</h4>
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
</script>
@endsection
