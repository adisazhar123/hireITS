@extends('layouts.app')

@section('content')
<div class = "col-md-8 m-4">
	<br />
	<h3 aling="center">Please fill your Data!</h3>
	<br />
	<form method="post" action="/empupd">
	{{ csrf_field() }}
		<div class = "form-group">
			Company name
			<input type="text" name="nama" class ="form-control" placeholder="Company name" />
		</div>
		<div class = "form-group">
			Company Address
			<input type="text" name="address" class ="form-control" placeholder="Address" />
		</div>
		<div class = "form-group">
			Phone Number
			<input type="text" name="number" class ="form-control" placeholder="Phone Number" />
		</div>
		<div class = "form-group">
			Specialize
			<input type="text" name="special" class ="form-control" placeholder="Specialize in..." />
		</div>
		<div class = "form-group">
			Company Details <br />
			<textarea name="details" rows="10" cols="100"></textarea>
		</div>

		<div class = "form-group">
			<input type="submit" class="btn btn-primary" value="Submit Data">
		</div>
	</form>
</div>

@endsection