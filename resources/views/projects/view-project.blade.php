@section('style')

  <style media="screen">
    .project-time{
      height: auto  ;
      background-color: white;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
      box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
      border-radius: 3px;
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
      padding: 10px;
      background-color: white;
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
      border-bottom: solid grey;
      border-width: 1px;
      width: 100%;
    }

    .bidders{
      margin-bottom: 20px;
      box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
      border-radius: 3px;
    }

    .project-desc{
      box-shadow:  0px 0px 2px 0px  rgba(0, 0, 0, 0.3);
      border-radius: 3px;
    }

    .modal{
      top: 20%;
    }

    .title{
      min-height:100px;
      background-color: #0087E0;
      position: relative;
      margin-bottom: 20px;
     }

    .title h3{
      padding-top: 30px;
      font-weight: bold;
      color: white;
      font-size: 35px;

    }

    .bidders .card #cancel-bid{
      display: none;
    }

    .card:hover #cancel-bid{
      display: block;

    }

    .fa-star{
      color: yellow;
    }

    .card-body{
      justify-content: center;
    }

    .card-body img{
      border-radius: 4px;
    }




  </style>

@endsection

@extends('layouts.app')
@section('navbar')
  @include('inc.navbar')
@endsection

@section('content')



  <div class="title">
    <div class="container">
      <h3>{{$job[0]->name}}</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @if(session()->has('success'))
          <div class="alert alert-success alert-dismissable">
              {{ session()->get('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @endif
      <div class="col-md-12">
        <div class="project-time">
          <div class="row">
            <div class="col-md-1">
              <h4>Bids</h4>
              <strong>{{count($bids)}}</strong>
            </div>
            <div class="col-md-1">
              <h4>Bids</h4>
              <strong>$12.00</strong>
            </div>
            <div class="col-md-2">
              <h4>Project Budget</h4>
              <strong>

                ${{number_format($job[0]->price_max,2)}}
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
            <div class="col-md-2">
              @if (Auth::check() && Auth::user()->role==="freelancer" && $hasBid && $job[0]->active)
                <button id="bid-now" class="btn btn-primary" name="bid-now">Bid on this project</button>
              @endif
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
              <div class="desc" style="text-align: justify">
                 @php
                  echo $job[0]->description;
                 @endphp

              </div>

              <div class="employer-desc">
                <strong>About the employer</strong><br>
                <a href="#">{{$job[0]->employer->username}}</a>
                <br>
                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="project-skills">
                <strong>Skills required</strong>
                <br>
                @foreach ($skills as $skill)
                  <a href="#">{{$skill->name}}</a>

                @endforeach
              </div>

            </div>
            <div class="col-md-4">
              <div class="ok">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                   @php
                     $x=0;
                   @endphp
                   @foreach ($job_images as $job_img)
                     @if ($x==0)
                       <li data-target="#carouselExampleIndicators" data-slide-to={{$x}} class="active"></li>
                       @php
                         $x++;
                       @endphp
                      @else
                        <li data-target="#carouselExampleIndicators" data-slide-to={{$x}}></li>
                        @php
                          $x++;
                        @endphp
                     @endif

                   @endforeach

                 </ol>
                 <div class="carousel-inner">
                   @php
                     $a=0;
                   @endphp
                   @foreach ($job_images as $job_img)
                     @if ($a == 0)
                       <div class="carousel-item active">
                         <img class="img-fluid" src="data:{{$job_img->img_type}};base64,{{base64_encode( $job_img->name )}}"/>
                       </div>
                       @php
                         $a++;
                       @endphp
                      @else
                        <div class="carousel-item">
                          <img class="img-fluid" src="data:{{$job_img->img_type}};base64,{{base64_encode( $job_img->name )}}"/>
                        </div>
                     @endif

                   @endforeach
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </a>
                </div>
              </div>


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
          @if ($bids->isEmpty())
            <div class="bidders-body">
                <div class="card bid">
                    <div class="card-body">
                      No bids
                    </div>
                  </div>
                </div>
          @else
            @foreach ($bids as $bid)
            <div class="bidders-body">
                <div class="card bid">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-2">
                          @foreach ($pics as $pic)
                            @if ($bid->freelancer->freelancer_id == $pic->user_id)
                              @if (empty($pic->img_type))
                                <img class="img-fluid" src="{{asset('img/avatar.png')}}"/>
                              @else
                                <img class="img-fluid" src="data:{{$pic->img_type}};base64,{{base64_encode( $pic->name )}}"/>
                              @endif
                            @endif
                          @endforeach
                        </div>
                        <div class="col-md-5">
                          <div class="">
                            <a href="/freelancer/{{$bid->freelancer->username}}">{{$bid->freelancer->name}}</a>
                          </div>
                          <div class="" style="text-align: justify">
                            {{$bid->comment}}
                          </div>
                        </div>
                        <div class="col-md-2">
                          ${{number_format($bid->price,2)}}
                          <br>
                          my rating is five stars
                        </div>
                        <div class="col-md-2">
                          @if (Auth::check())
                            @foreach ($bid->job->wonby as $wonby)
                              @if ($wonby->won_by_id == Auth::user()->id)
                                <div class="alert alert-warning">
                                  Your ongoing project
                                </button>
                                </div>
                                @break
                              @elseif ($bid->freelancer->freelancer_id == Auth::user()->id)
                                <form class="" action="index.html" method="post">
                                  <button  id="cancel-bid" class="btn btn-danger animated fadeIn" type="submit" name="button">Cancel bid</button>
                                </form>
                              @endif
                            @endforeach
                          @endif
                          @if (Auth::check() && Auth::user()->id == $job[0]->employer_id)
                            <form class="" action="{{route('hire.freelancer')}}" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="won_by_id" value="{{$bid->freelancer_id}}">
                              <input type="hidden" name="job_id" value="{{$bid->job_id}}">
                              @if ($job[0]->wonby->isEmpty())
                                <button type="submit" class="btn btn-success hire-me" name="button">Hire me</button>
                              @else
                                @foreach ($job[0]->wonby as $wonby)
                                  @if ($bid->freelancer_id == $wonby->won_by_id)
                                    <div class="alert alert-warning">
                                        I am already hired!
                                    </div>
                                    @break
                                    @else
                                      <button type="submit" class="btn btn-success hire-me" name="button">Hire me</button>
                                      @break
                                  @endif
                                @endforeach
                              @endif

                            </form>
                          @endif
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          @endforeach
        @endif

        </div>
      </div>
    </div>
    <div class="modal bid-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Bid on {{$job[0]->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="bid-form">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
              </div>
              <input type="number" class="form-control" name="bidding_price" id="bidding_price" step=".01" placeholder="Bidding Price" min="0">
            </div>
            <small class="form-text text-muted">e.g. $35.00</small>
          </div>
          <div class="form-group">
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" name="deadline" placeholder="How long will it take to finish the project?">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
          </div>
          <input type="hidden" name="job_id" value="{{$job[0]->job_id}}">
          <div class="form-group">
            <textarea class="form-control" name="comment" id="comment" placeholder="Tell the employer why you should be hired. What are your experiences and skills?"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Bid Now</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $("#bid-now").click(function(){
      $(".bid-modal").modal("show");
    })
    $('.datepicker').datepicker();

    $("#bid-form").submit(function(e){
      e.preventDefault()
      $.ajax({
        url: '{{route('bid.project')}}',
        method: "post",
        data: $(this).serialize(),
        success: function(data){
          if(data.success==1){
            $(".bid-modal").modal("hide");

            $("#bid-form")[0].reset()

            alertify.success('Bid successful!');
                location.reload();
          }else if(data.success == -1){
            $(".bid-modal").modal("hide");
              alertify.warning('You already have an ongoing bid for this project!');
          }
          else{
            $(".bid-modal").modal("hide");

            alertify.error('Bid Error!');
          }
          console.log(data)
        },
        error: function(data){
          console.log("ajax error - bid")
        }
      })

    });

  </script>
@endsection
