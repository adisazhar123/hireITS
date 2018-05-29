@section('title')
  Post Project
@endsection

@section('style')
<style media="screen">

.main-container{
  max-height: 60vh !important;
}

body {
  background : url("https://cdn.shopify.com/s/files/1/0153/0623/products/Bead_Board_Wallpaper_in_White_by_York_Wallcoverings_c9f50134-b90a-4d8c-aae3-75328c6a804e_large.jpg?v=1450293667");
}

.post .info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.title-top{
  height: 100px;
  background-color: #0087E0;
}

  .title-top h3{
    padding-top: 30px;
    font-weight: bold;
    color: white;
    font-size: 35px;

  }

  .post .info i {
    color:#F6AA93;
  }

  .title{
    background: #f1c40f ;
    text-shadow: none;
    text-align:center;
    text-transform: uppercase;
    font-size: 18px;
    color: #FFF;
    padding: 0.5em;
  }

  form.post {
    border-radius: 5px;
    max-width:800px;
    margin: 5% auto;
    background-color: #FFFFFF;
    overflow: hidden;
  }

  p span {
    color: #F00;
  }

  .post p {
    margin: 0px;
    font-weight: 500;
    line-height: 2;
    color:#333;
    text-align:justify;
  }


  .post input {
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #eee;
    margin-bottom: 15px;
    width: 100%;
    height: 41px;
    float: left;
    padding: 0px 15px;
  }

  .post a {
    text-decoration:inherit
  }


  .post .icon-case {
    width: 35px;
    float: left;
    border-radius: 5px 0px 0px 5px;
    background:#eeeeee;
    height:42px;
    position: relative;
    text-align: center;
    line-height:40px;
  }

  .post i {
    color:#555;
  }

  .post .contentform {
    padding: 40px 30px;
  }

  .post .bouton-contact{
    background-color: #81BDA4;
    color: #FFF;
    text-align: center;
    width: 100%;
    border:0;
    padding: 17px 25px;
    border-radius: 0px 0px 5px 5px;
    cursor: pointer;
    margin-top: 40px;
    font-size: 18px;
  }

  .post .leftcontact {
    width:49.5%;
    float:left;
    border-right: 1px dotted #CCC;
    box-sizing: border-box;
    padding: 0px 15px 0px 0px;
  }

  .post .rightcontact {
    width:49.5%;
    float:right;
    box-sizing: border-box;
    padding: 0px 0px 0px 15px;
  }

  .validation {
    display:none;
    margin: 0 0 10px;
    font-weight:400;
    font-size:13px;
    color: #DE5959;
  }

  .ql-toolbar.ql-snow{
    border: 1px solid #ccd0d2;
    border-bottom: none;
    border-width: 1px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    background-color: white;
  }

  .editor{
    margin-bottom: 10px;
  }
  .editor.ql-container{
    border: 1px solid #ccd0d2;
    border-top: none;
    border-width: 1px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    background-color: white;
  }


  .ql-editor:focus{
    color:#495057;
    background-color:#fff;
    border-color:#98cbe8;
    outline:0;
    box-shadow:0 0 0 .2rem rgba(0,123,255,.25);

  }

  p{
    font-size: 13px;
  }

  .submitt{
     text-align: center;
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

  <div class="container">
    @if ($errors->any())
      <br>
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
    </button>
        </div>
    @endif
    @if(session()->has('success'))
      <br>
      <div class="alert alert-success alert-dismissible">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
      </div>
    @endif
    @if(session()->has('error'))
      <br>
      <div class="alert alert-danger alert-dismissible">
        {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
    @endif
    <form action="{{route('store.project')}}" method="POST" enctype="multipart/form-data" class="animated fadeIn post">
      <div class="title">
        <h2>Post A Project</h2>
        <h4>Tell us what you need done</h4>
      </div>
        <div class="contentform">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <h6>Choose a name for your project <span>*</span></h6>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="icon-case"><i class="fa fa-file-code-o"></i></span>
                  </div>
                  @php
                    if (isset($_GET['q'])) {
                      echo "<input type=text name=name id=name class=form-control value='".$_GET['q']."' placeholder='e.g. Build me a website' required>";
                    }else{
                      echo '<input type="text" name="name" id="name" class="form-control" placeholder="e.g. Build me a website" required>';
                    }
                  @endphp
                  <br>
                </div>
                <small id="counter"></small>
              </div>

              <div class="form-group">
              <h6>Description <span>*</span></h6>
              <p>Great project descriptions include a little bit about yourself, details of what you are trying to achieve, and any decisions that you have already made about your project. If there are things you are unsure of, don't worry, a freelancer will be able to help you fill in the blanks.</p>
              <div class="editor animated fadeIn">

              </div>
              <input type="hidden" name="description" value="" id="description">
        </div>

        <div class="form-group">
        <h6>Minimum budget <span>*</span></h6>
        <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
              </div>
              <input type="number" name="min_price" class="form-control" id="price1" placeholder="Enter min. price" min="0" step="0.1" required>
            </div>
        </div>

        <div class="form-group">
        <h6>Maximum budget <span>*</span></h6>
        <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
              </div>
              <input type="number" name="max_price" class="form-control" id="price2" placeholder="Enter max. price" min="0" step="0.1" required>
            </div>
        </div>

        <div class="form-group">
        <h6>Deadline<span>*</span></h6>
          <div class="input-group date" data-provide="datepicker">
            <span class="icon-case"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control" name="date" placeholder="Deadline" required>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
          <h6 for="tag_list">Tags</h6>
          <select class="form-control" id="search_skills" name="search_skills[]" multiple required></select>
        </div>
        <div class="form-group">
          <h6 for="">Files<span>*</span></h6>
          <p>Drag & drop any images that might be helpful in explaining your project brief here.</p>
          <input type="file" class="form-control" name="photos[]" multiple required><br>

        </div>
        <div class="submitt">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </div>
    </form>

      </div>




@endsection

@section('script')

  <script type="text/javascript">

  var date = new Date();

  $("form").submit(function(){
    var desc =   quill.root.innerHTML
    $("#description").val(desc)
    if ($("#name").val().length > 30){
      alertify.error("Title is too long.")
      return false;
    }

    if(parseInt($("#price1").val()) > parseInt($("#price2").val())){
      alertify.error("Minimum budget has to be lower than maximum budget.")
      return false;
    }
  });

  $('#search_skills').select2({
    placeholder: 'Select an item',
    ajax: {
      url: '/getSkills',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    text: item.name,
                    id: item.skills_id
                }
            })
        };
      },
      cache: true
    }
  });

  var toolbarOptions = [
    ['bold', 'italic', 'underline'],
    [{ 'list': 'ordered'}, { 'list': 'bullet' }]
  ];

  var formats = [
  'bold',
  'italic',
  'underline',
  'list',
  ];

  var quill = new Quill('.editor', {
    modules: {
      toolbar: toolbarOptions
    },
    theme: 'snow',
    formats: formats
  });

  $("#name").keyup(function(){
    var awal=30;
    $("#counter").text(30 - $("#name").val().length +" left")
    if($("#counter").text()<0)
      $("#counter").css('color', 'red')
    else {
      $("#counter").css('color', 'black')

    }
  })


  </script>
@endsection
