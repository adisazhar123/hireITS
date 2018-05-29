@section('title')
  Profile Employer
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

  #file_selector{
    margin-bottom: 20px;
  }

  .profile-pic{
    margin-top: 20px;
    justify-content: center;  margin-left: auto;
    margin-right: auto;
    width: 300px;
    height: 100%;
    position: relative;
  }

  #file_selector:hover{
    cursor: pointer;
  }
  .profile-pic img{
    border-radius: 5px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    height: 224.467px;
 /*   width: 300px;*/
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


      .divider{
        border-left: solid #E9E9E9;
        border-width: 1px;
      }
      .text2:hover{
        cursor: pointer;
      }

      .profile-pic .text2{
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
        background-color: rgba(0,0,0,0);
				/*margin-left: -50px;*/
      }



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
#generic-tabs ul#tabs li{min-height: 100px; float:left; display:inline-block; width:50%; background:#EDEDED; border-top:4px solid #CCCCCC; border-right:1px solid #CCCCCC; }
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
.fa-star{
  color: #FFAA2A;
  margin-right: 3px;
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
            <div class="profile-pic">
              @if ($pf->isEmpty())
                <img class="rounded" src="{{asset('https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png')}}" alt="profile_pic12">
                @else
                  <img class="rounded" src="data:{{$pf[0]->img_type}};base64,{{base64_encode( $pf[0]->name )}}" alt="profile_pic">
              @endif

                <form action="#" enctype="multipart/form-data" id="upload-dp" style="text-align: center;">
                  {{ csrf_field() }}
                    <input type="file"  id="my_file" name="image"/>
                    <i class="fa fa-wrench" id="file_selector" style="font-size:30px;"></i>
                    <span><button id="upload" class="btn btn-default" type="submit" name="button">Upload profile picture</button></span>
                 </form>

            </div>
            <div class="info">
              <h5 class="cant">{{"@".Auth::user()->username}} </h5>
  						<h5 class="cant">Member since: {{date_format(Auth::user()->created_at,"d/m/Y")}}</h5>
              @if ($employer->review)
                <h5 class="cant">{{$employer->review}} reviews</h5>
                @for ($i=0; $i < $employer->rating/$employer->review; $i++)
                  <i class="fa fa-star"></i>
                @endfor
               @else
                 <!-- <p>No reviews</p> -->
              @endif
            </div>
          <section id="generic-tabs">
            <ul id="tabs">
                <li>
                    <a title="About" href="#first-tab"><i class="fa fa-home"></i> About Me</a>
                </li>
                <li>
                    <a title="Reviews" href="#second-tab"><i class="fa fa-info-circle"></i> Reviews</a>
                </li>
            </ul>

            <div id="first-tab" class="tab-content  ">

              <div class="row">
                <div class="col-lg-12">
									<button type="button" id="edit-profile" class="btn btn-warning" name="button" style="float: right">Edit Profile</button>
                  <h2><i class="profile-user fa fa-address-card-o"></i> Information</h2>

                  <h3 id="name2">@if (!Auth::user()->hassetprofile)
                        Please set your name.
                      @else
												{{$employer->name}}
                      @endif

                    </h3>
                      <h5 id="title">@if (!Auth::user()->hassetprofile)
                        What is your company type? Are you a corporate, startup or individual?
                      @else
												{{$employer->title}}
                      @endif
                    </h5>
										<h5 id="freelancer-price">Pays: $ {{$employer->price}}  USD/hr</h5>
										<h5 id="address">{{$employer->address}}</h5>
                      <form action="#" method="post" class="form-profile  ">
                        {{ csrf_field() }}

												<div class="input-group inputt  ">
															<div class="input-group-prepend  ">
																<span class="input-group-text"><i class="fa fa-building" aria-hidden="true"></i></span>
															</div>
															<input class="  form-control" id="user-name" type="text" placeholder="what is the name of your company?" name="user-name" value="" style="display: none">
												 </div>

												<div class="input-group inputt  ">
															<div class="input-group-prepend  ">
																<span class="input-group-text"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
															</div>
															<input class="  form-control" id="user-title" type="text" placeholder="what is your title?" name="user-title" value="" style="display: none">
												 </div>

												<div class="input-group inputt  ">
															<div class="input-group-prepend  ">
																<span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
															</div>
															<input class="form-control  " id="user-address" placeholder="Where is your bussiness located at?" style="display: none" type="text" name="" value="">
												 </div>

												<div class="input-group inputt  ">
								              <div class="input-group-prepend  "  >
								                <span class="input-group-text">$</span>
								              </div>
															<input class="form-control  " id="user-price" type="number" step="0.5" name="user-price" placeholder="Price per hour" value="">
								         </div>
												<input id="user-desc" name="user-desc" type="hidden" value="">
                        <div class="editor  ">

                        </div>
                        <button type="submit" id="save-profile" class="btn btn-primary  " style="display: none">Save Profile</button>
                      </form>

                      <div class="profile-details">
                        <p>
                        @if (!Auth::user()->hassetprofile)
                          We want to know a little bit more of you. What are your mastery? Do you like to draw?
                          @else
														{!! $employer->description !!}
                        @endif
                      </div>
                </div>
              </div>
            </div>
            <div id="second-tab" class="tab-content  ">
              @if ($reviews->isEmpty())
                <h5 style="color:#c6c4c4; text-align: center;">No reviews.</h5>
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
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    $("#edit-profile").click(function(){
			$(".input-group-prepend").css("display", "block")
			$("input#user-address").css("display", "block");
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
			$("#address").css("display",'none')
	    $(".cant").css("display", "none")


    $(this).hide();
    $.ajax({
      method: "GET",
      url: "{{route('get.employer.profile')}}",
      dataType: "json",
      success: function(data){
        console.log(data)
        $("input#user-name").val(data.name);
        $("input#user-title").val(data.title);
				$("input#user-address").val(data.address);
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
		var address =   $("#user-address").val()

    if (desc=="" || name=="" || title=="" || address=="" || price=="")
      alert("Fields cannot be empty!")
    else{
      //css
			$(".input-group-prepend").css("display", "none");
      $("input#user-title").css("display", "none");
      $("input#user-name").css("display", "none");
      $(".editor").css("display","none");
      $(".ql-toolbar.ql-snow").css("display", "none");
      $(".profile-desc h3").css("display", "block");
      $(".profile-desc .profile-details").css("display", "block");
      $("#save-profile").css("display", "none")
      $("#name2").css("display", "block")
      $("#user-price").css("display",'none')
			$("#user-address").css("display",'none')
      $("#freelancer-price").css("display",'block')


      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $.ajax({
        url: "{{route('update.employer.profile')}}",
        method: "PUT",
        data: {name: name, description: desc, title: title, id: id, price: price, address:address},
        success: function(data){
          if(data.success == 1){

            $(".profile-details").html(desc)
            $("#name2").text(name);
            $("#title").text(title);
						$("#address").text(address)
            $(".cant").css("display", "block")
            $("#title").css("display", "block")
						$("#address").css("display", "block")
            $(".profile-details").css("display", "block")
            $("#freelancer-price").text("Pays: $ " +price + " USD/hr")
            $("#edit-profile").show()
            alertify.success('Profile Updated!');
          }
          console.log(data)
        },
        error: function(data){
					alertify.error('Error!');
          console.log(data)
        }
      })
    }
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
      $("#upload-dp").attr('action', '{{route('store.employer.dp')}}');
      $("#upload-dp").attr('method', 'post');

      $("#upload-dp").trigger('submit');

    }
  })

	function validate(file) {
	    var ext = file.split(".");
	    ext = ext[ext.length-1].toLowerCase();
	    var arrayExtensions = ["jpg" , "jpeg", "png"];

	    if (arrayExtensions.lastIndexOf(ext) == -1) {
	        alert("Wrong extension type.");
	        $("#my_file").val(null);
					return false;
	    }
			return true;
	}

</script>

@endsection
