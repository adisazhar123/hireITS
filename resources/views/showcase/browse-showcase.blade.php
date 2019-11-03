@section('title')
  Browse Showcase
@endsection

@section('style')
  <style media="screen">



  .card-img-top{
    height: 210px;
    width: 100%;
  }
  .backround{
/*    background-image: url("https://images.pexels.com/photos/207665/pexels-photo-207665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");*/
/*    height: 50%;*/
    padding-top: 300px;
/*    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;*/
    /*background-color: rgba(0,0,0,0);*/
  }

/*  .search-showcase{
    margin-bottom: 100px;
  }*/
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

/*  .text {
    padding-top: 120px;
    color: white;
    opacity: 1;
  }*/

  /*.text*/ /*.btn{
    width: auto;
  }
*/
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


.snip1573 {
  background-color: #000;
  display: inline-block;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  margin: 10px 7px;
  max-width: 315px;
  min-width: 230px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
}

.snip1573 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}

.snip1573:before,
.snip1573:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
  background-color: #000000;
  border-left: 3px solid #fff;
  border-right: 3px solid #fff;
  content: '';
  opacity: 0.9;
  z-index: 1;
}

.snip1573:before {
  -webkit-transform: skew(45deg) translateX(-155%);
  transform: skew(45deg) translateX(-155%);
}

.snip1573:after {
  -webkit-transform: skew(45deg) translateX(155%);
  transform: skew(45deg) translateX(155%);
}

.snip1573 img {
  backface-visibility: hidden;
  max-width: 100%;
  vertical-align: top;
}

.snip1573 figcaption {
  top: 50%;
  left: 50%;
  position: absolute;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%) scale(0.5);
  transform: translate(-50%, -50%) scale(0.5);
  opacity: 0;
  -webkit-box-shadow: 0 0 10px #000000;
  box-shadow: 0 0 10px #000000;
}

.snip1573 h3 {
  background-color: #000000;
  border: 2px solid #fff;
  color: #fff;
  font-size: 1em;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 0;
  padding: 5px 10px;
  text-transform: uppercase;
}

.snip1573 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 3;
}

.snip1573:hover > img,
.snip1573.hover > img {
  opacity: 0.5;
}

.snip1573:hover:before,
.snip1573.hover:before {
  -webkit-transform: skew(45deg) translateX(-55%);
  transform: skew(45deg) translateX(-55%);
}

.snip1573:hover:after,
.snip1573.hover:after {
  -webkit-transform: skew(45deg) translateX(55%);
  transform: skew(45deg) translateX(55%);
}

.snip1573:hover figcaption,
.snip1573.hover figcaption {
  -webkit-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
  opacity: 1;
}

.card-body{
  background: #fff;
}

/* Demo purposes only */

body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
}

.container.yes{
  text-align: center;
}

.filter a{
  color: black;
  font-size: 16px;
  margin-right: 15px;
}

.filter a.active{
  color: #6da768;
  font-weight: bold;
}

.btn-link{
  color: #6da768;
}

#collapseOne ul{
  list-style-type: none;
}

.accordion.hide{
  display: none;
}

.col-md-12{
  text-align: center;
}

.col-md-12 a{
  font-size: 20px;
}

.col-md-12 p{
  text-align: center;
}

  .btn-primary {
    color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
}

  .btn-primary:hover {
    color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
}
@media only screen and (max-width: 990px) {
    .accordion.hide{
      display: block;
    }
    .accordion .card{
      max-width: 717px;
    }
    .hide2{
      display: none;
    }
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
      <h4>Let the beauty speak for itself </h4><br><br>
    </div>
  </div>


  <div class="search-showcase">
    <div class="container">
      <form>
        <div class="row">
          <div class="col-md-12">
            <form class="" action="{{route('browse.showcase')}}" method="get">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn" disabled id="search-logo" type="button" name="button"><i class="fa fa-search fa-lg" aria-hidden="true"></i>
                  </button>
            </div>

              <input type="text" class="form-control mb-2" name="keywords" id="inlineFormInput" placeholder="Search Keywords">

              <div class="input-group-append">
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
            </div>
            </form>
        </div>
        </div>
      </form>
    </div>
  </div>

  <div class="filter" style="text-align: left; ">
    <div class="container">
      <div class="row hide2">
        <div class="col-md-12">
          <a href="{{route('browse.showcase')}}" class="@if (!isset($_GET['category']))
            active
          @endif ">All</a>
          <a href="{{route('browse.showcase')}}?category=logos" class="@if ((isset($_GET['category']) && $_GET['category'] === "logos"))
            active
          @endif ">Logos</a>
          <a href="{{route('browse.showcase')}}?category=websites" class="@if ((isset($_GET['category']) && $_GET['category'] === "websites"))
            active
          @endif ">Websites</a>
          <a href="{{route('browse.showcase')}}?category=mobile+applications" class="@if (isset($_GET['category']) && $_GET['category'] === "mobile applications")
            active
          @endif ">Mobile Applications</a>
          <a href="{{route('browse.showcase')}}?category=graphic+design" class="@if ((isset($_GET['category']) && $_GET['category'] === "graphic design"))
            active
          @endif ">Graphic Design</a>
          <a href="{{route('browse.showcase')}}?category=illustration" class="@if ((isset($_GET['category']) && $_GET['category'] === "illustration"))
            active
          @endif ">Illustration</a>
          <a href="{{route('browse.showcase')}}?category=3d+models" class="@if ((isset($_GET['category']) && $_GET['category'] === "illustration"))
            active
          @endif ">3D Models</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="accordion hide" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0" >
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
                    Categories
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul>
                    <li>
                      <a href="#" class="active">All</a>
                    </li>
                    <li>
                      <a href="#">Logos</a>
                    </li>
                    <li>
                      <a href="#">Websites</a>
                    </li>
                    <li>
                      <a href="#">Mobile Applications</a>
                    </li>
                    <li>
                      <a href="#">Graphic Design</a>
                    </li>
                    <li>
                      <a href="#">Illustration</a>
                    </li>
                    <li>
                      <a href="#">3D Models</a>

                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container yes">
  <div class="row" style="text-align: center !important; padding-top: 100px;">
    <div class="col-md-12"  >
      <div class="row">
        @if (!count($showcases))
          <h5 style="color:#c6c4c4">No showcase found.</h5>
        @else
          @foreach ($showcases as $showcase)
            <div class="col-lg-4">
              <div class="card snip1573">

                <img class="card-img-top" src="data:{{$showcase->pic_type}};base64,{{ base64_encode($showcase->pic) }}" alt="Card image cap">

                <div class="card-body" style="background-color: white">
                  <p class="card-text">{{$showcase->title}}</p>
                  <small>{{$showcase->description}}</small>
                  <h4 class="card-text">$ {{$showcase->price}}</h4>

                </div>
                <div class="middle">

                </div>
                <div class="text">
                  <!-- <a href="#" class="btn btn-primary">Hire Me</a> -->
                  <figcaption>
                    <h3>Hire Me</h3>
                  </figcaption>
                  <a href="{{route('view.freelancer', $showcase->username)}}"></a>
                </div>
              </div>
            </div>
          @endforeach
        @endif

      </div>
      {{ $showcases->appends($_GET)->links('vendor.pagination.bootstrap-4') }}

    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>
@endsection
