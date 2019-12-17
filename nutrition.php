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
  function nullreplace(inp)
  {
    if(inp == null){
      return 0;
    }else
    {
      return inp;
    }
  }
  function getnutrition(key1, key2)
  {
    var foods = JSON.parse(localStorage.getItem(key1));
    var ind;
    if (typeof(foods) != "undefined"&&foods!=null)
      {
      for (i = 0; i < foods.length; i++) 
      {
        if(key2 == foods[i].food_name) {
          ind = i;
        }
      }
      var food = foods[ind];
      nutrition = store.get('nutrition');
      nutrition["Caffeine"] = nutrition["Caffeine"] + parseInt(nullreplace(food["Caffeine"]));
      nutrition["Calcium, Ca"] = nutrition["Calcium, Ca"] + parseInt(nullreplace(food["Calcium, Ca"]));
      nutrition["Carbohydrate, by difference"] = nutrition["Carbohydrate, by difference"] + parseInt(nullreplace(food["Carbohydrate, by difference"]));
      nutrition["Cholesterol"] = nutrition["Cholesterol"] + parseInt(nullreplace(food["Cholesterol"]));
      nutrition["Energy"] = nutrition["Energy"] + parseInt(nullreplace(food["Energy"]));
      nutrition["Fatty acids, total monounsaturated"] = nutrition["Fatty acids, total monounsaturated"] + parseInt(nullreplace(food["Fatty acids, total monounsaturated"]));
      nutrition["Fatty acids, total polyunsaturated"] = nutrition["Fatty acids, total polyunsaturated"] + parseInt(nullreplace(food["Fatty acids, total polyunsaturated"]));
      nutrition["Fatty acids, total saturated"] = nutrition["Fatty acids, total saturated"] + parseInt(nullreplace(food["Fatty acids, total saturated"]));
      nutrition["Fatty acids, total trans"] = nutrition["Fatty acids, total trans"] + parseInt(nullreplace(food["Fatty acids, total trans"]));
      nutrition["Fiber, total dietary"] = nutrition["Fiber, total dietary"] + parseInt(nullreplace(food["Fiber, total dietary"]));
      nutrition["Folate, DFE"] = nutrition["Folate, DFE"] + parseInt(nullreplace(food["Folate, DFE"]));
      nutrition["Iron, Fe"] = nutrition["Iron, Fe"] + parseInt(nullreplace(food["Iron, Fe"]));
      nutrition["Magnesium, Mg"] = nutrition["Magnesium, Mg"] + parseInt(nullreplace(food["Magnesium, Mg"]));
      nutrition["Niacin"] = nutrition["Niacin"] + parseInt(nullreplace(food["Niacin"]));
      nutrition["Phosphorus, P"] = nutrition["Phosphorus, P"] + parseInt(nullreplace(food["Phosphorus, P"]));
      nutrition["Potassium, K"] = nutrition["Potassium, K"] + parseInt(nullreplace(food["Potassium, K"]));
      nutrition["Protein"] = nutrition["Protein"] + parseInt(nullreplace(food["Protein"]));
      nutrition["Riboflavin"] = nutrition["Riboflavin"] + parseInt(nullreplace(food["Riboflavin"]));
      nutrition["Sodium, Na"] = nutrition["Sodium, Na"] + parseInt(nullreplace(food["Sodium, Na"]));
      nutrition["Sugars, total"] = nutrition["Sugars, total"] + parseInt(nullreplace(food["Sugars, total"]));
      nutrition["Thiamin"] = nutrition["Thiamin"] + parseInt(nullreplace(food["Thiamin"]));
      nutrition["Total lipid (fat)"] = nutrition["Total lipid (fat)"] + parseInt(nullreplace(food["Total lipid (fat)"]));
      nutrition["Vitamin A, IU"] = nutrition["Vitamin A, IU"] + parseInt(nullreplace(food["Vitamin A, IU"]));
      nutrition["Vitamin A, RAE"] = nutrition["Vitamin A, RAE"] + parseInt(nullreplace(food["Vitamin A, RAE"]));
      nutrition["Vitamin B-6"] = nutrition["Vitamin B-6"] + parseInt(nullreplace(food["Vitamin B-6"]));
      nutrition["Vitamin B-12"] = nutrition["Vitamin B-12"] + parseInt(nullreplace(food["Vitamin B-12"]));
      nutrition["Vitamin C, total ascorbic acid"] = nutrition["Vitamin C, total ascorbic acid"] + parseInt(nullreplace(food["Vitamin C, total ascorbic acid"]));
      nutrition["Vitamin D"] = nutrition["Vitamin D"] + parseInt(nullreplace(food["Vitamin D"]));
      nutrition["Vitamin D (D2 + D3)"] = nutrition["Vitamin D (D2 + D3)"] + parseInt(nullreplace(food["Vitamin D (D2 + D3)"]));
      nutrition["Vitamin E (alpha-tocopherol)"] = nutrition["Vitamin E (alpha-tocopherol)"] + parseInt(nullreplace(food["Vitamin E (alpha-tocopherol)"]));
      nutrition["Vitamin K (phylloquinone)"] = nutrition["Vitamin K (phylloquinone)"] + parseInt(nullreplace(food["Vitamin K (phylloquinone)"]));
      nutrition["Water"] = nutrition["Water"] + parseInt(nullreplace(food["Water"]));
      nutrition["Zinc, Zn"] = nutrition["Zinc, Zn"] + parseInt(nullreplace(food["Zinc, Zn"]));
      store.set('nutrition', nutrition);
    }
  }
  function load()
  {
    var element = document.getElementById("ingall");
    var breads = JSON.parse(localStorage.getItem('bread'));
    //"Caffeine": "0","Calcium, Ca": "0","Carbohydrate, by difference": "0","Cholesterol": "0","Energy": "0","Fatty acids, total monounsaturated": "0","Fatty acids, total polyunsaturated": "0","Fatty acids, total saturated": "0","Fatty acids, total trans": "0","Fiber, total dietary": "0","Folate, DFE": "0","Iron, Fe": "0","Magnesium, Mg": "0","Niacin": "0","Phosphorus, P": "0","Potassium, K": "0","Protein": "0","Riboflavin": "0","Sodium, Na": "0","Sugars, total": "0","Thiamin": "0","Total lipid (fat)": "0","Vitamin A, IU": "0","Vitamin A, RAE": "0","Vitamin B-6": "0","Vitamin B-12": "0","Vitamin C, total ascorbic acid": "0","Vitamin D": "0","Vitamin D (D2 + D3)": "0","Vitamin E (alpha-tocopherol)": "0","Vitamin K (phylloquinone)": "0","Water": "0","Zinc, Zn": "0"}
    var ingredients = [store.get("Cheeses: "),store.get("Meats: "),store.get("Sauces: "),store.get("Toppings: ")];
    var categories = ['cheese', 'meat', 'sauce', 'toppings'];
    store.set('ingredients',ingredients);
    store.set('nutrition', {"Caffeine": 0,"Calcium, Ca": 0,"Carbohydrate, by difference": 0,"Cholesterol": 0,"Energy": 0,"Fatty acids, total monounsaturated": 0,"Fatty acids, total polyunsaturated": 0,"Fatty acids, total saturated": 0,"Fatty acids, total trans": 0,"Fiber, total dietary": 0,"Folate, DFE": 0,"Iron, Fe": 0,"Magnesium, Mg": 0,"Niacin": 0,"Phosphorus, P": 0,"Potassium, K": 0,"Protein": 0,"Riboflavin": 0,"Sodium, Na": 0,"Sugars, total": 0,"Thiamin": 0,"Total lipid (fat)": 0,"Vitamin A, IU": 0,"Vitamin A, RAE": 0,"Vitamin B-6": 0,"Vitamin B-12": 0,"Vitamin C, total ascorbic acid": 0,"Vitamin D": 0,"Vitamin D (D2 + D3)": 0,"Vitamin E (alpha-tocopherol)": 0,"Vitamin K (phylloquinone)": 0,"Water": 0,"Zinc, Zn": 0});
    getnutrition('bread', store.get("Bread: "));
    console.log(store.get("Location: "));
    if(store.get("Location: ") != "Outside of Florida")
    {
      nutrition = store.get('nutrition');
      nutrition["Energy"] = nutrition["Energy"]*1.15;
      store.set('nutrition', nutrition);
    }
    for (var i = 0; i < ingredients.length; i++) 
    {
      if (ingredients[i] != null)
      {
        for (var n = 0; n < ingredients[i].length; n++) 
        {
          getnutrition(categories[i], ingredients[i][n]);
        }
      }
      
    }
    nutrition = JSON.parse(localStorage.getItem('nutrition'));
    var allergens = "Allergy Information:";
    allergens = allergens.concat("Contains Gluten");
    if(store.get("Cheeses: ").length > 0||store.get("Bread: ") == "Italian Herbs and Cheese"|| store.get("Sauces: ").indexOf("Buffalo") > -1 || store.get("Sauces: ").indexOf("Horseradish") > -1)
    {
      allergens = allergens.concat(", Dairy");
    }
    if(store.get("Bread: ") == "Wheat Bread")
    {
      allergens = allergens.concat(", Wheat");
    }
    if(store.get("Sauces: ").indexOf("Mayonnaise") > -1 ||store.get("Sauces: ").indexOf("Chipotle") > -1 ||store.get("Sauces: ").indexOf("Garlic Aioli") > -1)
    {
      allergens = allergens.concat(", Egg(s)");
    }
    //console.log(store.get("Sauces: ").indexOf("Mayo") > -1 );
    /*Check for the following
    All Cheeses: dairy
    All breads: gluten
    Italian Herb and Cheese: dairy
    Wheat bread: wheat
    Wheat bread: wheat
    Mayo: egg
    Garlic Aioli: egg
    Chipotle: egg
    Buffalo: dairy
    Horseradish: dairy
    Ranch: egg
    Honey Mustard: egg
    */


    element.innerHTML = "Ingredients:".concat("\nBread: ",store.get("Bread: "),"\nCheese(s): ",removeDups(store.get("Cheeses: ")).toString(),"\nMeat(s): ",removeDups(store.get("Meats: ")).toString(),"\nSauce(s): ",removeDups(store.get("Sauces: ")).toString(),"\nTopping(s): ",removeDups(store.get("Toppings: ")).toString(),"\n\n", allergens);
    var element = document.getElementById("nutfac");

    element.innerHTML = "Nutrition Facts\nServing Size One Sandwich\nServings One\n_______________________________________".concat("Amount Per Serving\nCalories ", nutrition.Energy,  " Calories From Fat ", Math.round(nutrition["Total lipid (fat)"]*9), "\n                  % Daily Value\n", "Total Fat                     % ", Math.round(nutrition["Total lipid (fat)"]/65*100), "\n  Saturated Fat               % ", Math.round(nutrition["Fatty acids, total saturated"]/20*100), "\n  Trans Fat                   % ", Math.round(nutrition["Fatty acids, total trans"]), "\nCholesterol                   % ", Math.round(nutrition["Cholesterol"]/300*100), "\nSodium                        % ", Math.round(nutrition["Sodium, Na"]/2400*100), "\nTotal Cabohydrate             % ", Math.round(nutrition["Carbohydrate, by difference"]/300*100), "\n  Dietary Fiber               % ", Math.round(nutrition["Fiber, total dietary"]/25*100), "\n  Sugars                      % ", Math.round(nutrition["Sugars, total"]/30*100), "\nProtein                       % ", Math.round(nutrition["Protein"]/50*100), "\n_______________________________________\n", "Vitamin A " , nutrition["Vitamin A, IU"], "    Vitamin C ", nutrition["Vitamin C, total ascorbic acid"], "\nCalcium ", nutrition["Calcium, Ca"], "    Iron ", nutrition["Iron, Fe"]);
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
          <pre id="nutfac" style="padding-left: 0px;">Nutrition Facts
Serving Size
Servings
_______________________________________
Amount Per Serving
Calories  Calories From Fat
                % Daily Value
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