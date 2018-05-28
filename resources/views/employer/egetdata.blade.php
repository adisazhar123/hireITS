@section('style')
<style media="screen">
  .main-container{
  max-height: 60vh !important;
}

body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
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

/*  input {
    width: 100%;
  }*/

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
   /* margin-left:15px;*/
  }

/*  textarea{
  	margin-left : 15px;
  }*/

    .title{
    background: #f1c40f ;
    text-shadow: none;
    text-align:center;
    text-transform: uppercase;
    font-size: 18px;
    color: #FFF;
    padding: 0.5em;
  }

  .submitt{
     text-align: center;
  }

    .btn.btn-june {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;
   
}

.btn.btn-june:hover {
    color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
}

</style>
@endsection

@extends('layouts.app')

@section('content')
<div class = "container">
	<form method="post" action="/empupd">
	{{ csrf_field() }}
		<div class = "title">
			<h2 style="text-align:center;">Please fill your Data!</h2>
		</div>

		<div class = "contentform">
      <div class="col-md-12" >
        <div class = "form-group">
  				<h6>Company Name</h6>
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
  				<h6>Company Address</h6>
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
  				<h6>Price</h6>
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
  				<h6>Title</h6>
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
  				<h6>Description</h6>
  				<textarea class="form-control" name="details"></textarea>
  			</div>
      </div>
      <div class="col-md-12">
        			<div class = "form-group submitt">
        				<input type="submit" class="btn btn-june" value="Submit Data">
                <a  class="btn btn-june" href="{{route('view.employer.profile')}}">Fill in later...</a>
        			</div>
      </div>

		</div>
	</form>
</div>

@endsection
