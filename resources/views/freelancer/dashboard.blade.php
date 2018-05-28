@section('style')
<style type="text/css">

  .admin-panel {
    width: 100%;
    margin: 50px auto;
    overflow: hidden;
    background-color:#fff;
    position:relative;

  }

  .slidebar {
    background-color: #111;
      height:100%;
      width: 115px;
      position: fixed;
      z-index: 1;
      top: 45px;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
      -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }
  .slidebar ul {
    position:relative;
    height:100%;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }

  .slidebar a{
    color: #bbb;
    text-decoration:none;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }
  .slidebar li{
    text-align:center;
    padding: 0x 0px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }

  .slidebar ul {
    padding: 0;
    margin:0;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }
  .slidebar li {
    list-style-type: none;
    margin: 0;
    position: relative;
    text-align:center;
    color:#B3B3B3;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }
  .slidebar i {
    display:block;
    text-align:center;
    color:#B3B3B3;
    font-size: 40px;
    margin-bottom: 8px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }

  .slidebar ul a {
    color:#B3B3B3;
    text-decoration: none;
    box-sizing:border-box;
    display: block;
    text-transform: capitalize;
    padding: 20px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }
  .slidebar li:hover a, li#active{
    background-color: #313131;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;

  }
  .slidebar li:hover i, li#active i{
    color: #17BCE8;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }
  .slidebar li:focus i {
    color: #17BCE8;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
  }

  .main1 {
    width: 85%;
    background-color: rgb(255,255,255);
    position: relative;
    padding-left: 160px;

  }

  body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
  }

  .main1 h2 {
    margin:1em 30px;
    color:#f39c12;
    font-size: 36px;
    font-weight:600;
    border-bottom: 1px solid #bbb;
    padding: 0px 0px 10px 0px;
  }

  table{
    width: 100%;
    margin:1em 30px;
  }

  .message-me{
    width: 100%;
    border-color: green;
    margin-bottom: 5px;
  }

  .message-end{
    width: 100%;
    border-color: blue;
    margin-bottom: 5px;

  }

  .discussion-history .modal-content{
    width: auto;
  }

  .discussion-history .modal-body{
    justify-content: center;
  }

  .discussion-history .modal-dialog{
      overflow-y: initial !important;
      top: 20%;
  }
  .discussion-history .modal-body{
      height: 250px;
      overflow-y: auto;
  }

  .stars i{
    color: #FFFFAA;
  }
  #tab2, #tab3, #tab4{
    display: none;
  }

  @media only screen and (max-width: 989px) {
    .slidebar{
      width: 0px;
    }
  }

  #search_skills{
    width: 100%;

  }
  span.select2.select2-container{
    width: 100%;

  }


</style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
    <br>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible">
            {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
        </div>
    @endif
  </div>

<div class="container admin-panel">
    <div class="slidebar animated fadeIn">
        <ul>
            <li><a href="" name="tab1"><i class="fa fa fa-list"></i>My Bids</a></li>
            <li><a href="" name="tab2"><i class="fa fa fa-tasks"></i>On Going Projects</a></li>
            <li><a href="" name="tab3"><i class="fa fa-check"></i>Finished Projects</a></li>
            <li><a href="" name="tab4"><i class="fa fa-gift"></i>My Showcases</a></li>
        </ul>
    </div>

    @php
      $no=1;
    @endphp

    <div class="main1">
           <div id="tab1"><h2 class="header">My Bids</h2>
             <table class="table table-hover">
              @if (!count($my_bids)>0)
                 <h5 style="font-size : 20px; margin:1em 30px;">No bids</h5>
              @else
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                @foreach ($my_bids as $my_bid)
               <tbody>
                 @if (!isset($my_bid->job->wonby[0]->won_by_id) && empty($my_bid->job->wonby[0]->won_by_id))
                   <tr>
                     <th scope="row">{{$no++}}</th>
                     <td><a href="/projects/{{$my_bid->job->slug}}">{{$my_bid->job->name}}</a></td>
                     @if ($my_bid->job->active)
                       <td><button type="button" name="button" class="btn btn-eagle"><i class="fa fa-clock-o" aria-hidden="true"> Pending</i></button></td>
                     @else
                       <td><button type="button" name="button" class="btn btn-glamour"><i class="fa fa-times" aria-hidden="true"> Lost</i></button></td>
                     @endif
                   </tr>
                 @endif
              </tbody>
              @endforeach
              @endif

             </table>

           </div>
@php
  $ha=1;
@endphp
         <div id="tab2"><h2 class="header">On Going Projects</h2>
           <table class="table table-hover">
             @if (!count($projects)>0)
               <h3 style="font-size : 20px; margin:1em 30px;">No ongoing projects</h3>
             @else
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Project name</th>
                   <th scope="col">Deadline</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               @foreach ($projects as $project)
              <tbody>
               <tr>
                 <th scope="row">{{$ha++}}</th>
                 <td><a href="/projects/{{$project->slug}}">{{$project->name}}</a></td>
                 <td>{{date_format(date_create($project->deadline), "d-m-Y")}}</td>
                 <td><button class="btn btn-info mr-3 update-progress" job-id="{{$project->job_id}}">Update Progress</button><button job-id="{{$project->job_id}}" class="btn btn-nectarine view-history">View History</button></td>
               </tr>
             </tbody>

             @endforeach
             @endif

           </table>

         </div>
         @php
           $he=1;
         @endphp
         <div id="tab3"><h2 class="header">Finished Projects</h2>
           <table class="table table-hover">
             @if (!count($finished_projects))
               <h5 style="font-size : 20px; margin:1em 30px;">You haven't finished any projects yet.</h5>
             @else
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Project name</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
                 @foreach ($finished_projects as $project)

                   <tbody>
                   <tr>
                     <th scope="row">{{$he++}}</th>
                     <td><a href="/projects/{{$project->slug}}">{{$project->name}}</a></td>
                     @if ($project->has_review == 3 || $project->has_review == 2)
                       <td><button job-id="{{$project->job_id}}" class="btn btn-nectarine view-history mr-3 mb-2">View History</button><button class="btn btn-june mr-3 mb-2"><i class="fa fa-check-square-o paid" aria-hidden="true"> Payment received</i></button><button class="btn btn-june mb-2"><i class="fa fa-check-square-o paid" aria-hidden="true"> Employer Rated </i></button></td>
                     @else
                       <td><button job-id="{{$project->job_id}}" class="btn btn-nectarine view-history mr-3 mb-2">View History</button><button class="btn btn-june mr-3 mb-2"><i class="fa fa-check-square-o paid" aria-hidden="true"> Payment received</i></button><button job-id="{{$project->job_id}}" employer-id="{{$project->employer_id}}" class="btn btn-primary rate-employer mb-2">Rate employer</button></td>
                     @endif
                   </tr>
                 @endforeach
             @endif
             </tbody>
           </table>
         </div>
         @php($ka=1)
         <div id="tab4"><h2 class="header">My Showcases</h2>
           <button class="btn btn-middle mb-3" type="button" name="button" style="float: right" id="add-showcase">Add showcase</button>
           <table class="table table-hover">

               @if (!count($showcases))
                 <h5 style="font-size : 20px; margin:1em 30px;">Showcase is empty</h5>
                @else
                 <h5 style="font-size : 20px; margin:1em 30px;">Post your showcase</h5>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Showcase name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  @foreach ($showcases as $showcase)

                    <tbody>
                    <tr>
                      <th scope="row">{{$ka++}}</th>
                      <td>{{$showcase->title}}</td>
                      <td>
                        <form action="{{route('delete.showcase')}}" method="post">
                          {{method_field('delete')}}
                          {{csrf_field()}}
                          <input type="hidden" name="showcase_id" value="{{$showcase->showcase_id}}">
                          <button class="btn btn-glamour" type="submit">Delete</button></td>
                        </form>
                    </tr>
                  @endforeach
               @endif
             </tbody>
           </table>
         </div>
         <!--<div id="tab5"><h2 class="header">Blog /news</h2></div>
         <div id="tab6"><h2 class="header">Advanced</h2></div>    -->
    </div>


</div>

<div class="container">
  <div class="modal progress2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update progress</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <form class="" action="{{route('send.progress')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="">Progress rate</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="25" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    25%
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="50">
                  <label class="form-check-label" for="exampleRadios2">
                    50%
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="75">
                  <label class="form-check-label" for="exampleRadios3">
                    75%
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="100">
                  <label class="form-check-label" for="exampleRadios4">
                    100% (complete)
                  </label>
                </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-12">Comments for employer <br>
              <textarea class="form-control" name="msg_text" rows="10" cols="10">

              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
              <br />
                Attachments
                <input type="file" name="progress_file" id="fileToUpload">
              </div>
            </div>

          </div>
          <div class="form-group" style="text-align:center">
            <button type="submit" class="btn btn-success" name="button">Send to employer</button>

          </div>
          <input type="hidden" id="job_id" name="job_id" value="">
          <input type="hidden" id="from_id" name="from_id" value="{{Auth::user()->id}}">
          <input type="hidden" id="to_id" name="to_id" value="">
        </form>

        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="modal discussion-history animated fadeIn" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Discussion History</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card message-freelancer">
              <div class="card-body">
                Name:
                Progress: 25%
                <p>Message is</p>
                File:
              </div>
            </div>
            <div class="card message-employer">
              <div class="card-body">
                Name
                <p>Message is: Nice</p>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal rate animated fadeIn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Rate employer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-rating" action="{{route('rate.employer')}}" method="POST" id="rating-form">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="stars">How many stars?</label>
            <input type="hidden" id="stars" name="stars" value="">
            <input type="hidden" id="rate_to_id" name="rate_to_id" value="">
            <input type="hidden" id="rate_job_id" name="rate_job_id" value="">
            <div class="stars">
              <i class="fa fa-star s1" star-id='1' aria-hidden="true"></i><i class="fa fa-star s2" star-id='2' aria-hidden="true"></i><i class="fa fa-star s3" star-id='3' aria-hidden="true"></i><i star-id='4' class="fa fa-star s4" aria-hidden="true"></i>
              <i class="fa fa-star s5" star-id='5' aria-hidden="true"></i>
            </div><small>If you are pleased with the employer's directions, give them 4-5 stars.</small>
          </div>
          <div class="form-group">
            <textarea name="comment" required id="comment" class="form-control" rows="8" cols="80"></textarea>
          </div>
          <button type="submit" class="btn btn-exodus" name="button" style="width: 100%">Submit</button>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
  </div>
  <div class="modal showcase" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Showcase</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" id="addShowcase" action="{{route('post.showcase')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="title">Showcase title</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
              </div>
              <input type="text" name="title" required class="form-control" id="title" placeholder="Enter showcase title">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Showcase description</label>
            <textarea required class="form-control" name="description" id="description" placeholder="Describe what you are able to offer"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Showcase price</label>
            <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input class="form-control" id="user-price" required type="number" name="showcase_price" placeholder="How much does it cost?">
             </div>
          </div>

            <div class="form-group">
              <label for="tag_list">Tags:</label>
              <select class="form-control col-md-12" style="width: 100%" required id="search_skills" name="search_skills[]" multiple></select>
            </div>

          <div class="form-group ">
            <label for="pic">Showcase picture</label>
            <div class="form-group">
              <input type="file" name="picture" required value="">
            </div>
          </div>
          <button type="submit" class="btn btn-exodus" style="width:100%">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {

      $(document).on('click', '.rate-employer', function(){
        $("#rate_to_id").val($(this).attr('employer-id'))
        $("#rate_job_id").val($(this).attr('job-id'))
        $(".rate").fadeIn().modal('show')
      })

        $(".stars i").click(function(){
          if ($(this).attr('star-id')==1){
            $('.s1').css('color', '#FFAA2A');
            $('.s2').css('color', '#FFFFAA');
            $('.s3').css('color', '#FFFFAA');
            $('.s4').css('color', '#FFFFAA');
            $('.s5').css('color', '#FFFFAA');
            $("#stars").val("1")
          }

          else if ($(this).attr('star-id')==2){
            $('.s1').css('color', '#FFAA2A');
            $('.s2').css('color', '#FFAA2A');
            $('.s3').css('color', '#FFFFAA');
            $('.s4').css('color', '#FFFFAA');
            $('.s5').css('color', '#FFFFAA');
            $("#stars").val("2")
          }
          else if ($(this).attr('star-id')==3){
            $('.s1').css('color', '#FFAA2A');
            $('.s2').css('color', '#FFAA2A');
            $('.s3').css('color', '#FFAA2A');
            $('.s4').css('color', '#FFFFAA');
            $('.s5').css('color', '#FFFFAA');
            $("#stars").val("3")
          }
          else if ($(this).attr('star-id')==4){
            $('.s1').css('color', '#FFAA2A');
            $('.s2').css('color', '#FFAA2A');
            $('.s3').css('color', '#FFAA2A');
            $('.s4').css('color', '#FFAA2A');
            $('.s5').css('color', '#FFFFAA');
            $("#stars").val("4")
          }
          else if ($(this).attr('star-id')==5){
            $('.s1').css('color', '#FFAA2A');
            $('.s2').css('color', '#FFAA2A');
            $('.s3').css('color', '#FFAA2A');
            $('.s4').css('color', '#FFAA2A');
            $('.s5').css('color', '#FFAA2A');
            $("#stars").val("5")
          }
        })

        $(".form-rating").submit(function(){
          if ($("#stars").val()=="" || $("#comment").val()=="" ){
            alertify.error("Please give a star rating and comment.")
            return false;
          }

        })

  $(".main1 div").hide();

  $(".slidebar li:first").attr("id","active");

  $(".main1 div:first").fadeIn();


  $('.slidebar a').click(function(e) {
      e.preventDefault();
     if ($(this).closest("li").attr("id") == "active"){
       return
     }else{
       $(".main1 div").hide();
        $(".slidebar li").attr("id","");
        $(this).parent().attr("id","active");
        $('#' + $(this).attr('name')).fadeIn();
        }
  });

  $(document).on('mousemove', function(e){
    if(e.pageX<=100)
      $(".slidebar").css("width", "115px")
      else{
        $(".slidebar").css("width", "0px")
      }
  })

  $(".update-progress").click(function(){
    $(".modal.progress2").fadeIn().modal('show')
  })
  $(".view-history").click(function(){
  })

  $(document).on('click','.update-progress', function(){
    var job_id = $(this).attr('job-id')

    $.ajax({
      url: '{{route('get.job.details')}}',
      data: {job_id: job_id},
      success: function(data){
        $("#to_id").val(data.employer_id)
        $("#job_id").val(data.job_id)
        console.log(data)
      },
      error: function(data){
        console.log(data)
        console.log("Ajax Error - get job details")
      }
    })

  });

  $(document).on('click', '.view-history', function(){
    var job_id = $(this).attr('job-id');
    var content ="";
    $.ajax({
      url: '{{route('get.messages.freelancer')}}',
      data: {job_id: job_id},
      success: function(data){
        if (data == "No message")
          content  += "<div class='card message-me'><div class=card-body>"+data+"</div></div>";
          else{
            for(var i=0; i<data[0].length; i++){
              if (data[0][i].from_id == data[1].freelancer_id){
                if (data[0][i].file_type!=null) {
                  content  += "<div class='card message-me'><div class=card-body>"+data[0][i].msg_text+"<br><a href=/project/messages/download-file/"+data[0][i].msg_id+">Download attachment</a><br><small>Progress: "+data[0][i].progress+"%</small><br><small>"+data[1].freelancer_name+"</small>"+"</div></div>";
                }
                else content  += "<div class='card message-me'><div class=card-body>"+data[0][i].msg_text+"<br><small>Progress: "+data[0][i].progress+"%</small><br><small>"+data[1].freelancer_name+"</small>"+"</div></div>";
              }else if (data[0][i].from_id == data[1].employer_id){
                if (data[0][i].file_type!=null) {
                  content  += "<div class='card message-end'><div class=card-body>"+data[0][i].msg_text+"<br><a href=/project/messages/download-file/"+data[0][i].msg_id+">Download attachment</a><br><small>"+data[1].employer_name+"</small></div></div>";
                }
                else {
                  content  += "<div class='card message-end'><div class=card-body>"+data[0][i].msg_text+"<br><small>"+data[1].employer_name+"</small></div></div>";

                }
              }
            }
          }

        $(".discussion-history .modal-body").html(content)
        $(".modal.discussion-history").fadeIn().modal('show')
        console.log(data)
      },
      error: function(data){
        console.log(data)
        console.log("Ajax Error - get message details")
      }
    })
  })

  $("#add-showcase").click(function(){
    $(".modal.showcase").fadeIn().modal('show')
  })

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

    //$("#addShowcase").submit(function())

    var mySkills = [];
    var skills = $("#search_skills").select2('data')
    console.log(skills)
    for(var i=0; i<skills.length; i++)
      mySkills.push(skills[i].id)


});
</script>
@endsection
