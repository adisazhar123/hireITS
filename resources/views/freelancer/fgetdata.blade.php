@section('style')
<style media="screen">
.title{
  background: #D66C44 ;
  text-shadow: none;
  text-align:center;
  text-transform: uppercase;
  font-size: 18px;
  color: #FFF;
  padding: 5px 5px;
}

.container{
	margin:center;
}

form {
  border-radius: 5px;
  width:80%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 200px;
  height: 41px;
  float: left;
  padding: 0px 15px;
}

.contentform{
	padding: 30px 30px;
	font-size : 18px;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
  margin-left:15px;
}

textarea{
	margin-left : 15px;
}

</style>
@endsection

@extends('layouts.app')

@section('content')
<div class = "container">
	<form method="post" action="/dataupd">

	<div class = "title">
		<h3 align="center">Please fill your Data!</h3>
	</div>
	{{ csrf_field() }}
	<div class = "contentform">
		<div class = "form-group">
			Your name
			<div class = "input-group">
			<div class = "icon">
				<span class ="icon-case"><i class = "fa fa-user-circle-o"></i></span>
				
			</div>
			<input type="text" name="nama" class ="form-control col-6" placeholder="Full name"/>
			</div>
		</div>
		<div class = "form-group">
			Your Age
			<div class = "input-group">
				<div class = "icon">
					<span class ="icon-case"><i class = "fa fa-vcard-o"></i></span>
				</div>
					<input type="text" name="age" class ="form-control col-6" placeholder="Age" />
			</div>
		</div>
		<div class = "form-group">
			Your Major
			<div class ="input-group">
				<div class = "icon">
				<span class ="icon-case"><i class = "fa fa-mortar-board"></i></span>
				
				</div>
				<input type="text" name="major" class ="form-control col-6" placeholder="Major" />
			</div>
		</div>
		<div class = "form-group">
			Describe Yourself! <br />
			<textarea name="description" rows="10" cols="80"></textarea>
		</div>
		<div class = "form-group">
				Price
				<div class = "input-group">
					<div class = "icon">
						<span class = "icon-case"><i class = "fa fa-sort-numeric-asc"></i></span>
					</div>
					<input type="number" name="number" class ="form-control col-6" placeholder="Price" min="0"/>
				</div>
			</div>
		<div class = "form-group">
			Your Title
			<div class = "input-group">
				<div class = "icon">
				<span class ="icon-case"><i class = "fa fa-trophy"></i></span>
				
				</div>
				<input type="text" name="title" class ="form-control col-6" placeholder="Your title" />
			</div>
		</div>
		<div class = "form-group">
			<input type="submit" class="btn btn-primary" value="Submit Data">
		</div>
	</div>
	</form>
</div>
@endsection
