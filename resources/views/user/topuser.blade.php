
@section('style')
<style media="screen">
.box{
	margin-left : 150px;
	margin-top : 70px;
	color : white;
}

.box h1{
	font-size : 50px;

}

.garis{
	width : 1050px;
	height : 1px;
	margin-top : 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.user{
	width : 300px;
	height : 300px;
	background-color : #b7b3b3;
	border-radius : 10px;
	margin-left : 20px;
	padding-top : 40px;
	margin-top : 20px;
}

.user h1{
	float:left;
	margin-left : 20px;
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
</style>
@endsection

@extends('layouts.app')

@section('content')
	<div class = "box">
		<h1>Top Users</h1>
		<div class = "garis"></div>
		<div class = "freelancer" style="margin-top : 30px; margin-left:20px">
			<h2>Freelancer</h2>
			<div class = "user">
				<img src="{{asset('king.png')}}" style="width : 50px; height : 50px; float : left; margin-left : 20px">
				<div class = "picture"></div>
				<div class = "detail">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
			</div>
			<div class = "user" style="margin-top : 70px; height : 250px">
				<h1>2.</h1>
				<div class = "picture"></div>
				<div class = "detail" style ="margin-top : 10px">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
			</div>
			<div class = "user" style="margin-top : 70px; height : 250px">
				<h1>3.</h1>
				<div class = "picture"></div>
				<div class = "detail" style ="margin-top : 10px">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
			</div>
		</div>
		<div class = "garis"></div>
		<div class = "employer" style="margin-top : 30px; margin-left:20px">
		<h2>Employer</h2>
			<div class = "user">
				<img src="{{asset('king.png')}}" style="width : 50px; height : 50px; float : left; margin-left : 20px">
				<div class = "picture"></div>
				<div class = "detail">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
			</div>
			<div class = "user" style="margin-top : 70px; height : 250px">
				<h1>2.</h1>
				<div class = "picture"></div>
				<div class = "detail" style ="margin-top : 10px">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
			</div>
			<div class = "user" style="margin-top : 70px; height : 250px">
				<h1>3.</h1>
				<div class = "picture"></div>
				<div class = "detail" style ="margin-top : 10px">
					<p>Name : </p> 
					<p>Major : </p>

				</div>
			</div>
		</div>	
	</div>
@endsection