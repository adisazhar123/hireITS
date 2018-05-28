@section('style')
<style media="screen">

  input{
    width: 100%;
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

  .title{
    background: #f1c40f ;
    text-shadow: none;
    text-align:center;
    text-transform: uppercase;
    font-size: 18px;
    color: #FFF;
    padding: 0.5em;
  }


</style>
@endsection

@extends('layouts.app')

@section('content')
<div class = "container">
	<form method="post" action="/dataupd">

	<div class = "title">
		<h2 align="center">Please fill your Data!</h2>
	</div>
	{{ csrf_field() }}
	<div class = "contentform">
    <div class="col-md-12">
      <div class = "form-group">
  			Your name
  			<div class = "input-group">
  			<div class = "icon">
  				<span class ="icon-case"><i class = "fa fa-user-circle-o"></i></span>

  			</div>
  			<input type="text" name="nama" class ="form-control" placeholder="Full name"/>
  			</div>
  		</div>
    </div>

    <div class="col-md-12">
      <div class = "form-group">
        Your Age
        <div class = "input-group">
          <div class = "icon">
            <span class ="icon-case"><i class = "fa fa-vcard-o"></i></span>
          </div>
            <input type="text" name="age" class ="form-control" placeholder="Age" />
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class = "form-group">
  			Your Major
  			<div class ="input-group">
  				<div class = "icon">
  				<span class ="icon-case"><i class = "fa fa-mortar-board"></i></span>

  				</div>
  				<input type="text" name="major" class ="form-control" placeholder="Major" />
  			</div>
  		</div>
    </div>

    <div class="col-md-12">
      <div class = "form-group">
  			Describe Yourself! <br />
  			<textarea name="description" rows="10" cols="80"></textarea>
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
  			Your Title
  			<div class = "input-group">
  				<div class = "icon">
  				<span class ="icon-case"><i class = "fa fa-trophy"></i></span>

  				</div>
  				<input type="text" name="title" class ="form-control" placeholder="Your title" />
  			</div>
  		</div>
    </div>

    <div class="col-md-12">
      <div class = "form-group">
  			<input type="submit" class="btn btn-primary" value="Submit Data">
        <a href="{{route('view.freelancer.profile')}}">Fill in later...</a>
  		</div>
    </div>
	</div>
	</form>
</div>
@endsection
