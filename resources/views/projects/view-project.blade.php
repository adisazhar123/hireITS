@section('title')
  {{$job[0]->name}}
@endsection

@section('style')

  <style media="screen">

  body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
}
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
      border-top: none;
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
    margin-top: -250px;
    text-align: center;
    font-weight: bold;
  }

/*    .title h3{
      padding-top: 30px;
      font-weight: bold;
      color: white;
      font-size: 35px;

    }*/

    .fa-star{
      color: #FFAA2A;
    }

    .card-body{
      justify-content: center;
    }

    .card-body img{
      border-radius: 4px;
    }


    .backround{
  padding-top: 300px;
}

.project-time strong{
  color : #f39c12;
}

.alert-success {
    background-color: #6da768;
    text-align: center;
}

.btn-glamour {
  background-color: #EA5059 !important;
    color: white !important;
}

.btn-glamour:hover {
  background-color: #e23838 !important;
}
         .btn-primary {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;

}

.btn-primary:hover {
    color: #fff;
    background-color: #f39c12;
    border-color: #f39c12;
}

  </style>

@endsection

@extends('layouts.app')

@section('content')


    <div class="backround">

  </div>
  <div class="title">
    <div class="container">
       <h1>{{$job[0]->name}} Project</h1>
      <br><br>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissable">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


      </div>
      <div class="col-md-12">
        <div class="project-time" style="text-align: center;">
          <div class="row">
            <div class="col-md-1">
              <h5>Bids</h5>
              <strong>{{count($bids)}}</strong>
            </div>
            <div class="col-md-3">
              <h5>Average Bid Price</h5>
              <strong> {{number_format($avg_price, 2)}}</strong>
            </div>
            <div class="col-md-2">
              <h5>Project Budget</h5>
              <strong>

                ${{number_format($job[0]->price_max,2)}}
              </strong>
            </div>
            <div class="col-md-2" style="float: right">
              <h5>Days Left</h5>
              <strong>
                @php
                  $now = date_create(date("d-m-Y"));
                  $end = date_create(date_format(date_create($job[0]->deadline), "d-m-Y"));
                  $diff=date_diff($now, $end);
                  echo $diff->format('%d day/s left');
                @endphp
              </strong>
            </div>
            <div class="col-md-3">

              @if (Auth::check() && Auth::user()->role==="freelancer" && !$hasBid && $job[0]->active)
                <button id="bid-now" class="btn btn-primary" name="bid-now">Bid on this project</button>
              @elseif(Auth::check() && Auth::user()->role==="freelancer" && $hasBid && $job[0]->active)
                @if (isset($job[0]->wonby[0]->won_by_id) && $job[0]->wonby[0]->won_by_id == Auth::user()->id)

                @else
                  <div class="alert alert-success">
                    You are bidding on this project
                  </div>
                @endif
              @endif
              @if (Auth::check() && Auth::user()->id == $job[0]->employer_id && $job[0]->active && !$job[0]->no_of_bids)
                <form class="" action="{{route('delete.project')}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('delete')}}
                  <input type="hidden" name="job_id" value="{{$job[0]->job_id}}">
                  <button type="submit" class="btn btn-glamour" name="button">Delete Project</button>
                </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="project-desc" style="background-color: white; height: auto">
          <div class="project-title">
            <h3>Project Description</h3>

          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="desc" style="text-align: justify">
                 @php
                  echo $job[0]->description;
                 @endphp

              </div>

              <div class="employer-desc">
                <strong>About the employer</strong><br>
                <a href="{{route('view.employer', $job[0]->employer->username)}}">{{$job[0]->employer->username}}</a>
                <br>
                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="project-skills">
                <br>
                <strong>Skills required</strong>
                <br>
                @foreach ($skills as $skill)
                  <a href="#">{{$skill->name}}</a>

                @endforeach <br><br>
                @if ($job[0]->active)
                  <strong>Active :</strong><strong style="color:#6da768"> Yes</strong>
                @else
                  <strong>Active :</strong><strong style="color:#dd3535"> No</strong>
                @endif <br>
                @if ($job[0]->completed)
                  <strong>Completed :</strong><strong style="color:#6da768"> Yes</strong>
                @else <strong>Completed :</strong><strong style="color:#dd3535"> No</strong>
                @endif
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
            <h3>Freelancers Bidding</h3>
          </div>

          @php
            $counter=array();
            $counter = array_fill(0, 100, 0);
            $i=0;
          @endphp
          @if ($bids->isEmpty())
            <div class="bidders-body">
                <div class="card bid">
                    <div class="card-body">
                      <h5 style="color:#c6c4c4; text-align: center;">No bids.</h5>
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
                          @foreach ($bid->freelancer->profilefiles as $pf)
                            <img class="img-fluid" src="data:{{$pf->img_type}};base64,{{base64_encode( $pf->name )}}"/>
                            @php
                              $counter[$i]=1;
                            @endphp
                          @endforeach
                          @if (!$counter[$i])
                            <img class="img-fluid" src="{{asset('https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png')}}"/>
                          @endif
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
                          @if (!$bid->freelancer->rating || $bid->freelancer->rating == 0)
                            No ratings yet.
                          @else
                            @for ($i=0; $i < $bid->freelancer->rating; $i++)
                              <i class="fa fa-star" aria-hidden="true"></i>
                            @endfor
                          @endif

                        </div>
                        <div class="col-md-2">
                          @if (Auth::check() && $bid->freelancer_id == Auth::user()->id)
                            @foreach ($bid->job->wonby as $wonby)
                              @if ($wonby->won_by_id == $bid->freelancer_id && $bid->freelancer_id == Auth::user()->id)
                                <div class="alert alert-warning">
                                  You are hired and working on this project.
                                </div>
                                @break
                              @endif
                            @endforeach
                          @else
                            @foreach ($bid->job->wonby as $wonby)

                            @if ($wonby->won_by_id == $bid->freelancer->freelancer_id && !Auth::check()  || $wonby->won_by_id == $bid->freelancer->freelancer_id
                              && Auth::check() && $job[0]->employer_id != Auth::user()->id)
                              <div class="alert alert-success">
                                This freelancer won the bid!
                              </button>
                              </div>
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
                                  @elseif($job[0]->active)
                                      <button type="submit" class="btn btn-success hire-me" name="button">Hire me</button>
                                      @break
                                  @endif
                                @endforeach
                              @endif

                            </form>
                          @endif
                          @if (Auth::check() && Auth::user()->id == $bid->freelancer_id && $job[0]->active)
                              <form class="" action="{{route('cancel.bid')}}" method="post">
                                {{ csrf_field() }}
                                {{method_field('delete')}}
                                <input type="hidden" name="bid_id" value="{{$bid->bid_id}}">
                                <button id="cancel-bid" class="btn btn-glamour" type="submit" name="button">Cancel Bid</button>
                              </form>
                          @endif
                        </div>
                      </div>
                    </div>
              </div>
            </div>

            @php
              $i++;
            @endphp

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
              <input type="number" class="form-control" name="bidding_price" id="bidding_price" step=".01" placeholder="Bidding Price" min="0" required>
            </div>
            <small class="form-text text-muted">e.g. $35.00</small>
          </div>
          <div class="form-group">
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" name="deadline" placeholder="How long will it take to finish the project?" required>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
          </div>
          <input type="hidden" name="job_id" value="{{$job[0]->job_id}}">
          <div class="form-group">
            <textarea class="form-control" name="comment" id="comment" placeholder="Tell the employer why you should be hired. What are your experiences and skills?" required></textarea>
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
