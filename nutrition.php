<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Prebuilt page for the 6-12 sandwich builder.">
  
  <title>6-12 Results Page</title>
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
  width: 33%;
  height: auto;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.btn {
  background-color: #fffa;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
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
  function removeDups(names) { /* Function from https://wsvincent.com/javascript-remove-duplicates-array/ */
    let unique = {};
    names.forEach(function(i) {
      if(!unique[i]) {
        unique[i] = true;
      }
    });
    return Object.keys(unique);
  }
  function load()
  {
    var element = document.getElementById("ingall");
    console.log(store.getAll());
    element.innerHTML = "Ingredients:".concat("\nBread: ",store.get("Bread: "),"\nCheese(s): ",removeDups(store.get("Cheeses: ")).toString(),"\nMeat(s): ",removeDups(store.get("Meats: ")).toString(),"\nSauce(s): ",removeDups(store.get("Sauces: ")).toString(),"\nTopping(s): ",removeDups(store.get("Toppings: ")).toString(),"\n\nAllergy Information:");
  }
  function clear()
  {
    store.clear();
    console.log( 'cleared cart' );
  }
</script>

<body onload="load();">
  <section class="header5 cid-rFLInF4iNo mbr-fullscreen" id="header5-9">
    

    <div class="row" id="optiongrid">
      <div class="row">
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"  style="padding-left: 400px;color: white;">Nutritional Value for Your Sandwich</h1>
      </div>
      <div class="column">
        <div class="container">
          <pre id="ingall" style="padding-left: 0px;">Ingredients:
Allergy Information:</pre>
        </div>
      </div>
      <div class="column">
        <div class="container">
          <pre id="ingall" style="padding-left: 0px;">Nutrition Facts
Serving Size
Servings
_______________________________________
Amount Per Serving
Calories  Calories From Fat
                    % Daily Value*
Total Fat                       %
  Saturated Fat                 %
  Trans Fat                     %
Cholesterol                     %
Sodium                          %
Total Cabohydrate               %
  Dietary Fiber                 %
  Sugars                        %
Protein                         %
_______________________________________
Vitamin A     Vitamin C
Calcium     Iron
          </pre>
          
        </div>
      </div>
      <div class="column">
        <div class="container">
        <a class="btn btn-md btn-white-outline display-4"  style="width:100%; height:40px;">Print/Export Nutritional Data</a>
        <a class="btn btn-md btn-secondary display-4" onclick="store.clear();" href = "hello.php" style="width:100%; height:40px;">Start over</a>
        </div>
	  </div>
  </div>


</section>


  <section class="engine"><a href="https://mobirise.info/v"></a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>