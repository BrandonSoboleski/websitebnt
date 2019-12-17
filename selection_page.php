<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.11.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Selection page for the 6-12 sandwich builder.">
  
  <title>6-12 Selection Page</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<style>
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

  var link = "";
  function prebuilt()
  {
    link="prebuilt.php";
  }
  function custom()
  {
    link = "bread.php"; 
  }
  function addsize( ingredient ) {
    var type = 'Size: ';
    store.set( type, ingredient );
    document.getElementById("btnnext").href=link;
  }
  function addcustomer( ingredient ) {
    var type = 'Location: ';
    store.set( type, ingredient);

    var t=<?php 
      $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }
      
      $sql="SELECT * FROM prebuilt7";
      $result = mysqli_query($con,$sql);

      $rows = array();
      while($r = mysqli_fetch_assoc($result)) {  
          $arr=array("toppings","sauce","meat", "cheese");  
          foreach ($arr as &$value) { 
            $r[$value] = explode(",", $r[$value]);
            if($r[$value][0]=="None"){
              $r[$value] = array();
            }
          }
          
          // strcmp("Hello world!","Hello world!");
          $rows[] = $r;
      }
      echo json_encode($rows);
      mysqli_close($con); 
     ?>;
    localStorage["prebuilt"] = JSON.stringify(t);




     var t=<?php 
      $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }
      
      $sql="SELECT * FROM CHEESE11";
      $result = mysqli_query($con,$sql);

     $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
          $rows[] = $r;       
      }
      echo json_encode($rows);
      
      
      // echo $jsonDataEncoded;
    mysqli_close($con); 
     ?>;
    localStorage["cheese"] = JSON.stringify(t);
   var t=<?php 
    $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }
      
      $sql="SELECT * FROM MEAT11";
      $result = mysqli_query($con,$sql);

     $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
          $rows[] = $r;       
      }
      echo json_encode($rows);
      
      
      // echo $jsonDataEncoded;
    mysqli_close($con); 
     ?>;
    localStorage["meat"] = JSON.stringify(t);

    var t=<?php 
    $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }
      
      $sql="SELECT * FROM BREAD4";
      $result = mysqli_query($con,$sql);

     $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
          $rows[] = $r;       
      }
      echo json_encode($rows);
      
      
      // echo $jsonDataEncoded;
    mysqli_close($con); 
     ?>;
    localStorage["bread"] = JSON.stringify(t);
    var t=<?php 
    $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }
      
      $sql="SELECT * FROM SAUCE11";
      $result = mysqli_query($con,$sql);

     $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
          $rows[] = $r;       
      }
      echo json_encode($rows);
      
      
      // echo $jsonDataEncoded;
    mysqli_close($con); 
     ?>;
    localStorage["sauce"] = JSON.stringify(t);
    var t=<?php 
    $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }
      
      $sql="SELECT * FROM TOPPING11";
      $result = mysqli_query($con,$sql);

     $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
          $rows[] = $r;       
      }
      echo json_encode($rows);
      
      
      // echo $jsonDataEncoded;
    mysqli_close($con); 
     ?>;
    localStorage["topping"] = JSON.stringify(t);
 
  }

</script>

<body onload = "addcustomer('Outside of Florida')">


  <section class="header5 cid-rFLInF4iNo mbr-fullscreen" id="header5-9">

    <div class="container">
        <div class="row justify-content-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"id="header">Select from Our Prebuilt Sandwiches or Customize Your Own!</h1>
                <div class="mbr-section-btn align-center">
                        <a class="btn btn-md btn-white-outline display-4" id="prebtn" onclick="prebuilt()">Prebuilt</a>
                        
                        <a class="btn btn-md btn-white-outline display-4" id="cusbtn" onclick="custom()">Custom</a></div>
            </div>
        </div>
		<div class="row justify-content-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">Choose Your Sandwich Size</h1>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-white-outline display-4" onclick="addsize(4)" >4 in.</a>
                        <a class="btn btn-md btn-white-outline display-4" onclick="addsize(6)" >6 in.</a>
						<a class="btn btn-md btn-white-outline display-4" onclick="addsize(12)" >12 in.</a></div>
						<div class="mbr-section-btn align-center">
              <a class="btn btn-md btn-white-outline display-4" onclick="addcustomer( 'Florida' )" >I am a Florida Customer</a></div>
						
            </div>
        </div>
		<div class="row justify-content-center">
		    <a class="btn btn-md btn-secondary display-4" id="btnnext">Next</a>
		</div>
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

