<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <?php 
  # classes and objects 
  class Book{
    var $title;
    var $author;
    var $price;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages){
      $this -> title = $aTitle;
      $this -> author = $aAuthor;
      $this -> pages = $aPages;
      #this is a keyword that refers to the current object
    }



  }

  $book1 = new Book("Harry Potter", "J.K. Rowling", 400 ); # 

  $book2 = new Book("Harry Potter", "J.K. Rowling", 400); # 
  echo $book1 ->author;
  echo $book2 ->author;

  #constructor - a function that gets called whenever we create an object of the class 

 

  ?>
</body>
</html>