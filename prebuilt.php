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
  
  <title>6-12 Prebuilt Page</title>
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
  width: 60%;
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
<!-- <script src="connection.js" type="text/javascript"></script> -->

<script type="text/javascript">
  function allownext()
  {
    document.getElementById("btnnext").href="customize_prebuilt_page.php"; 
  }
  function add( i ) {
    sandwich = store.get('prebuilt')[i-1];
    store.set( 'Bread: ', sandwich.bread );
    store.set( 'Meats: ', sandwich.meat );
    store.set( 'Cheeses: ', sandwich.cheese );
    store.set( 'Toppings: ', sandwich.toppings);
    store.set( 'Sauces: ', sandwich.sauce);
  }
  function btnfill()
  {
    prebuilts = JSON.parse(localStorage.getItem('prebuilt'));
    
    for (i = 0; i < 9; i++) { 
      document.getElementById(i+1).innerHTML = prebuilts[i].food_name;
    }
  }
  function imgfill()
  {
    prebuilts = JSON.parse(localStorage.getItem('prebuilt'));
    for (var i = 9; i < 18; i++) { 
      document.getElementById(i+1).src = prebuilts[i-9].image;
    }
  }
  function load() {
    btnfill();
    imgfill();
  }

</script>
<!-- <body onload="load();"> -->
<body onload="load();">
  <section class="header5 cid-rFLInF4iNo mbr-fullscreen" id="header5-9">
    

    <div class="row" id="optiongrid">
      <div class="row">
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"  style="padding-left: 400px;color: white;"> Choose a Prebuilt Sandwich</h1>
      </div>
      <div class="column">
        <div class="container">
          <img alt="sandwich" id = 10 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 1 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 11 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 2 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 12 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 3 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img alt="sandwich" id = 13 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 4 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 14 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 5 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 15 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 6 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img alt="sandwich" id = 16 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 7 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 17 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 8 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img alt="sandwich" id = 18 style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id = 9 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
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