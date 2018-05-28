@section('style')
  <style media="screen">

  body{
    background-color: #E9E9E9;
  }


      .title{
        padding-top: 250px;
    margin-top: -250px;
    font-weight: bold;
    text-align: center;
  }

    .title h1 h4{
      
      font-weight: bold;
      color: white;
      font-size: 35px;
      

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
      height: 220px;
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
      color: grey;
    }

    .bid-btn{
      border: 0;
      border-radius: 3px;
      color: white;
      font-weight: bold;
      background-color: rgba(79,181,93,0.8);
      text-decoration: none;
      display: none;
      margin-left: 10px;
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

    .backround{
    padding-top: 50px;
    background-color: rgba(0,0,0,0);
  }


    input[type=range] {
  -webkit-appearance: none;
  width: 100%;
  margin: 4.8px 0;
    }
    input[type=range]:focus {
      outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
      width: 100%;
      height: 8.4px;
      cursor: pointer;
      box-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.44), 0px 0px 0.5px rgba(13, 13, 13, 0.44);
      background: #006da9;
      border-radius: 1.3px;
      border: 0.2px solid #010101;
    }
    input[type=range]::-webkit-slider-thumb {
      box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
      border: 1.5px solid #000000;
      height: 18px;
      width: 14px;
      border-radius: 50px;
      background: #ff9621;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -5px;
    }
    input[type=range]:focus::-webkit-slider-runnable-track {
      background: #0077b8;
    }
    input[type=range]::-moz-range-track {
      width: 100%;
      height: 8.4px;
      cursor: pointer;
      box-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.44), 0px 0px 0.5px rgba(13, 13, 13, 0.44);
      background: #006da9;
      border-radius: 1.3px;
      border: 0.2px solid #010101;
    }
    input[type=range]::-moz-range-thumb {
      box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
      border: 1.5px solid #000000;
      height: 18px;
      width: 14px;
      border-radius: 50px;
      background: #ff9621;
      cursor: pointer;
    }
    input[type=range]::-ms-track {
      width: 100%;
      height: 8.4px;
      cursor: pointer;
      background: transparent;
      border-color: transparent;
      color: transparent;
    }
    input[type=range]::-ms-fill-lower {
      background: #00639a;
      border: 0.2px solid #010101;
      border-radius: 2.6px;
      box-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.44), 0px 0px 0.5px rgba(13, 13, 13, 0.44);
    }
    input[type=range]::-ms-fill-upper {
      background: #006da9;
      border: 0.2px solid #010101;
      border-radius: 2.6px;
      box-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.44), 0px 0px 0.5px rgba(13, 13, 13, 0.44);
    }
    input[type=range]::-ms-thumb {
      box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
      border: 1.5px solid #000000;
      height: 18px;
      width: 14px;
      border-radius: 50px;
      background: #ff9621;
      cursor: pointer;
      height: 8.4px;
    }
    input[type=range]:focus::-ms-fill-lower {
      background: #006da9;
    }
    input[type=range]:focus::-ms-fill-upper {
      background: #0077b8;
    }

    .job-desc{
      text-align: justify;
    }

    .job-price h4{
      padding-right: 15px;
      font-size: 18px;
    }

    .job-price{
      padding-left: 20px;
    }

    @media only screen and (min-width: 768px) {
      .jobs-body:hover .bid-btn{
        display: block;
      }
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

<!--   <div class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Top jobs</h3>
        </div>
      </div>
    </div>
  </div> -->
<!--   <nav aria-label="breadcrumb" id="breadcrumb">
    <div class="container">
      <div class="row">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">hireITS</a></li>
            <li class="breadcrumb-item active"><a href="#">Jobs</a></li>
          </ol>
      </div>

    </div>

</nav>
 -->
   <div class="backround">

  </div>

  <div class="title">
    <div class="container">
      <h1>Find Projects</h1>
      <h4>PIKIRPIKIRPIKIR</h4><br><br>
    </div>

  </div>
  <div class="search-jobs">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="search-project" action="{{route('browse.jobs')}}" method="get">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn" disabled id="search-logo" type="button" name="button"><i class="fa fa-search fa-lg" aria-hidden="true"></i>
                  </button>
                </div>
                <input type="text" class="form-control mb-2" id="keywords" name="keywords" placeholder="Search Keywords">
                <input type="hidden" id="min_price" name="min_price" value="">
                <input type="hidden" id="max_price" name="max_price" value="">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
    <div class="container">
      @php
      $result = count($jobs);
      @endphp

      @if ($result && empty($keyword))
        <p>{{$jobs->total()}} result/s found</p>
      @elseif ($result)
        <p>{{$jobs->total()}} result/s found for {{$keyword}}</p>
      @else
        <p>0 result/s found for {{$keyword}}</p>

      @endif

    </div>
  </div>
  <div class="jobs-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="filter" style="background-color: white;">
            <div class="toggle-filter" style="width: 100%; padding-left: 20px; padding-top: 2px; cursor: pointer" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                <i class="fa fa-wrench fa-lg" style='color: black;'></i>
            </div>
            <div class="filter-content show multi-collapse" id="multiCollapseExample2">
              <h5>Filter by:</h5>
              <h6><strong>Budget</strong></h6>
              <input type="checkbox" name="" value=""> Average Bid <br>
              <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend">$</span>
                    </div>
                    @if (isset($_GET['min_price']))
                      @php
                        $min=$_GET['min_price'];
                      @endphp
                      @else
                        @php
                          $min="";
                        @endphp
                    @endif

                    @if (isset($_GET['max_price']))
                      @php
                        $max=$_GET['max_price'];
                      @endphp
                      @else
                        @php
                          $max="";
                        @endphp
                    @endif
                    <input class="form-control" id="min_price1" type="number" value="{{$min}}" placeholder="Min Price" min="1" max="9999999" step="0.50"> <br>
                  </div><br>
                  <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">$</span>
                        </div>
                        <input class="form-control" id="max_price1" type="number" value="{{$max}}" placeholder="Max Price" min="1" max="9999999" step="0.50"> <br>
                      </div>
                    </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="available-jobs mb-2" style="background-color: white;">
            <div class="jobs-head mb-2" style="padding: 20px">
              <form class="" action="index.html" method="post">
                <select class="" name="order">
                  <option value="newest-first">Newest First</option>
                  <option value="lowest-budget-first">Lowest Budget First</option>
                  <option value="highest-budget-first">Highest Budget First</option>
                  <option value="lowest-bid">Lowest bid/entries</option>
                  <option value="highest-bid">Highest bid/entries</option>
                </select>
              </form>
            </div>
          </div>
              <div class="here">
                @include('projects.project-list')
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

  var lowestBudget="?filter=lowestbudget";
  var highestBudget="?filter=highestbudget";
  var lowestBid="?filter=lowestbid";
  var highestBid="?filter=highestbid";
  var filter="";
  var keywords="";
  var appendUrl="";

  $(window).resize(function(){
    if ($(document).width()<=768){
      $(".filter-content").removeClass("show");
      $(".filter-content").addClass("collapse");
    }else{
      $(".filter-content").removeClass("collapse");
      $(".filter-content").addClass("show");
    }
  });

  $('body').on('click', '.pagination a', function(e) {
    e.preventDefault();
    $('#load a').css('color', '#dfecf6');
    $('#load').append('<img style="position: absolute; left: 30%; top: 0; z-index: 100000;" src="{{asset('loading.gif')}}" alt="loading..." />');
    var pageNo = $(this).text()

    if (pageNo.includes('»')){
      pageNo = $(".pagination").find(".page-item.active .page-link").text();
      pageNo = parseInt(pageNo)+1
    }
    else if(pageNo.includes('«')){
      pageNo = $(".pagination").find(".page-item.active .page-link").text();
      pageNo = parseInt(pageNo)-1
    }

    if (!$(location).attr('search').includes('page'))
      appendUrl = "&"+$(location).attr('search').slice(1)

    var temp = $(location).attr('search');

    if(!appendUrl.includes('filter'))
    if (temp.includes('filter')){
      if(temp.includes('highest-budget'))
        appendUrl+="&filter=highest-budget-first";
      else if (temp.includes('lowest-budget'))
        appendUrl+="&filter=lowest-budget-first";
      else if (temp.includes('lowest-bid'))
        appendUrl+="&filter=lowest-bid";
      else if (temp.includes('highest-bid'))
        appendUrl+="&filter=highest-bid";
      else if (temp.includes('newest-first'))
        appendUrl+="&filter=newest-first";
    }

    url="/jobs?page="+pageNo;
    getJobs(url+appendUrl);
    window.history.pushState("", "", url+appendUrl);

});

function getJobs(url){
  $.ajax({
            url : url
        }).done(function (data) {
            $('.here').html(data);
        }).fail(function () {
            alert('jobs could not be loaded.');
        });
    }

    $(document).on('change','select',function(){
      //utk dapetin variable keyword di URL
      @if (isset($_GET['keywords']))
        keywords = "?keywords="+'{{$_GET['keywords']}}';

      @else
        keywords = "";
      @endif

      @if (isset($_GET['min_price']))
        min_price ="&min_price="+'{{$_GET['min_price']}}';
      @else
        min_price="";
      @endif

      @if (isset($_GET['max_price']))
        max_price ="&max_price="+'{{$_GET['max_price']}}';
      @else
        max_price="";
      @endif

      //keywords = $(location).attr('search')
      //kalo gak keyword
      //if(!keywords.includes('keywords'))
      //  keywords="";
      //kalo gada keyword harus di-set ?
      if(keywords=="")
        filter="?filter="+$(this).find('option:selected').val();
      //kalo ada keyword maka di-set & biar lgsg disambungin di URL
      else filter="&filter="+$(this).find('option:selected').val();


      //if ($(location).attr('search').includes('filter'))

      $('#load').append('<img style="position: absolute; left: 30%; top: 0; z-index: 100000;" src="{{asset('loading.gif')}}" alt="haha" />');

      $.ajax({
        url :"/jobs"+keywords+filter,
        success: function(data){
          console.log("/jobs"+keywords+filter+min_price+max_price)
          window.history.pushState("","","/jobs"+keywords+filter+min_price+max_price);
          $('#load').html(data);
        },
        error: function(data){
          console.log(data);
        }
      })
      //alert(keywords)
    })

    $(".search-project").submit(function(){
      $("#max_price").val($("#max_price1").val())
      $("#min_price").val($("#min_price1").val())
    });

  </script>
@endsection
