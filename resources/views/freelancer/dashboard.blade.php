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
    width: 150px;
    position: fixed;
    z-index: 1;
    top: 45px;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}
.slidebar ul {
  position:relative;
  height:100%;
}

.slidebar a{
  color: #bbb;
  text-decoration:none;
}
.slidebar li{
  text-align:center;
  padding: 0x 0px;
}

.slidebar ul {
  padding: 0;
  margin:0;
}
.slidebar li {
  list-style-type: none;
  margin: 0;
  position: relative;
  text-align:center;
  color:#B3B3B3
}
.slidebar i {
  display:block;
  text-align:center;
  color:#B3B3B3;
  font-size: 40px;
  margin-bottom: 8px;
}

.slidebar ul a {
  color:#B3B3B3;
  text-decoration: none;
  box-sizing:border-box;
  display: block;
  text-transform: capitalize;
  padding: 20px;
}
.slidebar li:hover a, li#active{
  background-color: #313131;
}
.slidebar li:hover i, li#active i{
  color: #17BCE8;
}
.slidebar li:focus i {
  color: #17BCE8;
}

.main1 {
  width: 85%;
  background-color: rgb(255,255,255);
  position: relative;
  padding-left: 160px;

}

.main1 h2 {
  margin:1em 30px;
  color:#17BCE8;
  font-size: 20px;
  font-weight:600;
  border-bottom: 1px solid #bbb;
  padding: 0px 0px 10px 0px;
}

table{
  width: 100%;
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


</style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
  </div>

<div class="container admin-panel">
    <div class="slidebar">
        <ul>
            <li><a href="" name="tab2"><i class="fa fa fa-tasks"></i>On Going Projects</a></li>
            <li><a href="" name="tab3"><i class="fa fa-check"></i>Finished Projects</a></li>
            <!-- <li><a href="" name="tab4"><i class="fa fa-picture-o"></i>Portfolio</a></li>
            <li><a href="" name="tab6"><i class="fa fa-wrench"></i>Advanced</a></li> -->
        </ul>
    </div>

    <div class="main1">
         <div id="tab2"><h2 class="header">On Going Projects</h2>
           <table class="table table-hover">
             @if (!count($projects)>0)
               <h3>No ongoing projects</h3>
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
                 <th scope="row">1</th>
                 <td><a href="/projects/{{$project->slug}}">{{$project->name}}</a></td>
                 <td>{{date_format(date_create($project->deadline), "d-m-Y")}}</td>
                 <td><button class="btn btn-info mr-3 update-progress" job-id="{{$project->job_id}}">Update Progress</button><button job-id="{{$project->job_id}}" class="btn btn-warning view-history">View History</button></td>
               </tr>
             </tbody>

             @endforeach
             @endif



           </table>

         </div>
         <div id="tab3"><h2 class="header">Finished Projects</h2></div>
         <!-- <div id="tab4"><h2 class="header">Portfolio</h2></div>
         <div id="tab5"><h2 class="header">Blog /news</h2></div>
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
                Attachments
                <input type="file" name="progress_file" id="fileToUpload">
              </div>
            </div>

          </div>
          <div class="form-group">
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
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
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

  /*$(document).on('mousemove', function(e){
    if(e.pageX<=250)
      document.getElementByClas("slidebar").style.width = "250px";
      else{
        document.getElementById("mySidenav").style.width = "0px";

      }
  })*/

  $(".update-progress").click(function(){
    $(".modal.progress2").modal('show')
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
        $(".modal.discussion-history").modal('show')
        console.log(data)
      },
      error: function(data){
        console.log(data)
        console.log("Ajax Error - get message details")
      }
    })
  })

});
</script>
@endsection
