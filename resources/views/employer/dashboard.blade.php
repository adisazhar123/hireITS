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
    width: 10px;
    position: fixed;
    z-index: 1;
    top: 65px;
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

ul {
  padding: 0;
  margin:0;
}
li {
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
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Project name</th>
                 <th scope="col">Deadline</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($projects as $project)
                 <tr>
                   <th scope="row">1</th>
                   <td><a href="/projects/{{$project->slug}}">{{$project->name}}</a></td>
                   <td>{{date_format(date_create($project->deadline), "d-m-Y")}}</td>
                   <td><button class="btn btn-info mr-3 update-progress" job-id="{{$project->job_id}}">Update Progress</button><button job-id="{{$project->job_id}}" class="btn btn-warning view-history">View History</button></td>
                 </tr>
               @endforeach

             </tbody>
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
          <h5 class="modal-title">Update feedback</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <form class="" action="{{route('send.progress.employer')}}" method="post">
              {{ csrf_field() }}

            <div class="col-md-12">
              Comments for freelancer

              <div class="form-group">
                <textarea name="msg_text" rows="5" cols="65">              </textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                Attachments
                <input class="form-control" type="file" name="" value="">

              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success" name="button">Send to freelancer</button>

          </div>
          <input type="hidden" id="job_id" name="job_id" value="">
          <input type="hidden" id="from_id" name="from_id" value="{{Auth::user()->id}}">
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
      url: '{{route('get.job.details.employer')}}',
      data: {job_id: job_id},
      success: function(data){
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
      url: '{{route('get.messages.employer')}}',
      data: {job_id: job_id},
      success: function(data){
        for(var i=0; i<data[0].length; i++){
          if (data[0][i].from_id == data[1].freelancer_id){
            content  += "<div class='card message-me'><div class=card-body>"+data[0][i].msg_text+"<br><small>Progress: "+data[0][i].progress+"%</small><br><small>"+data[1].freelancer_name+"</small>"+"</div></div>";
          }else if (data[0][i].from_id == data[1].employer_id){
            content  += "<div class='card message-end'><div class=card-body>"+data[0][i].msg_text+"<br><small>"+data[1].employer_name+"</small></div></div>";
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
