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
    /*background-image: url("https://images.pexels.com/photos/207665/pexels-photo-207665.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");*/
    /*height: 50%;*/
    padding-top: 300px;
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

/*.text{
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
}*/


@import url(https://fonts.googleapis.com/css?family=Open+Sans:600;);
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


/* Demo purposes only */

body {
  background-color: #212121;
  text-align: center;
}

/*.card:hover .middle{
  opacity: 0.2;
}

.card:hover .text {
  opacity: 1;
}
*/


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
          <div class="card snip1573" style="width: ;">

            <img class="card-img-top" src="https://cdn-images-1.medium.com/max/2000/1*TRn9ZGNdHaXN0qDdri5bjw@2x.gif" alt="Card image cap">

            <div class="card-body">
              <p class="card-text">Bussiness card design</p>
              <h4 class="card-text">$200</h4>

            </div>
            <div class="middle">

            </div>
            <div class="text">
              <!-- <a href="#" class="btn btn-primary">Hire Me</a> -->
              <figcaption>
                <h3>Hire Me</h3>
              </figcaption>
              <a href="#"></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card snip1573" style="width: ;">
          <img class="card-img-top" src="https://lh3.googleusercontent.com/uASJMQyWGjpbZ8yb6Is-8odp5oOGlfsrlB1hL5IhIfZTpz7g3yrz56X_NEmuKRKsAkXkTixMdw">
            <div class="card-body">
              <p class="card-text">House design</p>
              <h4 class="card-text">$200</h4>
            </div>
            <div class="middle">

            </div>
            <div class="text">
              <figcaption>
                <h3>Hire Me</h3>
              </figcaption>
              <a href="/"></a>
            </div>
          </div>
        </div>
      <div class="col-md-4">
        <div class="card snip1573" style="width: ;">
        <img class="card-img-top" src="https://lh3.googleusercontent.com/JP1KT3xUA-MFA8tLRHC3CvX6nphBYLpCzxB6eIthMYXvF0dXX7I7NITpBT0E3B07CiqRzCqkPQ" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">House design</p>
          <h4 class="card-text">$200</h4>

          </div>
          <div class="middle">

          </div>
          <div class="text">
            <figcaption>
                <h3>Hire Me</h3>
              </figcaption>
              <a href="#"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card snip1573" style="width: ;">
        <img class="card-img-top" src="https://lh3.googleusercontent.com/s0o3GbvRKoEA3hBKTooThA45XtL7WpcuZ6SOYHB54vhu-Nj6TYDgiakW20O4VPwRcsjzOVsI2g" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">House design</p>
          <h4 class="card-text">$200</h4>

          </div>
          <div class="middle">

          </div>
          <div class="text">
            <figcaption>
                <h3>Hire Me</h3>
              </figcaption>
              <a href="#"></a>
          </div>
        </div>
      </div>
      </div>
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
