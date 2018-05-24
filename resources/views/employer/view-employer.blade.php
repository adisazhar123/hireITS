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
  img {max-width: 100%;}

  body{
    @if ($cover->isEmpty())
      background-image: url('https://images.pexels.com/photos/207153/pexels-photo-207153.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
    @else
      background-image: url({{asset($cover)}});
    @endif
    background-repeat: no-repeat;
    background-size: 100% 470px;
    background-position: top;

  }

	.text2{
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 30%;
		left: 47%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
		height: 10%;
		width: 10%;
	}

  .profile-pic{
    margin-top: 25px;
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
				margin-top: 25px;
			}

      .info p{
      margin-top: 10px;
      text-align: center;
      line-height: 10px;
      color: white;
      font-size: 18px;
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
        color:yellow;
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
        font-size: 28px;
      }
      #user-name{
        height: 40px;
        display: none;
        font-size: 28px;
      }

			#user-address{
				height: 40px;
				display: none;
				font-size: 28px;
			}
      #user-desc{
        display: none;
        width: 100%;
        max-height: 300px;
      }

      #user-price{
        height: 40px;
        font-size: 28px;
				display: none;
      }

			.inputt{
				margin-bottom: 20px;
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


      span.select2.select2-container{
        width: 100%;

      }

      #upload{
        opacity: 0.6;
				margin-left: -50px;
      }



#wrapper{ max-width: 800px; width:100%; margin:0 auto;}
#generic-tabs{
  width:100%; padding:20px;
	margin-top: 80px;
}

#first-tab,#second-tab,#third-tab{
  box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
  border-radius: 3px;
}

/*Tab styles*/
#generic-tabs ul#tabs { overflow: hidden; margin:0; padding:0;}
#generic-tabs ul#tabs li{min-height: 100px; float:left; display:inline-block; width:50%; background:#EDEDED; border-top:4px solid #CCCCCC; border-right:1px solid #CCCCCC; }
#generic-tabs ul#tabs li:last-child {border-right:none;}
#generic-tabs ul#tabs li:first-child { padding-left:0; }

/*Tab link styles*/
#generic-tabs ul#tabs li a { text-align:center; display:block; font-size: 1.2em; text-decoration: none; padding: 1.2em 1em; line-height: 16px; color:#BBBBBB;}

/*Active tab styles*/
#generic-tabs ul#tabs li.active {background:#FFFFFF; border-top:4px solid #3d82ab;}
#generic-tabs ul#tabs li.active a { color:#333333;}
#generic-tabs ul#tabs li.active a i {color:#85b8cb;}

/*Tab content styles*/

#generic-tabs .tab-content{ background:#FFFFFF; padding:3em 2em;}
#generic-tabs .tab-content h1 {margin-top:0;}

#first-tab{
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#second-tab{
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#third-tab{
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

#tabs{
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}


@media only screen and (max-width: 990px) {
  .divider{
    border-left: none;
  }
  #generic-tabs ul#tabs li { font-size: 1.1em;width:100%;}

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


.modal{
  top: 20%;
}
#second-tab{
  padding-top: 51px !important;
  display: none;
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
            <div class="profile-pic animated bounceInDown">
              @if ($pf->isEmpty())
                <img class="rounded" src="{{asset('img/avatar.png')}}" alt="profile_pic12">
                @else
                  <img class="rounded" src="data:{{$pf[0]->img_type}};base64,{{base64_encode( $pf[0]->name )}}" alt="profile_pic">
              @endif
              <div class="text2">

                <form action="#" enctype="multipart/form-data" id="upload-dp">
                  {{ csrf_field() }}
                    <input type="file"  id="my_file" name="image"/>
                    <i class="fa fa-wrench" id="file_selector" style="font-size:60px;"></i>
                    <button id="upload" class="btn btn-default" type="submit" name="button">upload profile pic: </button>
                 </form>
              </div>

            </div>
            <div class="info animated bounceInUp">
              <p class="cant">{{"@".Auth::user()->username}} </p>
  						<p class="cant">Member since: {{date_format(Auth::user()->created_at,"d/m/Y")}}</p>
            </div>
          <section id="generic-tabs">


            <ul id="tabs">
                <li>
                    <a title="About" href="#first-tab"><i class="fa fa-home"></i> About</a>
                </li>
                <li>
                    <a title="Reviews" href="#second-tab"><i class="fa fa-star"></i> Reviews</a>
                </li>
            </ul>

            <div id="first-tab" class="tab-content animated fadeIn">

              <div class="row">
                <div class="col-lg-12">
                  <h2><i class="profile-user fa fa-address-card-o"></i> Information</h2>

                  <h3 id="name2">@if (!Auth::user()->hassetprofile)
                        Please set your name.
                      @else
												{{$employer[0]->name}}
                      @endif

                    </h3>
                      <h5 id="title">@if (!Auth::user()->hassetprofile)
                        What is your company type? Are you a corporate, startup or individual?
                      @else
												{{$employer[0]->title}}
                      @endif
                    </h5>
										<h5 id="freelancer-price">Pays: $ {{$employer[0]->price}}  USD/hr</h5>
										<h5 id="address">{{$employer[0]->address}}</h5>


                      <div class="profile-details">
                        <p>
                        @if (!Auth::user()->hassetprofile)
                          We want to know a little bit more of you. What are your mastery? Do you like to draw?
                          @else
														{!! $employer[0]->description !!}
                        @endif
                      </div>
                </div>
              </div>
            </div>
            <div id="second-tab" class="tab-content animated fadeIn">
              @if ($reviews->isEmpty())
                <h4>No reviews.</h4>
              @else
                @foreach ($reviews as $review)
                    @for ($i=0; $i < $review->rating; $i++)
                      <i class="fa fa-star" aria-hidden="true"></i>
                    @endfor
                  <br><strong>From: {{$review->freelancer2->username}}</strong>
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
