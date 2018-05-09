@section('style')
  <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Raleway');
</style>
@endsection
@extends('layouts.app')


@section('content')
<!-- Modal -->


<div class="backgg">
  	<div class="laptop">
		<div class="laptop_a laptop_def">
			<div class="front">
				<iframe width="400" height="225" src="https://www.youtube.com/embed/6RSmq2qV1bg?rel=0&amp;autoplay=1&amp;showinfo=0&amp;start=2" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="back"></div>
			<div class="top"></div>
		</div>
		<div class="bottom"></div>
	</div>
	<h2>What's hireITS?</h2>
	<h4>hireITS adalah website yang blablablablablablablablab untuk anak ITS yang ingin mencari uang hajajaj</h4>
</div>

<div class="howto">
	<h2>How to use hireITS?</h2>
	<div class="">
      <div class="info">
      	<div id="buttons">
    		<a class="butn green" val="maker" >I'm a job maker</a>
			<a class="butn orange" val="seeker">I'm a job seeker</a>
		</div>
         <!--  <i class="" val="maker" style="font-size:60px;" data-toggle="tooltop" title="Job Maker"></i>
          <i class="fa fa-user" val="seeker" style="font-size:60px;" data-toggle="tooltop" title="Students"></i> -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="square">
        	<h3>Sign Up</h3>
          <img src="followers.png" alt="" width="170">
          <p>Apply for a legitible account to start.</p>
        </div>
      </div>
      <div class="col-md-4 maker" >
        <div class="square">
        	<h3>Post</h3>
          	<img src="invoice.png" alt="" width="170">
          	<p>Post your projects so freelancers will be able to browse.</p>
        </div>
      </div>
      <div class="col-md-4 seeker" style="display:none">
        <div class="square">
        	<h3>Search</h3>
        	<img class="fa fa-search" aria-hidden="true" src="search.png" alt="" width="170">
          <!-- <i class="fa fa-search" aria-hidden="true" style="font-size:89px;"></i> -->
          <p>Browse freely through many projects available accustomed to your likings.</p>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="square">
        	<h3>Discuss</h3>
          <img src="chat.png" alt="" width="170">
          <p>Negotiate bids, ideas and requirements with end user.</p>
        </div>
      </div>
  </div>
</div>


@endsection

@section('script')
<script type="text/javascript">

  $('[data-toggle="tooltip"]').tooltip();

  $(".info a.green").css('opacity','1');

  $('.info a').click(function(){
  var role = $(this).attr('val');

  if(role == "seeker"){
    $(".info a.orange").css('opacity','1');
    $(".info a.green").css('opacity','0.5');
    $(".howto .maker").css('display','none');
    $(".howto .seeker").css('display','block');

  }else{
    $(".info a.orange").css('opacity','0.5');
    $(".info a.green").css('opacity','1');
    $(".howto .maker").css('display','block');
    $(".howto .seeker").css('display','none');

  }
});


</script>
@endsection
