<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action = "checkbox.php" method = "post">
    apples: <input type = "checkbox" name = "fruits[]" value = "apples"> <br>
    oranges: <input type = "checkbox" name = "fruits[]" value = "oranges"> <br>
    pears: <input type = "checkbox" name = "fruits[]" value = "pears"> <br>
    watermelons: <input type = "checkbox" name = "fruits[]" value = "watermelons"> <br>
    <input type = "submit">
  </form>
  <?php 
  $fruits = $_POST["fruits"];
  echo $fruits[0]
  ?>
</body>
</html>