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
    width: 100%;
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
	<form method="post" action="/empupd">
	{{ csrf_field() }}
		<div class = "title">
			<h3 aling="center">Please fill your Data!</h3>
		</div>

		<div class = "contentform">
      <div class="col-md-12">
        <div class = "form-group">
  				Company name
  				<div class = "input-group">
  					<div class = "icon">
  						<span class = "icon-case"><i class ="fa fa-briefcase"></i></span>
  					</div>
  					<input type="text" name="nama" class ="form-control" placeholder="Company name" />
  				</div>
  			</div>
      </div>

      <div class="col-md-12">
        <div class = "form-group">
  				Company Address
  				<div class = "input-group">
  					<div class = "icon">
  						<span class = "icon-case"><i class = "fa fa-map-marker"></i></span>
  					</div>
  					<input type="text" name="address" class ="form-control" placeholder="Address" />
  				</div>
  			</div>
      </div>

      <div class="col-md-12">
        <div class = "form-group">
  				Price
  				<div class = "input-group">
  					<div class = "icon">
  						<span class = "icon-case"><i class = "fa fa-sort-numeric-asc"></i></span>
  					</div>
  					<input type="number" name="number" class ="form-control" placeholder="Price" min="0"/>
  				</div>
  			</div>
      </div>
      <div class="col-md-12">
        <div class = "form-group">
  				Title
  				<div class = "input-group">
  					<div class = "icon">
  						<span class = "icon-case"><i class = "fa fa-briefcase"></i></span>
  					</div>
  					<input type="text" name="special" class ="form-control" placeholder="Specialize in..." />
  				</div>
  			</div>
      </div>
      <div class="col-md-12">
        <div class = "form-group">
  				Descriptions <br />
  				<textarea class="form-control" name="details" rows="10" cols="80"></textarea>
  			</div>
      </div>
      <div class="col-md-12">

        			<div class = "form-group">
        				<input type="submit" class="btn btn-june" value="Submit Data">
                <a href="{{route('view.employer.profile')}}">Fill in later...</a>
        			</div>
      </div>

		</div>
	</form>
</div>

@endsection
