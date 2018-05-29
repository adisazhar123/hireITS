
@section('title')
  Top Users
@endsection

@section('style')
<style media="screen">
.main-container{
  max-height: 60vh !important;
}

.container{
	text-align: center;
}
body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
}

.garis{
	width : 1050px;
	height : 1px;
	margin-top : 20px;
	margin-bottom : 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.user{
	background-color : #f9f9f9;
	border-radius : 10px;
	width: 100%;
	position: relative;
	min-height: 200px;
	margin-bottom: 20px;

}

.user:hover{
    box-shadow: 2px 2px 10px #81827c;
		transition: transform 0.5s ease;
		transform: scale(1.1);
}

.user h1{
	float:left;
	margin-left : 20px;
	color : black;
}

.detail{
	position: absolute;
	padding: 20px;
	top: 15%;
}

.detail p{
	font-size: 14px;
}

.fa{
	color: #FFAA8A;
}



.overlay {
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 10px;
  text-align: center;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	bottom: 0;
	position: absolute;
}

.user:hover .overlay {
  opacity: 1;
}

.picture{
	max-width: 150px;
	float: right;
	padding: 10px;
}

.picture img{
	border-radius: 5px;
}

.backround{
	padding-top: 300px;
}
  .title{
    margin-top: -250px;
    text-align: center;
    font-weight: bold;
  }

hr {
	overflow: visible;
	width: 60vw;
	margin: 50px auto;
	height: 0px;
	border: none;
	border-top: 8px solid #f39c12;
	text-align: center;
}

hr:after {
	content:"\f005";
	font-family: FontAwesome;
	font-size: 64px;
	position: relative;
	top: -.8em;
	background: rgba(0, 0, 0, 0);
	color: #f1c40f;
}
</style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="backround">

  </div>
  <div class="title">
    <div class="container">
      <h1> Top Users</h1>
      <hr>
      <br><br>
    </div>
  </div>

	<div class="container">
			<div class="freelancer">
				<h2>Freelancer</h2>
				<div class="row" style="text-align: center !important;">
					@if (!count($top_freelancers))
						<h5 style="color:#c6c4c4">No top freelancers yet.</h5>
					@else
						@if (isset($top_freelancers[0]))
						<div class="col-lg-4">
							<div class = "user" >
								<h1>1.</h1>
								<div class = "picture">
									@if (empty($top_freelancers[0]->pic))
										<img src="{{asset('img/avatar.png')}}" alt="profile_pic" style="width: 100%">

									@else
										<img src="data:{{$top_freelancers[0]->img_type}};base64,{{base64_encode($top_freelancers[0]->pic)}}" alt="profile_pic" style="width: 100%">

									@endif
								</div>
								<div class="detail">
									<p>Rating: {{$top_freelancers[0]->fre_rating/$top_freelancers[0]->fre_review}}</p>
									<p>Major: {{$top_freelancers[0]->major}}</p>
									<i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
								</div>
								<div class="overlay">{{$top_freelancers[0]->name}}</div>
							</div>
						</div>
						@endif
						@if (isset($top_freelancers[1]))
							<div class="col-lg-4">
								<div class = "user" >
									<h1>2.</h1>
									<div class = "picture">
										@if (empty($top_freelancers[1]->pic))
											<img src="{{asset('img/avatar.png')}}" alt="profile_pic" style="width: 100%">

										@else
											<img src="data:{{$top_freelancers[1]->img_type}};base64,{{base64_encode($top_freelancers[1]->pic)}}" alt="profile_pic" style="width: 100%">

										@endif
									</div>
									<div class="detail">
										<p>Rating: {{$top_freelancers[1]->fre_rating/$top_freelancers[1]->fre_review}}</p>
										<p>Major: {{$top_freelancers[1]->major}}</p>
										<i class="fa fa-pagelines fa-lg" aria-hidden="true"></i>
									</div>
									<div class="overlay">{{$top_freelancers[1]->name}}</div>
								</div>
							</div>
						@endif

						@if (isset($top_freelancers[2]))
							<div class="col-lg-4">
								<div class = "user" >
									<h1>3.</h1>
									<div class = "picture">
										@if (empty($top_freelancers[2]->pic))
											<img src="{{asset('img/avatar.png')}}" alt="profile_pic" style="width: 100%">

										@else
											<img src="data:{{$top_freelancers[2]->img_type}};base64,{{base64_encode($top_freelancers[2]->pic)}}" alt="profile_pic" style="width: 100%">

										@endif
									</div>
									<div class="detail">
										<p>Rating: {{$top_freelancers[2]->fre_rating/$top_freelancers[2]->fre_review}}</p>
										<p>Major: {{$top_freelancers[2]->major}}</p>
										<i class="fa fa-envira fa-lg" aria-hidden="true"></i>
									</div>
									<div class="overlay">{{$top_freelancers[2]->name}}</div>
								</div>
							</div>
					@endif
					@endif
				</div>
			</div>
			<div class = "garis"></div>

			<div class="employer">
				      <hr><br><br>
				<h2>Employer</h2>
				<div class="row" style="text-align: center !important;">
					@if (!count($top_employers))
						<h5 style="color:#c6c4c4">No top employers yet.</h5>
					@else
						@if (isset($top_employers[0]))
							<div class="col-lg-4">
								<div class = "user" >
									<h1>1.</h1>
									<div class = "picture">
										@if (empty($top_employers[0]->pic))
											<img src="{{asset('img/avatar.png')}}" alt="profile_pic" style="width: 100%">
										@else
											<img src="data:{{$top_employers[0]->img_type}};base64,{{base64_encode($top_employers[0]->pic)}}" alt="profile_pic" style="width: 100%">
										@endif
									</div>
									<div class="detail">
										<p>Rating: {{$top_employers[0]->emp_rating/$top_employers[0]->emp_review}}</p>
										<i class="fa fa-trophy fa-lg" aria-hidden="true"></i>

									</div>
									<div class="overlay">{{$top_employers[0]->name}} </div>
								</div>
							</div>
						@endif

						@if (isset($top_employers[1]))
							<div class="col-lg-4">
								<div class="user">
									<h1>2.</h1>
									<div class="picture">
										@if (empty($top_employers[1]->pic))
											<img src="{{asset('img/avatar.png')}}" alt="profile_pic" style="width: 100%">
										@else
											<img src="data:{{$top_employers[1]->img_type}};base64,{{base64_encode($top_employers[1]->pic)}}" alt="profile_pic" style="width: 100%">
										@endif
									</div>
									<div class="detail">
										<p>Rating: {{$top_employers[1]->emp_rating/$top_employers[1]->emp_review}}</p>
										<i class="fa fa-pagelines fa-lg" aria-hidden="true"></i>
									</div>
									<div class="overlay">{{$top_employers[1]->name}}</div>
								</div>
							</div>
						@endif

						@if (isset($top_employers[2]))
							<div class="col-lg-4">
								<div class="user">
									<h1>3.</h1>
									<div class="picture">
										@if (empty($top_employers[2]->pic))
											<img src="{{asset('img/avatar.png')}}" alt="profile_pic" style="width: 100%">
										@else
											<img src="data:{{$top_employers[2]->img_type}};base64,{{base64_encode($top_employers[2]->pic)}}" alt="profile_pic" style="width: 100%">
										@endif
									</div>
									<div class="detail">
										<p>Rating: {{$top_employers[2]->emp_rating/$top_employers[2]->emp_review}}</p>
										<i class="fa fa-envira fa-lg" aria-hidden="true"></i>
									</div>
									<div class = "overlay">{{$top_employers[2]->name}}</div>
								</div>
							</div>
						@endif
					@endif

				</div>
			</div>

	</div>
@endsection
