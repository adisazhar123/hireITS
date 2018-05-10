@section('style')

  <style media="screen">
    .project-time{
      height: auto  ;
      background-color: white;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .info{
      border-right: solid #DEDEDE;
      border-width: 1px;
    }

    .project-desc{
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 20px;
    }

    .project-skills a{
      margin-right: 8px;
    }

    .bidders-header{
      height: 45px;
      background-color: grey;
      padding: 10px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .bidders-body{
      background-color: white;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      padding: 0;
    }
    .bidders .card{
      border-radius: 0px;
      padding: 0;
    }

  </style>

@endsection

@extends('layouts.app')
@section('navbar')
  @include('inc.navbar')
@endsection

@section('content')
  <div class="container">
    <div class="row">
    </div>
    <div class="row">

      <div class="col-md-12">
        <h2>{{$job[0]->name}}</h2>
        <div class="project-time">
          <div class="row">
            <div class="col-md-1">
              <h4>Bids</h4>
              <strong>5</strong>
            </div>
            <div class="col-md-1">
              <h4>Bids</h4>
              <strong>$12.00</strong>
            </div>
            <div class="col-md-2">
              <h4>Project Budget</h4>
              <strong>

                ${{$job[0]->price_max}}.00
              </strong>
            </div>
            <div class="col-md-2" style="float: right">
              <h4>Days left</h4>
              <strong>
                @php
                  $now = date_create(date("d-m-Y"));
                  $end = date_create(date_format(date_create($job[0]->deadline), "d-m-Y"));
                  $diff=date_diff($now, $end);
                  echo $diff->format('%d day/s left');
                @endphp
              </strong>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="project-desc" style="background-color: white; height: auto">
          <h3>Project Description</h3>

          <div class="row">
            <div class="col-md-8">
              <div class="desc">
                 @php
                  echo $job[0]->description;
                 @endphp
              </div>
              <div class="employer-desc">
                <strong>About the employer</strong>
                <br>
                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="project-skills">
                <strong>Skills required</strong>
                <br>
                  <a href="#">php</a><a href="#">photoshop</a>
              </div>
            </div>
            <div class="col-md-4">
              <button type="button" name="button">Bid on this project</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="bidders">
          <div class="bidders-header">
            <h3>Freelancers bidding</h3>
          </div>
          <div class="bidders-body">
              <div class="card">
                <div class="card-body">

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
