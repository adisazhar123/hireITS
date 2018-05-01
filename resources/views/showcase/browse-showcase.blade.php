@section('style')
  <style media="screen">

  .card{
    margin-bottom: 20px;
  }

  .card-img-top{
    height: 210px;
    width: 100%;
  }
  .backround{
    background-image: url("https://images.pexels.com/photos/207665/pexels-photo-207665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: rgba(0,0,0,0);
  }

  .search-showcase{
    margin-bottom: 100px;
  }
  .search-showcase input, .search-showcase button{
    height: 60px;
    font-size: 22px;
  }

  .search-showcase button{
    width: 100px !important;
    border-radius: 5px !important;
  }


  #search-logo{
    color: black;
    border-left: solid #CCD0D2;
    border-top: solid #CCD0D2;
    border-bottom: solid #CCD0D2;
    border-width: 1px;
    border-radius: 1px;
  }

  .title{
    margin-top: -250px;
    text-align: center;
    font-weight: bold;
  }

  .text {
    padding-top: 120px;
    color: white;
    opacity: 1;
  }

  .text .btn{
    width: auto;
  }

  .middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  background-color: black;
  height: 100%;
  width: 100%;
}

.text{
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  background-color: black;
  height: 100%;
  width: 100%;
}

.card:hover .text {
  opacity: 1;
}

.card:hover .middle{
  opacity: 0.1;
}



  </style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="backround">

  </div>

  <div class="title">
    <div class="container">
      <h1> Freelancer Showcase</h1>
      <h1>Let the art speak for itself </h1>
    </div>

  </div>


  <div class="search-showcase">
    <div class="container">
      <form>
        <div class="row">
          <div class="col-md-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button class="btn" disabled id="search-logo" type="button" name="button"><i class="fa fa-search fa-lg" aria-hidden="true"></i>
                </button>
          </div>
            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Search Keywords">

            <div class="input-group-append">
              <button type="submit" class="btn btn-primary mb-2">Search</button>
          </div>
          </div>
        </div>
        </div>
      </form>
    </div>

  </div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-4">
          <div class="card" style="width: ;">

            <img class="card-img-top" src="https://cdn-images-1.medium.com/max/2000/1*TRn9ZGNdHaXN0qDdri5bjw@2x.gif" alt="Card image cap">

            <div class="card-body">
              <p class="card-text">Bussiness card design</p>
              <h4 class="card-text">$200</h4>

            </div>
            <div class="middle">

            </div>
            <div class="text">
              <a href="#" class="btn btn-primary">Hire Me</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: ;">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyxRuhqCyt84S0_eKJACyKGpGIhOUmG4NE7G0FGwCP4juCq4KxGw" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">House design</p>
              <h4 class="card-text">$200</h4>
            </div>
            <div class="middle">

            </div>
            <div class="text">
              <a href="#" class="btn btn-primary">Hire Me</a>
            </div>
          </div>
        </div>
      <div class="col-md-4">
        <div class="card" style="width: ;">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeo-XkE17ckBsF60ZVQPy7KRIRPA28uUeQO5QbwA0aMZOIVxF0" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">House design</p>
          <h4 class="card-text">$200</h4>

          </div>
          <div class="middle">

          </div>
          <div class="text">
            <a href="#" class="btn btn-primary">Hire Me</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: ;">
        <img class="card-img-top" src="https://images.pexels.com/photos/239886/pexels-photo-239886.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">House design</p>
          <h4 class="card-text">$200</h4>

          </div>
          <div class="middle">

          </div>
          <div class="text">
            <a href="#" class="btn btn-primary">Hire Me</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection
