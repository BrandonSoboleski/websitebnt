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
  
  <title>6-12 Filling Page</title>
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
  width: 80%;
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
    document.getElementById("btnnext").href="cheese.php"; 
  }
  function add( i ) {
    Meat = JSON.parse(localStorage.getItem('meat'));
    if(store.get("Meats: ")!= null)
    {
      if(store.get("Meats: ").indexOf(Meat[i-1].food_name) > -1)
      {
        //console.log("here");
        var element = document.getElementById(i);
        element.style.backgroundColor = "#FFC35B";
        var chee = store.get("Meats: ");
        var index = chee.indexOf(Meat[i-1].food_name);
        if (index !== -1) chee.splice(index, 1);
        store.set('Meats: ', chee);
        var index = chee.indexOf(Meat[i-1].food_name);
        if (index !== -1) chee.splice(index, 1);
        store.set('Meats: ', chee);
        var index = chee.indexOf(Meat[i-1].food_name);
        if (index !== -1) chee.splice(index, 1);
        store.set('Meats: ', chee);
      }else
      {
        btncol(i);
        var ingredient = Meat[i-1].food_name;
        var type = 'Meats: ';
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
      var ingredient = Meat[i-1].food_name;
      var type = 'Meats: ';
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
    Meat = JSON.parse(localStorage.getItem('meat'));
    for(var i = 1; i<7;i++)
    {
      if(id!=i)
      {
        var element = document.getElementById(i);
        element.style.backgroundColor = "#FFC35B";
        allownext();
      }
      if(store.get("Meats: ") != null){
        if(store.get("Meats: ").indexOf(Meat[i-1].food_name) > -1)
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
    meat = JSON.parse(localStorage.getItem('meat'));
    
    for (i = 0; i < 6; i++) { 
      document.getElementById(i+1).innerHTML = meat[i].food_name;
    }
  }
  function imgfill()
  {
    meat = JSON.parse(localStorage.getItem('meat'));
    for (i = 6; i < 12; i++) { 
      document.getElementById(i+1).src = meat[i-6].image;
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
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"  style="padding-left: 400px;color: white;">Choose a Type of Meat/Filling</h1>
      </div>
      <div class="column">
        <div class="container">
          <img src="img_ham.jpg" id = 7 alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id=1 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img src="img_roast_beef.jpg" id = 8 alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id=2 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img src="img_meatballs.jpg" id = 9 alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id=3 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img src="img_turkey.jpg" id = 10 alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id=4 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <img src="img_buffalo_chicken.jpg" id = 11 alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id=5 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
        </div>
        <div class="container">
          <img src="img_tofu.jpg" id = 12 alt="sandwich" style="width:100%; padding-bottom: 60px;padding-left: 10px;">
          <a class="btn btn-md btn-white-outline display-4" id=6 onclick="allownext();add( id );" style="width:100%; height:40px;"></a>
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