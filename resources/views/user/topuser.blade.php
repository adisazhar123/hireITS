@section('style')
<style media="screen">
.box{
	margin-left : 150px;
	margin-top : 70px;
	color : black;
}

.box h1{
	font-size : 50px;

}

.garis{
	width : 1050px;
	height : 1px;
	margin-top : 20px;
	margin-bottom : 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.user{
	width : 300px;
	height : 300px;
	background-color : #b7b3b3;
	border-radius : 10px;
	margin-left : 40px;
	padding-top : 40px;
	margin-top : 20px;
	float: left;
	position : relative;
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

.picture{
	width : 125px;
	height : 125px;
	background-color : white;
	border-radius : 50%;
	margin-left : 120px;
}

.detail{
	margin-top : 50px;
	margin-left : 20px;
}

.bag{
	margin-left:20px
	width : 1050px;
	height : 400px;
	padding-bottom : 40px;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.user:hover .overlay {
  opacity: 1;
}
</style>
@endsection

@extends('layouts.app')

@section('content')
	<div class = "box">
		<h1>Top Users</h1>
		<div class = "bag" style="margin-top : 60px">
			<h2>Freelancer</h2>
			<div class = "user">
				<img src="{{asset('king.png')}}" style="width : 50px; height : 50px; float : left; margin-left : 20px">
				<div class = "picture"></div>
				<div class = "detail">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
				<div class = "overlay">Job Finished: </div>
			</div>
			<div class = "user" style="margin-top : 70px; height : 250px">
				<h1>2.</h1>
				<div class = "picture"></div>
				<div class = "detail" style ="margin-top : 10px">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
				<div class = "overlay">Job Finished: </div>
			</div>
			<div class = "user" style="margin-top : 120px; height : 200px; padding-top : 20px">
				<h1>3.</h1>
				<div class = "picture" style = "width : 100px; height : 100px; margin-left : 150px"></div>
				<div class = "detail" style="margin-top : 0;">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
				<div class = "overlay">Job Finished: </div>
			</div>
		</div>
		<div class = "garis"></div>
		<div class = "bag" style="margin-top : 30px; ">

		<h2>Employer</h2>
			<div class = "user">
				<img src="{{asset('king.png')}}" style="width : 50px; height : 50px; float : left; margin-left : 20px">
				<div class = "picture"></div>
				<div class = "detail">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
				<div class = "overlay">Job Finished: </div>
			</div>
			<div class = "user" style="margin-top : 70px; height : 250px">
				<h1>2.</h1>
				<div class = "picture"></div>
				<div class = "detail" style ="margin-top : 10px">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
				<div class = "overlay">Job Finished: </div>
			</div>
			<div class = "user" style="margin-top : 120px; height : 200px; padding-top : 20px">
				<h1>3.</h1>
				<div class = "picture" style = "width : 100px; height : 100px; margin-left : 150px"></div>
				<div class = "detail" style="margin-top : 0;">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
				<div class = "overlay">Job Finished: </div>
			</div>
		</div>	
	</div>
@endsection