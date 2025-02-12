<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action = "site.php" method ="get">
    number1: <input type="number" name="number1" \n> <br><br>
    
    number2: <input type="number" name="number2" \n><br><br>
    <input type = "submit" \n>




  </form>

  <?php 
  Answer: echo $_GET["number1"] + $_GET["number2"]
  
  ?>
  
</body>
</html>