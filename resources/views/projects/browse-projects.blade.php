@section('style')
  <style media="screen">

  body{
    background-color: #E9E9E9;
  }
    .title{
      height: 100px;
      background-color: #0087E0;
    }

    .title h3{
      padding-top: 30px;
      font-weight: bold;
      color: white;
      font-size: 35px;

    }

    .breadcrumb{
      background-color: #E9E9E9 !important;

    }


    .search-jobs input, .search-jobs button{
      height: 60px;
      font-size: 22px;
    }

    .search-jobs button{
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

    .filter .toggle-filter{
      padding: 0px;
      height: 27px;
      background-color: #0087E0;
      display: none;
    }

    .filter .filter-content{
      padding: 20px;
    }

    .jobs-body{
      border-top: solid #E9E9E9;
      border-bottom: solid #E9E9E9;
      border-width: 1px;
      padding: 30px;
      height: 177.867px;
      white-space: initial;
    }

    .jobs-body:hover{
      background-color: #F7F7F7;
    }
    .jobs-body h4{
      font-weight: bold;
    }
    .jobs-body h6{
      padding-top: 7px;
      padding-left: 10px;
    }

    .jobs-content .filter{
        box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
        border-radius: 3px;
    }

    .jobs-content .available-jobs{
      box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
      border-radius: 3px;

    }

    .job-tags a{
      margin-right: 8px;
    }

    .bid-btn{
      border: 0;
      border-radius: 3px;
      color: white;
      font-weight: bold;
      background-color: rgba(79,181,93,0.8);
      text-decoration: none;
      display: none;
    }

    .bid-btn:hover{
      background-color: rgba(79,181,93,1);
      cursor: pointer;
      color: white;
    }

    .body-link{
      color: black;
    }

    .body-link:link {
    text-decoration: none;
    }

    .body-link:visited {
        text-decoration: none;
        color: black;
    }


    .body-link:hover {
        text-decoration: none;
    }

    .body-link:active {
        text-decoration: none;
    }

    @media only screen and (max-width: 992px) {
      .jobs-body{
        height: auto;
      }

    @media only screen and (max-width: 768px) {

      .search-jobs button{
        width: 100%;
      }

      .filter{
        min-height: 0px;
      }
      .filter .toggle-filter{
        display: block;
      }
    }


}

  </style>
@endsection

@extends('layouts.app')

@section('content')

  <div class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Top jobs</h3>
        </div>
      </div>
    </div>
  </div>
  <nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
      <div class="row">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">hireITS</a></li>
            <li class="breadcrumb-item active"><a href="#">Jobs</a></li>
          </ol>
      </div>

    </div>

</nav>

  <div class="search-jobs">
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
  <div class="jobs-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="filter" style="background-color: white;">
            <div class="toggle-filter" style="width: 100%; padding-left: 20px" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                <i class="fa fa-wrench fa-lg"></i>
            </div>
            <div class="filter-content show multi-collapse" id="multiCollapseExample2">
              <h5>Filter by:</h5>
              <h6><strong>Budget</strong></h6>
              <input type="checkbox" name="" value=""> Average Bid <br>
              Min   <input type="range" min="1" max="100" value="50"> <br>
              Max   <input type="range" min="1" max="100" value="50">
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="available-jobs mb-3" style="background-color: white;">
            <div class="jobs-head mb-3" style="padding: 20px">
              <select class="" name="">
                <option value="">Newest First</option>
                <option value="">Lowest Budget First</option>
                <option value="">Highest Budget First</option>
                <option value="">Lowest bid/entries</option>
                <option value="">Highest bid/entries</option>
              </select>
            </div>

            <div class="jobs-body">
              <a class="body-link" href="#" style="display: block">
                <div class="row">
                  <div class="col-md-10">
                    <div class="row">
                      <h4>PHP Developer</h4>
                      <h6>100 days left</h6>
                    </div>
                    <div class="row">
                      <div class="job-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="job-tags">
                        <a href="#">php </a>
                        <a href="#">photoshop </a>
                        <a href="#">laravel </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="row">
                      <div class="job-price">
                        <h4>$11 - $23 </h4>
                        <small>(avg bid)</small>
                        <p>0 bids</p>
                      </div>
                    </div>
                    <div class="row">
                      <a href="#" class="btn bid-btn" type="button" name="button">bid now</a>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="jobs-body">
              <a class="body-link" href="#" style="display: block">
                <div class="row">
                  <div class="col-md-10">
                    <div class="row">
                      <h4>PHP Developer</h4>
                      <h6>100 days left</h6>
                    </div>
                    <div class="row">
                      <div class="job-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="job-tags">
                        <a href="#">php </a>
                        <a href="#">photoshop </a>
                        <a href="#">laravel </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="row">
                      <div class="job-price">
                        <h4>$11 - $23 </h4>
                        <small>(avg bid)</small>
                        <p>0 bids</p>
                      </div>
                    </div>
                    <div class="row">
                      <a href="#" class="btn bid-btn" type="button" name="button">bid now</a>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="jobs-body">
              <a class="body-link" href="#" style="display: block">
                <div class="row">
                  <div class="col-md-10">
                    <div class="row">
                      <h4>PHP Developer</h4>
                      <h6>100 days left</h6>
                    </div>
                    <div class="row">
                      <div class="job-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="job-tags">
                        <a href="#">php </a>
                        <a href="#">photoshop </a>
                        <a href="#">laravel </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="row">
                      <div class="job-price">
                        <h4>$11 - $23 </h4>
                        <small>(avg bid)</small>
                        <p>0 bids</p>
                      </div>
                    </div>
                    <div class="row">
                      <a href="#" class="btn bid-btn" type="button" name="button">bid now</a>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="jobs-body">
              <a class="body-link" href="#" style="display: block">
                <div class="row">
                  <div class="col-md-10">
                    <div class="row">
                      <h4>PHP Developer</h4>
                      <h6>100 days left</h6>
                    </div>
                    <div class="row">
                      <div class="job-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="job-tags">
                        <a href="#">php </a>
                        <a href="#">photoshop </a>
                        <a href="#">laravel </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="row">
                      <div class="job-price">
                        <h4>$11 - $23 </h4>
                        <small>(avg bid)</small>
                        <p>0 bids</p>
                      </div>
                    </div>
                    <div class="row">
                      <a href="#" class="btn bid-btn" type="button" name="button">bid now</a>
                    </div>
                  </div>
                </div>
              </a>
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
  if ($(document).width()<=768){
    $(".filter-content").removeClass("show");
    $(".filter-content").addClass("collapse");
  }else{
    $(".filter-content").removeClass("collapse");
    $(".filter-content").addClass("show");
  }

  $(".jobs-body").hover(function(){
    if ($(document).width()>768)
      $(this).find('.bid-btn').toggle();
  });

  $(window).resize(function(){
    if ($(document).width()<=768){
      $(".filter-content").removeClass("show");
      $(".filter-content").addClass("collapse");
    }else{
      $(".filter-content").removeClass("collapse");
      $(".filter-content").addClass("show");
    }
  });


  </script>
@endsection
