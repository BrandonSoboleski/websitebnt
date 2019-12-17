<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Prebuilt page for the 6-12 sandwich builder.">
  
  <title>6-12 Sauce Page</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<style>
.container {
  position: relative;
  width: 65%;
  max-width: 400px;
}

.container img {
  width: 60%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, 140%);
  -ms-transform: translate(-50%, -50%);
  background-color: #FFC35B;
  color: white;
  font-size: 20px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: orange;

}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<script src="https://brandonsoboleski.github.io/websitebnt/store2.js" type="text/javascript"></script>

<script type="text/javascript">
  function allownext()
  {
    document.getElementById("btnnext").href="topping.php"; 
  }
  function add( i ) {
    Sauce = JSON.parse(localStorage.getItem('sauce'));
    if(store.get("Sauces: ")!= null)
    {
      if(store.get("Sauces: ").indexOf(Sauce[i-1].food_name) > -1)
      {
        //console.log("here");
        var element = document.getElementById(i);
        element.style.backgroundColor = "#FFC35B";
        var chee = store.get("Sauces: ");
        var index = chee.indexOf(Sauce[i-1].food_name);
        if (index !== -1) chee.splice(index, 1);
        store.set('Sauces: ', chee);
        var index = chee.indexOf(Sauce[i-1].food_name);
        if (index !== -1) chee.splice(index, 1);
        store.set('Sauces: ', chee);
        var index = chee.indexOf(Sauce[i-1].food_name);
        if (index !== -1) chee.splice(index, 1);
        store.set('Sauces: ', chee);
      }else
      {
        btncol(i);
        var ingredient = Sauce[i-1].food_name;
        var type = 'Sauces: ';
        if(store.get( type )!=null)
        {
          var list = store.get( type );
          list.push(ingredient);
          store.set( type, list );
        }else{
          var inglist = [ingredient];
          store.set( type, inglist );
        }
      }
    }else
    {
      btncol(i);
      var ingredient = Sauce[i-1].food_name;
      var type = 'Sauces: ';
      if(store.get( type )!=null)
      {
        var list = store.get( type );
        list.push(ingredient);
        store.set( type, list );
      }else{
        var inglist = [ingredient];
        store.set( type, inglist );
      }
    }
    
  }
  function btncol(id)
  {
    var element = document.getElementById(id);
    element.style.backgroundColor = "#d4612c";
    Sauce = JSON.parse(localStorage.getItem('sauce'));
    for(var i = 1; i<16;i++)
    {
      if(id!=i)
      {
        var element = document.getElementById(i);
        element.style.backgroundColor = "#FFC35B";
      }
      if(store.get("Sauces: ") != null){
        if(store.get("Sauces: ").indexOf(Sauce[i-1].food_name) > -1)
        {
          allownext();
          var element = document.getElementById(i);
          element.style.backgroundColor = "#d4612c";
        }
      }
    }
  }
  function btnfill()
  {
    sauce = JSON.parse(localStorage.getItem('sauce'));
    
    for (i = 0; i < 15; i++) { 
      document.getElementById(i+1).innerHTML = sauce[i].food_name;
    }
  }
  function imgfill()
  {
    sauce = JSON.parse(localStorage.getItem('sauce'));
    for (i = 15; i < 30; i++) { 
      document.getElementById(i+1).src = sauce[i-15].image;
    }
  }
  function load() {
    allownext();
    add( 1 );
    add( 1 );
    btnfill();
    imgfill();
  }
</script>
<body onload="load();">
  <section class="header5 cid-rFLInF4iNo mbr-fullscreen" id="header5-9">
    

    <div class="row" id="optiongrid">
      <div class="row">
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"  style="padding-left: 400px;color: white;"> Choose Sauces to Add on to your Sandwich</h1>
      </div>
      <div class="column">
        <div class="container">
          <img alt="sandwich" id = 16 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 1 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 17 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 2 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 18 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 3 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 19 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 4 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 20 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 5 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img alt="sandwich" id = 21 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 6 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 22 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 7 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 23 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 8 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 24 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 9 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 25 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 10 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img alt="sandwich" id = 26 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 11 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 27 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 12 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 28 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 13 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 29 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 14 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 30 height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 15 onclick="allownext(); add( id )" style="width:100%; height:40px;"></a>
        </div>
	  </div>
  </div>
  
	<div class="container" id="conttainnext">
			<a class="btn btn-md btn-white-outline display-4"   style="width:300px;height:40px;background-color: #de1822;" id="btnnext">Next</a>
	</div>

</section>


  <section class="engine"><a href="https://mobirise.info/v">free html templates</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>