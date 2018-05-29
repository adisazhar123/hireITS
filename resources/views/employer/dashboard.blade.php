
@section('title')
  Dashboard Employer
@endsection
@section('style')
<style type="text/css">

  .admin-panel {
   /* width: 100%;
    margin: 50px auto;*/
    background-color:#fff;
    position:relative;

  }

  .btn i{
    font-size: 18px;
    color: black !important;
  }

  .slidebar {
    width: 115px;
    background-color: #111;
      height:100%;
      position: fixed;
      z-index: 1;
      top: 65px;
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
    color:#B3B3B3
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
  body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
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

  .main1 h2 {
    margin:1em 30px;
    color:#f39c12;
    font-size: 36px;
    font-weight:600;
    /*border-bottom: 1px solid #bbb;*/
    padding: 20px 0px 10px 0px;
    text-align: center;
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
    margin-right: 3px;
    font-size: 16px;
  }

  .paid{
    font-size: 24px;
    color: green;
  }

  #tab2, #tab3{
    display: none;
  }

  .main1 .btn{
    margin-bottom: 3px;
  }

tr{
  text-align: center;
}

</style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible mt-5">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible mt-5">
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
          <li><a href="" name="tab1"><i class="fa fa fa-list"></i>My Projects</a></li>
            <li><a href="" name="tab2"><i class="fa fa fa-tasks"></i>On Going Projects</a></li>
            <li><a href="" name="tab3"><i class="fa fa-check"></i>Finished Projects</a></li>
            <!-- <li><a href="" name="tab4"><i class="fa fa-picture-o"></i>Portfolio</a></li>
            <li><a href="" name="tab6"><i class="fa fa-wrench"></i>Advanced</a></li> -->
        </ul>
    </div>
    @php
      $yu=1;
    @endphp
    <div class="main1">
      <div style="padding-bottom : 10px" id="tab1"><h2 class="header">My Projects</h2>
        <table class="table table-hover">
          @if (!count($my_projects))
            <h5 style="color:#c6c4c4; text-align: center;">No projects.</h5>
          @else
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Project name</th>
                <th scope="col">Deadline</th>
                <th scope="col">Bids</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($my_projects as $my_project)
                <tr>
                  <th scope="row">{{$yu++}}</th>
                  <td><a href="/projects/{{$my_project->slug}}">{{$my_project->name}}</a></td>
                  <td>{{date_format(date_create($my_project->deadline), "d-m-Y")}}</td>
                  <td>{{$my_project->no_of_bids}}</td>
                </tr>
              @endforeach
            </tbody>
          @endif
        </table>

      </div>
         <div id="tab2" style="padding-bottom : 10px"><h2 class="header">On Going Projects</h2>
           <table class="table table-hover">
             @if (!count($projects)>0)
               <h5 style="color:#c6c4c4; text-align: center;">No ongoing projects.</h5>
             @else
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Project name</th>
                   <th scope="col">Deadline</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 @php
                   $ni=1;
                 @endphp
                 @foreach ($projects as $project)
                   <tr>
                     <th scope="row">{{$ni++}}</th>
                     <td><a href="/projects/{{$project->slug}}">{{$project->name}}</a></td>
                     <td>{{date_format(date_create($project->deadline), "d-m-Y")}}</td>
                     <td><button class="btn btn-info mr-3 update-progress" job-id="{{$project->job_id}}">Update Progress</button><button job-id="{{$project->job_id}}" class="btn btn-warning view-history mr-3">View History</button><button class="btn btn-primary pay-freelancer" freelancer-id="{{$project->won_by_id}}" job-id="{{$project->job_id}}">Pay freelancer</button></td>
                   </tr>
                 @endforeach

               </tbody>
             @endif
           </table>
           @php
             $no=1;
           @endphp
         </div>
         <div id="tab3" style="padding-bottom : 10px"><h2 class="header">Finished Projects</h2>
           <table class="table table-hover">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Project name</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($finished_projects as $project)
                 <tr>
                   <th scope="row">{{$no++}}</th>
                   <td><a href="/projects/{{$project->slug}}">{{$project->name}}</a></td>

                   @if ($project->has_review == 1 || $project->has_review == 3)
                     <td><button job-id="{{$project->job_id}}" class="btn btn-nectarine view-history mr-3">View History</button><button class="btn btn-june mr-3"><i class="fa fa-check-square-o paid" aria-hidden="true"> Paid</i></button><button class="btn btn-june mr-3"><i class="fa fa-check-square-o paid" aria-hidden="true"> Rated </i></button></td>
                   @else
                     <td><button job-id="{{$project->job_id}}" class="btn btn-nectarine view-history mr-3">View History</button><button class="btn btn-june mr-3"><i class="fa fa-check-square-o paid" aria-hidden="true"> Paid</i></button><button job-id="{{$project->job_id}}" freelancer-id="{{$project->freelancer_id}}" class="btn btn-primary rate-freelancer mr-3">Rate freelancer</button></td>

                   @endif
                 </tr>
               @endforeach
             </tbody>
           </table>
         </div>
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
            <form class="" action="{{route('send.progress.employer')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

            <div class="col-md-12">
              Comments for freelancer

              <div class="form-group">
                <textarea required name="msg_text" rows="5" cols="49"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                Attachments
                <input type="file" name="progress_file" id="fileToUpload" style="text-align: center">

              </div>
            </div>
          </div>
          <div class="form-group" style="text-align:center; margin-top : 5px;">
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
  <div class="modal payment animated fadeIn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>All payment is done through paypal.</h4>
        <p>PayPal lets you quickly and securely send and receive money for goods, services and more. At PayPal, your financial security is our highest priority. We use the latest anti-fraud technology to help make sure your transactions are safer and you’re 100% protected against unauthorized payments sent from your account.</p>
        <div class="warning">

        </div>
        <div class="details">

        </div>
      </div>
      <div class="modal-footer">
        Click on the checkout button to reward your freelancer for their hardwork.
        <div id="paypal-button-container"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal rate animated fadeIn" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Rate freelancer</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="form-rating" action="{{route('rate.freelancer')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="stars">How many stars?</label>
          <input type="hidden" id="stars" name="stars" value="">
          <input type="hidden" id="rate_to_id" name="rate_to_id" value="">
          <input type="hidden" id="rate_job_id" name="rate_job_id" value="">
          <div class="stars">
            <i class="fa fa-star s1" star-id='1' aria-hidden="true"></i><i class="fa fa-star s2" star-id='2' aria-hidden="true"></i><i class="fa fa-star s3" star-id='3' aria-hidden="true"></i><i star-id='4' class="fa fa-star s4" aria-hidden="true"></i>
            <i class="fa fa-star s5" star-id='5' aria-hidden="true"></i>
          </div><small>If you are pleased with the freelancer's work, give them 4-5 stars.</small>
        </div>
        <div class="form-group">
          <textarea name="comment" required id="comment" class="form-control" rows="8" cols="80"></textarea>
        </div>
        <button class="btn btn-exodus" type="submit" name="button">Submit</button>
      </form>
    </div>
    <div class="modal-footer">

    </div>
  </div>
</div>
</div>
</div>


@endsection

@section('script')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script type="text/javascript">

  var id;  var freelancer_id;


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
        alertify.error("System error. Please contact technical support.")
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
        alertify.error("System error. Please contact technical support.")
      }
    })
  })


  $(document).on('click','.pay-freelancer', function(){

    job_id = $(this).attr('job-id');
    id=job_id;
    freelancer_id = $(this).attr('freelancer-id');
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $.ajax({
      url: '{{route('get.payment.details')}}',
      method: "POST",
      data: {job_id: job_id, freelancer_id: freelancer_id},
      success: function(data){
        $(".payment .warning").html("");
        if(!data[1])
          $(".payment .warning").html("<div class='alert alert-danger'>This user hasn't set up their paypal account.</div>");
        $(".payment .details").html("<p><strong>You have $"+ data[0] + " due to pay.</strong></p>")
        $('.payment').modal('show')
      },
      error: function(){
        alertify.error("System error. Please contact technical support.")
      }
    })
  })

  $(document).on('click', '.rate-freelancer', function(){
    $("#rate_to_id").val($(this).attr('freelancer-id'))
    $("#rate_job_id").val($(this).attr('job-id'))
    $(".rate").modal('show')
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
      alert("Please give a star rating and comment.");
      return false;
    }

  })

});
</script>

<script>
  paypal.Button.render({
        env: 'sandbox',
        client: {
            sandbox:    'AXQng1S57K1sm5SMXOdmlnKC_Yy72kVz4Ot4jvZK64wGIOWoxO-YwJMjBX5bNaEA6qFZE9McM0sB6iXz'
        },
        commit: true,

        payment: function(data, actions) {
          var CREATE_PAYMENT_URL = '{{route('create')}}';
          return paypal.request({
              method: 'post',
              url: CREATE_PAYMENT_URL,
              headers: {
                  'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
              },
              data: {freelancer_id: freelancer_id, id:id}
          }).then(function(data) {
              return data.id;
          });

        },
        onAuthorize: function(data) {
        var EXECUTE_PAYMENT_URL ='{{route('execute')}}';


        paypal.request.post(EXECUTE_PAYMENT_URL,
          { paymentID: data.paymentID, payerID: data.payerID, freelancer_id:freelancer_id, id: id},
          {headers:
            {'x-csrf-token': $('meta[name="csrf-token"]').attr('content')}
          })
          .then(function(data) {
            alertify.success('Payment successful!');
            console.log(data)
            window.location.reload(true);
        })
        .catch(function(err) {
          alertify.error(err);
      });
    },

    onCancel: function(data, actions) {
      alertify.error('Payment canceled!');
    }

    }, '#paypal-button-container');


    $(document).on('mousemove', function(e){
      if(e.pageX<=100)
        $(".slidebar").css("width", "115px")
        else{
          $(".slidebar").css("width", "0px")
        }
    })


  </script>

@endsection
