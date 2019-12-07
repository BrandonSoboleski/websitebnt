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
  
  <title>6-12 Toppings Page</title>
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
  width: 50%;
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
<script type="text/javascript">
  var toppings = "";
  function allownext()
  {
    document.getElementById("btnnext").href="confirmation.php"; 
  }
  function add( ingredient ) {
    var type = 'Toppings: ';
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
<script src="https://brandonsoboleski.github.io/websitebnt/store2.js" type="text/javascript"></script>

<body>
  <section class="header5 cid-rFLInF4iNo mbr-fullscreen" id="header5-9">
    

    <div class="row" id="optiongrid">
      <div class="row">
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1" style="padding-left: 400px;color: white;"> Choose Toppings to Add on to your Sandwich</h1>
      </div>
      <div class="column">
        <div class="container">
          <img src="img_tomato.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="add('Tomato');allownext();" style="width:100%; height:40px;">Tomato</a>
        </div>
        <div class="container">
          <img src="t_avocado.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Avocado' )" style="width:100%; height:40px;">Avocado</a>
        </div>
        <div class="container">
          <img src="t_banana_peppers.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Banana Peppers' )" style="width:100%; height:40px;">Banana Peppers</a>
        </div>
        <div class="container">
          <img src="t_black_pepper.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Black Pepper' )" style="width:100%; height:40px;">BLack Pepper</a>
        </div>
        <div class="container">
          <img src="t_brussel_sprouts.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Brussel Sprouts' )" style="width:100%; height:40px;">Brussel Sprouts</a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img src="t_carrot.jpg" alt="sandwich" height="42" width="42" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Carrot' )" style="width:100%; height:40px;">Carrot</a>
        </div>
        <div class="container">
          <img src="t_cucumber.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Cucumber' )" style="width:100%; height:40px;">Cucumber</a>
        </div>
        <div class="container">
          <img src="t_green_pepper.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Green Pepper' )" style="width:100%; height:40px;">Green Pepper</a>
        </div>
        <div class="container">
          <img src="t_guacamole.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Guacamole' )" style="width:100%; height:40px;">Guacamole</a>
        </div>
        <div class="container">
          <img src="t_jalapeno_peppers.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Jalapeno Peppers' )" style="width:100%; height:40px;">Jalapeno Peppers</a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img src="t_lettuce.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Lettuce' )" style="width:100%; height:40px;">Lettuce</a>
        </div>
        <div class="container">
          <img src="t_mushrooms.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Mushrooms' )" style="width:100%; height:40px;">Mushrooms</a>
        </div>
        <div class="container">
          <img src="t_olives.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Olives' )" style="width:100%; height:40px;">Olives</a>
        </div>
        <div class="container">
          <img src="t_onions.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Onions' )" style="width:100%; height:40px;">Onions</a>
        </div>
        <div class="container">
          <img src="t_pickles.jpg" alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" onclick="allownext(); add( 'Pickles' )" style="width:100%; height:40px;">Pickles</a>
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