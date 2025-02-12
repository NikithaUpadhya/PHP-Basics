<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <?php
  include "header.html"
   ?>
<p> Hello World </p>

<?php
$title = "My first post";
$author = "John Doe";
$wordCount = 400;
  include "article-header.php"
   ?>

<?php 
include "tools.php";
echo sayHi("Nikitha")
?>

<?php
  include "footer.html"
   ?>
  
</body>
</html>