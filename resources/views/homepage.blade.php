@extends('layouts.app')

@section('title')
  Homepage
@endsection

@php
  $homepage=1;
@endphp

@section('style')
  <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Raleway');
    .laptop {
  -webkit-perspective: 1800px;
  -moz-perspective: 1800px;
  perspective: 1800px;
  position: relative;
  top: 15em;
  margin: 0 auto;
  margin-top: -134px;
  width: 425px;
}

.laptop_a {
  position: relative;
  width: 100%;
  height: 269px;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transition: -webkit-transform .20s;
  -moz-transition: -moz-transform .20s;
  transition: transform .20s;
  animation: spin 1.5s linear;
  -webkit-animation: spin 1.5s ease-in;
  -moz-animation: spin 1.5s linear;
  -o-animation: spin 1.5s linear;
  animation-fill-mode: forwards;
  transform-origin: 100% 100%;
  left: 12px;
}

.laptop_a>div, .front>div {
  display: inline-block;
  position: absolute;
}

.front {
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-origin: 0% 50%;
  -moz-transform-origin: 0% 50%;
  transform-origin: 0% 50%;
  -webkit-transition: -webkit-transform .20s;
  -moz-transition: -moz-transform .20s;
  transition: transform .20s;
  -webkit-transform: translate3d(0, 0, 1px);
  -moz-transform: translate3d(0, 0, 1px);
  transform: translate3d(0, 0, 1px);
  z-index: 10;
  -webkit-animation: bg_n 1.5s ease-in;
  -moz-animation: bg_n 1.5s ease-in;
  -animation: bg_n 1.5s ease-in;
  animation-fill-mode: forwards
}

.front>div {
  position: absolute;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  top: 0;
  left: 0;
  background: #ccc;
}

.front, .back, .front {
  width: 400px;
  border: 2px solid #777;
  border-radius: 1em;
  padding: 1em;
}

.front iframe {
  width: 100%;
  -webkit-animation: opc 2.0s ease-in;
  -moz-animation: opc 2.0s ease-in;
  animation: opc 2.0s ease-in;
  animation-fill-mode: forwards;
  border: 1px solid rgba(0, 0, 0, 0.1);
}

.top {
  width: 434px;
  height: 2px;
  top: 11px;
}

.back {
  -webkit-transform: rotate3d(0, 1, 0, -180deg) translate3d(0, 0, 1px);
  -moz-transform: rotate3d(0, 1, 0, -180deg) translate3d(0, 0, 1px);
  transform: rotate3d(0, 1, 0, -180deg) translate3d(0, 0, 1px);
}

.top {
  -webkit-transform: rotate3d(1, 0, 0, 90deg);
  -moz-transform: rotate3d(1, 0, 0, 90deg);
  transform: rotate3d(1, 0, 0, 90deg);
}

.back {
  z-index: 1;
}

.front {
  background-color: #fff;
}

.back {
  background-color: #999;
}

.viewback {
  -webkit-transform-origin: center center;
  -webkit-transform: rotate3d(0, 1, 0, 180deg) translate3d(0, 0, 0px);
  -moz-transform: rotate3d(0, 1, 0, 180deg) translate3d(0, 0, 0px);
  transform: rotate3d(0, 1, 0, 180deg) translate3d(0, 0, 0px);
}

.backgg .bottom {
  background: #fff;
  border: 2px solid #777;
  border-radius: 0 0 1em 1em;
  content: " ";
  display: block;
  position: absolute;
  padding: 0.3em;
  left: -22px;
  top: 257px;
  z-index: 100;
  width: 465px;
  box-shadow: 0 3px 4px #DFDFDF;
}

.backgg .bottom:before {
  background: #777;
  border-radius: 0 0 0.3em 0.3em;
  content: " ";
  display: block;
  position: absolute;
  padding: 0.15em 2.45em;
  left: 43%;
  z-index: 101;
  top: 0px;
}

/* ANIM */

@keyframes spin {
  from {
    transform: rotateX(-81deg);
  }
  to {
    transform: rotateX(0deg);
  }
}

@-webkit-keyframes spin {
  from {
    -webkit-transform: rotateX(-79deg);
  }
  to {
    -webkit-transform: rotateX(0deg);
  }
}

@-moz-keyframes spin {
  from {
    -moz-transform: rotateX(-81deg);
  }
  to {
    -moz-transform: rotateX(0deg);
  }
}

@-ms-keyframes spin {
  from {
    -o-transform: rotateX(-81deg);
  }
  to {
    -o-transform: rotateX(0deg);
  }
}

@-webkit-keyframes bg_n {
  from {
    background-color: #ccc;
  }
  to {
    background-color: #fff;
  }
}

@-moz-keyframes bg_n {
  from {
    background-color: #ccc;
  }
  to {
    background-color: #fff;
  }
}

@keyframes bg_n {
  from {
    background-color: #ccc;
  }
  to {
    background-color: #fff;
  }
}

@keyframes opc {
  0% {
    opacity: 0;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 0;
  }
  85% {
    opacity: 0;
  }
  100% {
    topacity: 1;
  }
}

@-moz-keyframes opc {
  0% {
    opacity: 0;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 0;
  }
  85% {
    opacity: 0;
  }
  100% {
    topacity: 1;
  }
}

@-webkit-keyframes opc {
  0% {
    opacity: 0;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 0;
  }
  85% {
    opacity: 0;
  }
  100% {
    topacity: 1;
  }
}

/* button div */

#buttons {
  /*padding-top: 235px;*/
  text-align: center;
  align-items: center;
  position: relative;
}

.backgg h4 {
  text-align: center;
  align-items: center;
  position: relative;
}

.backgg h2 {
  padding-top: 235px;
  text-align: center;
  align-items: center;
  position: relative;
}

/* start da css for da buttons */

.butn {
  border-radius: 5px;
  padding: 15px 25px;
  font-size: 22px;
  text-decoration: none;
  margin: 20px;
  color: #fff !important;
  position: relative;
  display: inline-block;
}

.butn:hover {
  text-decoration: none;
  color: #fff !important;
}

.butn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
  color: #fff !important;
}

.green {
  background-color: #2ecc71;
  box-shadow: 0px 5px 0px 0px #15B358;
}

.green:hover {
  background-color: #48E68B;
}

.orange {
  background-color: #e67e22;
  box-shadow: 0px 5px 0px 0px #CD6509;
}

.orange:hover {
  background-color: #FF983C;
}

.backgg {
  position: relative;
  /*//background-image: url(http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-08.jpg);*/
  background-image: url(https://d39l2hkdp2esp1.cloudfront.net/img/photo/104388/104388_00_2x.jpg?20160418013135);
  background-size: cover;
  background-repeat: no-repeat;
  height: 700px;
}

.howto {
  padding: 2em;
  background: #f9f9ff;
}

.howto h2 {
  text-align: center;
  text-rendering: optimizeLegibility;
  font-size: 3em;
}

.square p {
  margin-top: 0.375rem;
  margin-bottom: 1.8rem;
  font-weight: 700;
  font-size: 1.4rem;
}

.square, .info {
  text-align: center;
}

.info i {
  margin-right: 10px;
  opacity: 0.5;
}

.info i:hover {
  cursor: pointer;
}

.info {
  padding-top: 15px;
  margin-bottom: 15px;
  color: #2242a4;
}

i {
  color: #243f8a;
}

.square:hover img {
  transform: rotate(15deg);
}



.btn-success {
  background-color: #25a08d;
  background-image: none;
  padding: 8px 50px;
  margin-top: 20px;
  border-radius: 40px;
  border: 1px solid #25a08d;
  -webkit-transition: all ease 0.8s;
  -moz-transition: all ease 0.8s;
  transition: all ease 0.8s;
}

.btn-success:focus, .btn-success:hover, .btn-success.active, .btn-success.active:hover, .btn-success:active:hover, .btn-success:active:focus, .btn-success:active {
  background-color: #25a08d;
  border-color: #25a08d;
  box-shadow: 0px 5px 35px -5px #25a08d;
  text-shadow: 0 0 8px #fff;
  color: #FFF !important;
  outline: none;
}

.info img {
  margin-right: 10px;
  opacity: 0.5;
}

.info {
  padding-top: 15px;
  margin-bottom: 15px;
  color: #2242a4;
}

i {
  color: #243f8a;
}

.single-service img{
  border-radius: 4px;
}

.thumb img{
  border-radius: 4px;
  width: 100%;
  min-height: 250px;
}

.single-service .thumb{
  min-width: 350px;
}

.hb-sm-margin{
  width: auto;
  height: auto;
}

.section-gap{
  padding: 50px 0;
}

.single-blog .dp{
  border-radius: 4px;
}

.shadow-text{
	text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
    color : white;
}

</style>
@endsection


@section('head')
	<link rel="stylesheet" href="industry/css/magnific-popup.css">

	<link rel="stylesheet" href="industry/css/hexagons.min.css">
	<link rel="stylesheet" href="industry/css/owl.carousel.css">
	<link rel="stylesheet" href="industry/css/main.css">
@endsection


@section('menu-state')
  menu-active
@endsection

@section('content')

  <div class="backgg animated fadeInUpBig">
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
    <div class="container">

      <h2><span class = "shadow-text">What's hireITS?</span></h2>
      <h4><span class = "shadow-text">hireITS is a website used as an intermediary for its student who want to make money. In this website the students will be associated to the employer who need their skills and abilities.</span></h4>
    </div>
  </div>

  <div class="howto animated fadeInDownBig">
    <div class="container">
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
          <div class="col-md-4 aa">
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
              <p>Browse freely through many projects available accustomed to your likings.</p>
            </div>
          </div>
          <div class="col-md-4 aa">
            <div class="square">
            	<h3>Discuss</h3>
              <img src="chat.png" alt="" width="170">
              <p>Negotiate bids, ideas and requirements with end user.</p>
            </div>
          </div>
      </div>
    </div>

  </div>


	<!-- Start service Area -->
	<section class="service-area section-gap " id="service ">
		<div class="container ">
			<div class="row justify-content-center ">
				<div class="col-md-12 pb-30 header-text text-center ">
					<h1 class="mb-10 ">Our Capturing Market Sectors</h1>
					<p>
						Who are in extremely love with eco friendly system..
					</p>
				</div>
			</div>
			<div class="row ">
				<div class="col-lg-4 ">
					<div class="single-service ">
						<div class="thumb ">
							<img src="https://decidigital.com/wp-content/uploads/2017/06/Responsive-Design.jpg" alt=" ">
						</div>
						<h4>Web Application</h4>
						<p>
							Our students are highly capable to build top notch dynamic and responsive web applications to support industry needs.
						</p>
					</div>
				</div>
				<div class="col-lg-4 ">
					<div class="single-service ">
						<div class="thumb ">
							<img src="https://thumbs.dreamstime.com/b/engineering-architecture-drawings-1994275.jpg" alt=" ">
						</div>
						<h4>Architecture and design</h4>
						<p>
              Our students work within a given set of parameters to solve complex design problems.  A good architect approaches this task with enthusiasm and preference to exceed expectations
              which is evident in ITS.
						</p>
					</div>
				</div>
				<div class="col-lg-4 ">
					<div class="single-service ">
						<div class="thumb ">
							<img src="https://i.ytimg.com/vi/s9inYNPStNw/maxresdefault.jpg" alt=" ">
						</div>
						<h4>3D modelling</h4>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->

	<!-- Start faq Area -->
	<section class="faq-area section-gap relative ">
		<div class="overlay overlay-bg "></div>
		<div class="container ">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-3 col-md-6 ">
					<div class="single-faq ">
						<div class="circle ">
							<div class="inner "></div>
						</div>
						<h5><span class="counter ">{{count($jobs)}}</span></h5>
						<p>
							Projects Completed
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ">
					<div class="single-faq ">
						<div class="circle ">
							<div class="inner "></div>
						</div>
						<h5><span class="counter ">{{$users}}</span></h5>
						<p>
							Total Users
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ">
					<div class="single-faq ">
						<div class="circle ">
							<div class="inner "></div>
						</div>
						<h5 class="counter ">{{count($ratings)}}</h5>
						<p>
							Happy Clients
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End faq Area -->


    	<!-- Start cat Area -->
    	<section class="cat-area section-gap" id="feature">
    		<div class="container">
    			<div class="row">
            <div class="col-md-12 pb-30 header-text text-center ">
              <h1 class="mb-10 ">Why choose hireITS?</h1>
            </div>    				<div class="col-lg-4">
    					<div class="single-cat d-flex flex-column">
    						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-md inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
    						<h4 class="mb-20" style="margin-top: 23px;">Easy and profitable</h4>
    						<p>
                  Theres just more and more people who are skillfull but cannot find the right platform to turn that skill into money. Well we have it here for you ITS students!
    						</p>
    					</div>
    				</div>
    				<div class="col-lg-4">
    					<div class="single-cat">
    						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-md inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
    						<h4 class="mt-40 mb-20">Competitiveness</h4>
    						<p>
                  We strongly believe our platform is a foundation to gather companies/ individuals with students, to expose competition exists everywhere and gets tougher by time.
                  Our hope is that it will incentify students to become proactive in wanting to find out more in any aspects.

    						</p>
    					</div>
    				</div>
    				<div class="col-lg-4">
    					<div class="single-cat">
    						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-md inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
    						<h4 class="mt-40 mb-20">It holds democracy values</h4>
    						<p>
                  What more do you hate when a system is centric to a specific user? HireITS facilitates employers to rate freelancers and vice-versa.
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- End cat Area -->

	<!-- Start feedback Area -->
	<section class="feedback-area section-gap relative " id="feedback ">
		<div class="overlay overlay-bg "></div>
		<div class="container ">
			<div class="row justify-content-center ">
				<div class="col-md-12 pb-30 header-text text-center ">
					<h1 class="mb-10 text-white ">Enjoy our Client’s Feedback</h1>
					<p class="text-white ">
						Who are in extremely love with eco friendly system..
					</p>
				</div>
			</div>
			<div class="row feedback-contents justify-content-center align-items-center ">
				<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center ">
					<div class="overlay overlay-bg "></div>
				</div>
				<div class="col-lg-6 feedback-right ">
					<div class="active-review-carusel ">
						<div class="single-feedback-carusel ">
							<div class="title d-flex flex-row ">
								<h4 class="text-white pb-10 ">Modista Garsia</h4>
								<div class="star ">
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star "></span>
									<span class="fa fa-star "></span>
								</div>
							</div>
							<p class="text-white ">
								There was time when I want to make money and that's when my friend introduce me to this website. At first I doubt it will have benfits for me, but turn out that this website is very good. I even can buy my favourite anime figure.
							</p>
						</div>
						<div class="single-feedback-carusel ">
							<div class="title d-flex flex-row ">
								<h4 class="text-white pb-10 ">Ghifaroza Rahmadiana</h4>
								<div class="star ">
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star "></span>
								</div>
							</div>
							<p class="text-white ">
								At first, I tried using this website because I felt that my skills will be wasted if its not used to make money. So, when I tried this website, the result is beyond what I expected. I have many connections and I myself, able to live with my own money.
							</p>
						</div>
						<div class="single-feedback-carusel ">
							<div class="title d-flex flex-row ">
								<h4 class="text-white pb-10 ">Adistya Azhar</h4>
								<div class="star ">
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
									<span class="fa fa-star checked "></span>
								</div>
							</div>
							<p class="text-white ">
								It's great to be able to work here. Not only you can make money yourself, you will also gain experience. There's also chance for students who have graduated to work through this website. In conclusion, use this website, there's no maybe.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- End feedback Area -->


	<!-- Start blog Area -->
	<section class="blog-area section-gap " id="blog ">
		<div class="container ">
			<div class="row justify-content-center ">
				<div class="col-md-12 pb-30 header-text ">
					<h1>Latest posts from our Showcase</h1>
				</div>
			</div>
			<div class="row ">
        @if ($showcases->isEmpty())
          <h3>Showcase is empty</h3>
        @else

          @foreach ($showcases as $showcase)
            <div class="single-blog col-lg-4 col-md-4 ">
              <div class="thumb ">
                <img class="f-img img-fluid mx-auto " src="data:{{$showcase->pic_type}};base64,{{base64_encode( $showcase->pic)}}" alt=" ">
              </div>
              <div class="bottom d-flex justify-content-between align-items-center flex-wrap ">
                <div>
                  @if ($showcase->freelancer->profilefiles)
                    @foreach ($showcase->freelancer->profilefiles as $pf)
                        <img class="img-fluid dp" src="data:{{$pf->img_type}};base64,{{base64_encode($pf->name)}}" alt=" " style="width: 35px">
                    @endforeach
                  @else
                    <img class="img-fluid dp" src="{{asset('img/avatar.png')}}" alt=" " style="width: 35px">
                  @endif
                  <a href="# "><span>{{$showcase->freelancer->username}}</span></a>
                </div>
              </div>
              <a href="# ">
                <h4>{{$showcase->title}}</h4>
              </a>
              <strong>$ {{$showcase->price}}</strong>
              <p>
                {{$showcase->description}}
              </p>
            </div>
          @endforeach

        @endif
			</div>
		</div>
	</section>
	<!-- end blog Area -->



@endsection


@section('script')
  <script src="industry/js/vendor/jquery-2.2.4.min.js "></script>
	<script src="industry/js/vendor/bootstrap.min.js "></script>
	<script src="industry/js/superfish.min.js "></script>
	<script src="industry/js/jquery.ajaxchimp.min.js "></script>
	<script src="industry/js/jquery.magnific-popup.min.js "></script>
	<script src="js/owl.carousel.min.js "></script>
	<script src="industry/js/hexagons.min.js "></script>
	<script src="industry/js/jquery.counterup.min.js "></script>
	<script src="industry/js/waypoints.min.js "></script>
	<script src="js/main2.js "></script>
  <script type="text/javascript">
    $('[data-toggle="tooltip"]').tooltip();

    $(".info a.green").css('opacity','1');

    $('.info a').click(function(){
    var role = $(this).attr('val');

    if(role == "seeker"){
      $(".info a.orange").css('opacity','1');
      $(".info a.green").css('opacity','0.5');

      $(".aa").fadeOut().css("display", "none")

      $(".howto .maker").fadeOut().css('display','none');
      $(".howto .seeker").fadeOut().css('display','none');
      $(".aa").fadeIn().css("display", "block")
      $(".howto .seeker").fadeIn().css('display','block');

    }else{
      $(".info a.orange").css('opacity','0.5');
      $(".info a.green").css('opacity','1');
      $(".howto .maker").fadeOut().css('display','none');
      $(".howto .aa").fadeOut().css("display", "none")
      $(".howto .seeker").fadeOut().css('display','none');
      $(".aa").fadeIn().css("display", "block")
      $(".howto .maker").fadeIn().css('display','block');

    }

  });

  @if(session()->has('error'))
    alertify.error('{{ session()->get('error') }}')
  @endif


</script>

@endsection
