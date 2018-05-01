@section('style')
  <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Raleway');


  .highlights img{
    height: 630px !important;
  }

  .highlights-title{
    padding-bottom: 100px !important;
  }

  .btn-seeker{
    font-weight: bold;
    font-size: 20px;
    background-color: orange;
    height: 60px;
    width: 200px;
  }

  .btn-maker{
    font-weight: bold;
    font-size: 20px;
    background-color: transparent;
    border-color: white;
    border-width: medium;
    height: 60px;
    width: 200px;
  }

  .btn-maker:hover{
    background-color: rgba(0, 0, 0, 0.2);
}

  .btn-seeker:hover{
    background-color: #f18903;
  }

  .sign-up{
    background-color: #f0f0f0;
    height: 60px;
    text-align: center;
    padding-top: 20px;
  }

  .sign-up a{
    text-decoration: none;
  }

  .square, .info{
    text-align: center;
  }

  .info i{
    margin-right: 10px;
    opacity: 0.5;
  }

  .info i:hover{
    cursor: pointer;
    transform: scale(1.1);
  }

  .info{
    padding-top: 15px;
    margin-bottom: 15px;
    color: #2242a4;
  }
  i{
    color: #243f8a;
  }

  .square:hover{
    transform: scale(1.05);
  }


  @media only screen and (max-width: 990px) {

    .highlights img{
      min-height: 0px !important;
    }
  }

  @media only screen and (max-width: 768px) {

    .highlights .btn{
      margin-bottom: 10px;
    }

    .highlights img{
      height: 450px !important;
    }
    .carousel-item .carousel-caption{
      margin-bottom: 150px !important;
    }


    .navbar-brand {
      padding-left: 10px;
    }
    .sign-up{
      height: 75px;

    }

  }

</style>
@endsection
@extends('layouts.app')

@section('content')
  @if($errors->any())
  <h4>{{$errors->first()}}</h4>
  @endif
  <div class="highlights">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-caption highlights-title">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6">
            <button type="button" class="btn btn-seeker" name="button">I am a job seeker</button>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6">
             <button type="button" class="btn btn-maker" name="button">I am a job maker</button>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://images.pexels.com/photos/276267/pexels-photo-276267.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="First slide">
        <div class="carousel-caption" style="margin-bottom: 300px; color: black; text-transform: uppercase;">
          <h3>“There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for.”</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://images.pexels.com/photos/574073/pexels-photo-574073.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://images.pexels.com/photos/545053/pexels-photo-545053.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Third slide">
      </div>
    </div>

  </div>
</div>
<div class="sign-up">
  <a href="#">Are you an ITS student, talented and would love to make some side earnings? </a>
</div>
<div class="container">
  <div class="how-to-use">
    <div class="">
      <div class="info">
        <h3>How to use hireITS?</h3>
          <i class="fa fa-suitcase" val="maker" style="font-size:60px;" data-toggle="tooltop" title="Job Maker"></i>
          <i class="fa fa-user" val="seeker" style="font-size:60px;" data-toggle="tooltop" title="Students"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="square">
          <img src="https://locale.fastwork.co/wp-content/uploads/2018/02/download-3.svg" alt="">
          <p>Sign Up</p>
          <p>Apply for a legitible account to start.</p>
        </div>
      </div>
      <div class="col-md-4 maker" >
        <div class="square">
          <img src="https://locale.fastwork.co/wp-content/uploads/2018/02/download-2.svg" alt="">
          <p>Post</p>
          <p>Post your projects so freelancers will be able to browse.</p>
        </div>
      </div>
      <div class="col-md-4 seeker" style="display:none">
        <div class="square">
          <i class="fa fa-search" aria-hidden="true" style="font-size:89px;"></i>
          <p>Search</p>
          <p>Browse freely through many projects available accustomed to your likings.</p>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="square">
          <img src="https://locale.fastwork.co/wp-content/uploads/2018/02/download-1.svg" alt="">
          <p>Discuss</p>
          <p>Negotiate bids, ideas and requirements with end user.</p>
        </div>
      </div>
  </div>

  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">

  $(".btn-seeker").click(function(){
  alert("seeker");
  });
  $(".btn-maker").click(function(){
  alert("maker");
  });

  $('[data-toggle="tooltip"]').tooltip();

  $(".info i.fa-suitcase").css('opacity','1');

  $('.info i').click(function(){
  var role = $(this).attr('val');

  if(role == "seeker"){
    $(".info i.fa-user").css('opacity','1');
    $(".info i.fa-suitcase").css('opacity','0.5');
    $(".how-to-use .maker").css('display','none');
    $(".how-to-use .seeker").css('display','block');

  }else{
    $(".info i.fa-user").css('opacity','0.5');
    $(".info i.fa-suitcase").css('opacity','1');
    $(".how-to-use .maker").css('display','block');
    $(".how-to-use .seeker").css('display','none');

  }
  });
  $('.carousel').carousel({
    interval: 2500
  })

</script>
@endsection
