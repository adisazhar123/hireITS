@section('style')
  <style media="screen">
    .title{
      height: 100px;
      background-color: #0087E0;
    }

    .title h3{
      padding-top: 32px;
      font-weight: bold;
      color: white;
    }

    .breadcrumb{
      background-color: white !important;

    }

    .search-jobs input, .search-jobs button{
      height: 65px;
      font-size: 24px;
    }

    .search-jobs button{
      width: 110px;
    }

    .filter{
      padding: 20px;
    }


    @media only screen and (max-width: 768px) {

      .search-jobs button{
        width: 100%;
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
        <div class="form-row align-items-center">
          <div class="col-md-10">
            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Search Keywords">
          </div>

          <div class="col-md-2">
            <button type="submit" class="btn btn-primary mb-2">Search</button>
          </div>
        </div>
      </form>
    </div>

  </div>

  <div class="search-jobs-filter">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="filter" style="background-color: grey; height: 300px;">
            <h5>Filter by:</h5>
            <h6><strong>Budget</strong></h6>
            <input type="checkbox" name="" value=""> Average Bid <br>
            Min   <input type="range" min="1" max="100" value="50"> <br>
            Max   <input type="range" min="1" max="100" value="50">

          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

@section('script')

@endsection
