<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  
<form action = "userinput.php" method = "get">
  Name: <input type="text" name="name">
  <br><br>
  age: <input type = "number" name ="age">
  <br><br>
  <input type="submit">
  

</form>
<br>
Your name is <?php
    echo $_GET["name"];
    echo $_GET["age"]
  


?>

</body>
</html>