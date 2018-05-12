@section('style')
<style type="text/css">

.admin-panel {
  width: 100%;
  max-width:900px;
  margin: 50px auto;
  overflow: hidden;
  background-color:#fff;
  position:relative;

}

.slidebar {
/*  width:15%;
  float: left;*/
  background-color: #111;
  height:100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 65px;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}
.slidebar ul {
  position:relative;
  height:100%;
}

.slidebar a{
  color: #bbb;
  text-decoration:none;
}
.slidebar li{
  text-align:center;
  padding: 0x 0px;
}

ul {
  padding: 0;
  margin:0;
}
li {
  list-style-type: none;
  margin: 0;
  position: relative;
  text-align:center;
  color:#B3B3B3
}
.slidebar i {
  display:block;
  text-align:center;
  color:#B3B3B3;
  font-size: 40px;
  margin-bottom: 8px;
}

.slidebar ul a {
  color:#B3B3B3;
  text-decoration: none;
  box-sizing:border-box;
  display: block;
  text-transform: capitalize;
  padding: 20px;
}
.slidebar li:hover a, li#active{
  background-color: #313131;
}
.slidebar li:hover i, li#active i{
  color: #17BCE8;
}
.slidebar li:focus i {
  color: #17BCE8;
}

.main1 {
  width: 85%;
  background-color: rgb(255,255,255);
  position: relative;
  padding-left: 160px;

}

.main1 h2 {
  margin:1em 30px;
  color:#17BCE8;
  font-size: 20px;
  font-weight:600;
  border-bottom: 1px solid #bbb;
  padding: 0px 0px 10px 0px;
}


</style>
@endsection

@extends('layouts.app')

@section('content')
<div class="admin-panel">
    <div class="slidebar">
        <ul>
            <li><a href="" name="tab1"><i class="fa fa-tachometer"></i>General</a></li>
            <li><a href="" name="tab2"><i class="fa fa fa-gears"></i>On Going Projects</a></li>
            <li><a href="" name="tab3"><i class="fa fa-check"></i>Finished Projects</a></li>
            <!-- <li><a href="" name="tab4"><i class="fa fa-picture-o"></i>Portfolio</a></li>
            <li><a href="" name="tab6"><i class="fa fa-wrench"></i>Advanced</a></li> -->
        </ul>
    </div>

    <div class="main1">
         <div class="apa" id="tab1"><h2 class="header">Dashboard</h2>
           <p><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1><h1>fffmkssssssssssssssss</h1></p>

         </div>
         <div id="tab2"><h2 class="header">On Going Projects</h2></div>
         <div id="tab3"><h2 class="header">Finished Projects</h2></div>
         <!-- <div id="tab4"><h2 class="header">Portfolio</h2></div>
         <div id="tab5"><h2 class="header">Blog /news</h2></div>
         <div id="tab6"><h2 class="header">Advanced</h2></div>    -->
    </div>


</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
  $(".main1 div").hide();
  // Cache tout les textes et les sous-menu

  $(".slidebar li:first").attr("id","active");
  // Ajoute la class active au premier menu

  $(".main1 div:first").fadeIn();
  // Montre le premier texte à l'apparition de la page


  $('.slidebar a').click(function(e) {
      e.preventDefault();
     if ($(this).closest("li").attr("id") == "active"){
          //si le menu cliquer est déjà ouvert.
       return
     }else{
       $(".main1 div").hide();
          // Cache tous les éléments

        $(".slidebar li").attr("id","");
          // Rénitialise tout les menu active

        $(this).parent().attr("id","active");
          // active le parent du li selectionner

        $('#' + $(this).attr('name')).fadeIn();
          // Montre le texte
        }


  });

});
</script>
@endsection
