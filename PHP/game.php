<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action = "game.php" method="get">
    color: <input type ="text" name = "color"> <br>
    plural Noun: <input type ="text" name = "pluralNoun"> <br>
    celebrity: <input type ="text" name = "celeb"> <br>
    <input type = "submit">
  </form>
  <br><br>
  <?php 
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celeb"];


    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>"
  ?>


  
</body>
</html>