<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <?php 
  class Chef{
    function makeChicken(){
      echo "The chef makes chicken.\n";
    }

    function makeSalad(){
      echo "The chef makes a salad.\n";

    }

    function makeSpecialDish(){
      echo "The chef makes a Pasta.\n";
    }

    
  }

  class ItalianChef extends Chef{
    function makeTiramisu(){
      echo "The Italian chef makes tiramisu.\n";
    }
    function makeSpecialDish()
    {
      echo "The Italian chef makes a Pizza.\n";
    }

    
  }

  $chef = new Chef();
  $chef->makeSpecialDish();
  $ItalianChef = new ItalianChef();
  $ItalianChef->makeSpecialDish();
  ?>
  
</body>
</html>