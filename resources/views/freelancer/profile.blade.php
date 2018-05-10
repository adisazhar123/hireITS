@section('style')
<style media="screen">

body{font: 100% Helvetica, Arial, Sans-serif; background:#2c3e50;}
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
    .profile-pic img{
      border-radius: 5px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding-top: 13px;
      height: 240px;
      }

        .info{
      margin-top: 10px;
      text-align: center;
      line-height: 50%;
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

/*Generic styles*/
#wrapper{ max-width: 800px; width:100%; margin:0 auto;}
#generic-tabs{ width:100%; padding:20px;}

/*Tab styles*/
#generic-tabs ul { overflow: hidden; margin:0; padding:0;}
#generic-tabs ul li{ float:left; display:inline-block; width:25%; background:#EDEDED; border-top:4px solid #CCCCCC; border-right:1px solid #CCCCCC;}
#generic-tabs ul li:last-child {border-right:none;}
#generic-tabs ul li:first-child { padding-left:0; }

/*Tab link styles*/
#generic-tabs ul li a {text-align:center; display:block; font-size: 1.2em; text-decoration: none; padding: 1.2em 1em; line-height: 16px; color:#BBBBBB;}

/*Active tab styles*/
#generic-tabs ul li.active {background:#FFFFFF; border-top:4px solid #3d82ab;}
#generic-tabs ul li.active a { color:#333333;}
#generic-tabs ul li.active a i {color:#85b8cb;}

/*Tab content styles*/

#generic-tabs .tab-content{ background:#FFFFFF; padding:3em 2em;}
#generic-tabs .tab-content h1 {margin-top:0;}


@media only screen and (min-width: 650px) {
  h1{font-size:2em;}
  h1.callout{font-size:3em;}
  p{font-size:1.4em;}
  #generic-tabs ul li a { font-size:1.6em; padding: 1.2em 2em; line-height: 16px; }  
}

</style>
@endsection

@extends('layouts.app')

@section('content')

<div id="wrapper">
  @if (Auth::check())
          @if (!Auth::user()->hassetprofile)
            <div class="alert alert-warning" role="alert">
              You must complete your basic details before you can go anywhere.
            </div>
          @endif

        @endif
   <div class="profile-pic">
                <img src="{{asset('followers.png')}}" alt="">
        </div>
        <div class="info">
            <p class="cant">@ {{Auth::user()->username}} </p>
            <p class="cant" id="department">{{$freelancer->major}} Department</p>
            <p class="cant">{{$freelancer->jobs_completed}} jobs completed, {{$freelancer->jobs_ontime}} on time</p>
                  
                     @if (!$freelancer->reviews)
                <p class="cant">{{$freelancer->reviews}} reviews</p>
                @else
                  <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 5 reviews
              @endif
                  
                  <!-- <p class="cant">Member since: {{date_format(Auth::user()->created_at,"d/m/Y")}}</p>
                  <p class="cant">3 recommendations</p> -->
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
            <li>
                <a title="Contact" href="#fourth-tab"><i class="fa fa-envelope"></i> Contact</a>      
            </li>
        </ul>
       
        <div id="first-tab" class="tab-content">
             <button type="button" id="edit-profile" class="btn btn-primary" name="button">Edit Profile</button>
          <h2><i class="profile-user fa fa-user"></i> Information</h2>

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

              

              <br><br><br><br><br>
              <h3 id="freelancer-price">$ {{$freelancer->price}} USD/hr</h3>
              <input id="user-price" type="text" name="user-price" placeholder="Price per hour" value="{{$freelancer->price}}">
          <!--  
              <br><br><br><br> -->
               

              <h2><i class="profile-user fa fa-user"></i> Skills</h2>
                <button class="btn btn-default float-right new-skills edit-skills" style="width: auto" type="button" name="button">New Skills</button>
                
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

        <div id="second-tab" class="tab-content">        
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
                  </div>
                  @endif
        </div>

        <div id="third-tab" class="tab-content">

                  
                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    <br><strong>Joni</strong>
                    <p>This guy is awesome!! work is always on time</p>
                  
            
                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    <br><strong>Joni</strong> Project mobile app
                    <p>This guy is awesome!! work is always on time</p>
                 
        </div>
        <div id="fourth-tab" class="tab-content">   
          <h1>Contact</h1>
          <p>Lorem ipsum dolor sit amet, utroque splendide an quo. Omnesque pertinacia efficiantur vix at, soleat quaeque assueverit et vis. Te sit tale eripuit corrumpit, cum ea case graeci legimus. Sea ex assentior honestatis adversarium. Mei ea dico meis instructior, no eum ipsum voluptatum, quodsi pertinax postulant in sed. Te eum pertinacia suscipiantur, sea eirmod sanctus ea. Vel habeo feugait ea, an apeirian adversarium nam.</p>
        </div>

    </section>  
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

  // $('#search_skills').select2({
  //     placeholder: "Choose tags...",
  //     minimumInputLength: 2,
  //     ajax: {
  //         url: '/getSkills',
  //         dataType: 'json',
  //         data: function (params) {
  //             return {
  //                 q: $.trim(params.term)
  //             };
  //         },
  //         processResults: function (data) {
  //             return {
  //                 results: data
  //             };
  //         },
  //         cache: true
  //     }
  // });
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