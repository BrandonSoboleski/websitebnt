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
  function add( ingredient ) {
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
</script>
<body>
  <section class="header5 cid-rFLInF4iNo mbr-fullscreen" id="header5-9">
    

    <div class="row" id="optiongrid">
      <div class="row">
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"  style="padding-left: 400px;color: white;"> Choose Sauces to Add on to your Sandwich</h1>
      </div>
      <div class="column">
        <div class="container">
          <img src="img_mustard.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Mustard' )" style="width:100%; height:40px;">Mustard</a>
        </div>
        <div class="container">
          <img src="sa_barbeque.jpeg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Barbeque' )" style="width:100%; height:40px;">Barbeque</a>
        </div>
        <div class="container">
          <img src="sa_buffalo.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Buffalo' )" style="width:100%; height:40px;">Buffalo</a>
        </div>
        <div class="container">
          <img src="sa_chipotle.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Chipotle' )" style="width:100%; height:40px;">Chipotle</a>
        </div>
        <div class="container">
          <img src="sa_garlic_aioli.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Garlic Aioli' )" style="width:100%; height:40px;">Garlic Aioli</a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img src="sa_honeymustard.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Honey Mustard' )" style="width:100%; height:40px;">Honey Mustard</a>
        </div>
        <div class="container">
          <img src="sa_horseradish.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Horseradish' )" style="width:100%; height:40px;">Horseradish</a>
        </div>
        <div class="container">
          <img src="sa_ketchup.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Ketchup' )" style="width:100%; height:40px;">Ketchup</a>
        </div>
        <div class="container">
          <img src="sa_marinara.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Marinara' )" style="width:100%; height:40px;">Marinara</a>
        </div>
        <div class="container">
          <img src="sa_mayonnaise.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Mayonnaise' )" style="width:100%; height:40px;">Mayonnaise</a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img src="sa_oil.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Oil' )" style="width:100%; height:40px;">Oil</a>
        </div>
        <div class="container">
          <img src="sa_ranch.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Ranch' )" style="width:100%; height:40px;">Ranch</a>
        </div>
        <div class="container">
          <img src="sa_spicymustard.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Spicy Mustard' )" style="width:100%; height:40px;">Spicy Mustard</a>
        </div>
        <div class="container">
          <img src="sa_sriracha.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Sriracha' )" style="width:100%; height:40px;">Sriracha</a>
        </div>
        <div class="container">
          <img src="sa_vinegar.jpg" alt="sandwich" height="452" width="612" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Vinegar' )" style="width:100%; height:40px;">Vinegar</a>
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