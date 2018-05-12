@section('style')
  <style media="screen">
body {
  margin: auto;
  background: #eaeaea;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #D66C44 ;
  color: #FFF;
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:center;
  text-transform: uppercase;
}

form {
  border-radius: 5px;
  max-width:700px;
  width:100%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
  text-align:justify; 
}

h1 {
  text-align:center; 
  color: #666;
  text-shadow: 1px 1px 0px #FFF;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 94%;
  height: 41px;
  float: left;
  padding: 0px 15px;
}

a {
  text-decoration:inherit
}

textarea {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #EEE;
  margin: 0;
  width: 75%;
  height: 130px; 
  float: left;
  padding: 0px 15px;
}

.form-group {
  overflow: hidden;
  clear: both;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px;
}

.bouton-contact{
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

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
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

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}
  
  </style>
@endsection

@extends('layouts.app')

@section('content')
<body>
   <!--  <h1>Tell us what you need done</h1> -->
   <!-- <div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> Made with <i class="fa fa-heart"></i> by Marion Grandvincent </p></a></div> -->
  
  <form action="{{route('store.project')}}" method="POST" enctype="multipart/form-data">
      <h1>Tell us what you need done</h1>
      <div class="contentform">
        <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <h5>Choose a name for your project<span>*</span></h5>
              <span class="icon-case"><i class="fa fa-file-code-o"></i></span>
                <input type="text" name="name" id="name" aria-describedby="emailHelp" placeholder="e.g. Build me a website">
            </div> 

            <div class="form-group">
            <h5>Name <span>*</span></h5>
            <p>Great project descriptions include a little bit about yourself, details of what you are trying to achieve, and any decisions that you have already made about your project. If there are things you are unsure of, don't worry, a freelancer will be able to help you fill in the blanks.</p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
            <input name="description" value="" id="description">
      </div>

      <div class="form-group">
      <h5>Minimum budget <span>*</span></h5>  
      <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">Rp</span>
            </div>
            <input type="number" name="min_price" class="form-control" id="price1" placeholder="Enter min. price" min="0">
          </div>
      </div>  

      <div class="form-group">
      <h5>Maximum budget <span>*</span></h5>
      <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">Rp</span>
            </div>
            <input type="number" name="max_price" class="form-control" id="price2" placeholder="Enter max. price" min="0">
          </div>
      </div>

      <div class="form-group">
      <h5>Deadline<span>*</span></h5>
      <span class="icon-case"><i class="fa fa-calendar"></i></span>
        <div class="input-group date" data-provide="datepicker">
              <input type="text" class="form-control" name="date" placeholder="Deadline">
              <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
              </div>
          </div>
      </div>


        
          
       

      <div class="form-group">
        <h5>Images <span>*</span></h5>
      <small>Drag & drop any images or documents that might be helpful in explaining your project brief here.</small>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="photos[]" multiple />
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
</div> 


      <div class="form-group">
      <p>City <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building-o"></i></span>
        <input type="text" name="ville" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
      </div>  
      <div class="form-group">
      <p>Message <span>*</span></p>
      <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                <div class="validation"></div>
      </div>  
  </div>

<button type="submit" class="btn btn-primary bouton-contact">Submit</button>
  
</form> 

  
</body>
</html>
@endsection

@section('script')
  <script type="text/javascript">


  </script>
@endsection
