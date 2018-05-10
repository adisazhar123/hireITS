@extends('layouts.app')

@section('content')
<div class = "col-md-8 m-4">
	<br />
	<h3 aling="center">Please fill your Data!</h3>
	<br />
	<form method="post" action="/dataupd">
	{{ csrf_field() }}
		<div class = "form-group">
			Company name
			<input type="text" name="nama" class ="form-control" placeholder="Company name" />
		</div>
		
		<div class = "form-group">
			<input type="submit" class="btn btn-primary" value="Submit Data">
		</div>
	</form>
</div>

@endsection