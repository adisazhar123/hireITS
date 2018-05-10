@section('style')
  <style media="screen">
  .editor{
    margin-bottom: 20px;
  }

  .editor.ql-container{
    border: 1px solid #ccd0d2;
    border-top: none;
    border-width: 1px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    background-color: white;
  }

  .ql-toolbar.ql-snow{
    border: 1px solid #ccd0d2;
    border-bottom: none;
    border-width: 1px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    background-color: white;
  }
  </style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="container animated fadeIn" >
    <div class="row">
      <h3>Tell us what you need done</h3>
    </div>
    <div class="row">
      <form action="{{route('store.project')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="name">Choose a name for your project</label>
          <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="e.g. Build me a website">
        </div>
        <div class="form-group">
          <label for="desc">Tell us more about your project</label><br>
          <small>Great project descriptions include a little bit about yourself, details of what you are trying to achieve, and any decisions that you have already made about your project. If there are things you are unsure of, don't worry, a freelancer will be able to help you fill in the blanks.</small>
          <div class="editor animated fadeIn" class="form-control">

          </div>
          <input type="hidden" name="description" value="" id="description">
        </div>
        <div class="form-group">
          <label for="minimum-budget">Minimum budget</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">$</span>
            </div>
            <input type="number" name="min_price" class="form-control" id="price1" placeholder="Enter min. price" min="0">
          </div>
        </div>
        <div class="form-group">
          <label for="max-budget">Maximum budget</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">$</span>
            </div>
            <input type="number" name="max_price" class="form-control" id="price2" placeholder="Enter max. price" min="0">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group date" data-provide="datepicker">
            <label for="deadline">Deadline</label>
              <input type="text" class="form-control" name="date" placeholder="Deadline">
              <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
              </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Images</label>
          <input type="file" name="photos[]" multiple />
          <br>
          <small>Drag & drop any images or documents that might be helpful in explaining your project brief here.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
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
  $('.datepicker').datepicker();


    $("form").submit(function(){
      var desc =   quill.root.innerHTML;
      $("#description").val(desc);
    });


  

  </script>
@endsection
