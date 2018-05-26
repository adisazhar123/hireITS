@section('style')
<style media="screen">

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

.title{
	min-height:100px;
	background-color: #0087E0;
	position: relative;
	margin-bottom: 20px;
 }

.title h3{
	padding-top: 30px;
	font-weight: bold;
	color: white;
	font-size: 35px;

}


</style>
@endsection

@extends('layouts.app')

@section('content')
	<div class="title">
		<div class="container">
<h3>Top Users</h3>
		</div>
	</div>
	<div class="container">
			<div class="freelancer">
				<h2>Freelancer</h2>
				<div class="row">
					@if (empty($top_freelancers))
						<h5>No freelancers yet.</h5>
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
									<p>Rating: {{$top_freelancers[0]->rating}}</p>
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
										<p>Rating: {{$top_freelancers[1]->rating}}</p>
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
										<p>Rating: {{$top_freelancers[2]->rating}}</p>
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
				<h2>Employer</h2>
				<div class="row">
					@if (empty($top_employers))
						<h5>No top employers yet.</h5>
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
										<p>Rating: {{$top_employers[0]->rating}}</p>
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
										<p>Rating: {{$top_employers[1]->rating}}</p>
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
										<p>Rating: {{$top_employers[2]->rating}}</p>
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
