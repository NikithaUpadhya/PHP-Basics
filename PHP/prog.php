<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <?php
  echo"<h1> Nikitha's Site </h1>";
  echo"<hr>";
  echo"<p> This is my site and learning of php </p>";

  $characterName = "Tom"; #variables 
  $characterAge = 70;

  echo "There once was a man named $characterName <br>";
  echo "He was $characterAge years old <br>";
  $characterName = "Mike";
  echo "He didn't like the name $characterName <br>";
  echo "But he liked being $characterAge <br>";

  ## different types of variables in php 
  #1) string 
  $phrase = "To be or not to be";
  #2) int
  $age = 22;
  #3) float
  $pi = 3.14;
  #4) boolean
  $isMale = true;
  null;

  $phrase = "Giraffe Academy";
  echo strtolower($phrase);
  echo strlen($phrase);
  echo $phrase[0] ='B';

  echo str_replace("ffe", "panda", $phrase);
  echo substr($phrase, 8, 3); 

  echo 5.7*9;
  echo 10%3;
  echo pow(2,4);
  echo sqrt(144);
  echo max(2,10);
  


  

  ?>


</body>
</html>