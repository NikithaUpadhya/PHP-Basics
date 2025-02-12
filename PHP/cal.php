<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action = "cal.php" method = "post">
    numFirst: <input type="number" step = "0.1" name="num1"><br><br>
    OP: <input type = "text" name ="op"><br><br>
    numSecond: <input type="number" name="num2"><br><br>
    <input type = "submit">

    
  </form>
<?php 
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if ($op == "+") {
  $result = $num1 + $num2;
  echo "The result is: $result";
  } else if ($op == "-") {
    $result = $num1 - $num2;
    echo "The result is: $result";}
    else if ($op == "*") {
      $result = $num1 * $num2;
      echo "The result is: $result";}
    else{
      echo "Invalid operator";
    }
      


?>
  
</body>
</html>