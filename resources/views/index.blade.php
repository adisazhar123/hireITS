@section('style')
  <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Raleway');
</style>
@endsection
@extends('layouts.app')

@section('content')
  @if($errors->any())
  <h4>{{$errors->first()}}</h4>
  @endif
  <div class="highlights">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-caption highlights-title">
        <h1>WHO ARE YOU?</h1>
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
        <img class="d-block w-100">
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

</script>
@endsection
