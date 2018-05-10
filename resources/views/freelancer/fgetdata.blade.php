@extends('layouts.app')

@section('content')
<div class = "col-md-8 m-4">
	<br />
	<h3 aling="center">Please fill your Data!</h3>
	<br />
	<form method="post" action="/dataupd">
	{{ csrf_field() }}
		<div class = "form-group">
			Your name
			<input type="text" name="nama" class ="form-control" placeholder="Full name" />
		</div>
		<div class = "form-group">
			Your Age
			<input type="text" name="age" class ="form-control" placeholder="Age" />
		</div>
		<div class = "form-group">
			Your Major
			<input type="text" name="major" class ="form-control" placeholder="Major" />
		</div>
		<div class = "form-group">
			Describe Yourself! <br />
			<textarea name="description" rows="10" cols="100"></textarea>
		</div>
		<div class = "form-group">
			Your Title
			<input type="text" name="title" class ="form-control" placeholder="Your title" />
		</div>
		<div class = "form-group">
			<input type="submit" class="btn btn-primary" value="Submit Data">
		</div>
	</form>
</div>

@endsection