<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecomerce';


$pdo = new PDO('mysql:host=localhost; dbname=ecomerce', $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = $_POST['title'];
$discription = $_POST['discription'];
$price = $_POST['price'];
$image = $_POST['image'];

$statment = $pdo->prepare("INSERT INTO `woocomerce` (`id`, `title`, `discription`, `price`, `image`)
            VALUES (NULL, :title, :discription, :price, :image);");
$statment->bindValue(':title', $title);
$statment->bindValue(':discription', $discription);
$statment->bindValue(':price', $price);
$statment->bindValue(':image', $image);
$statment->execute();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form method="POST">
  <div class="form-group">
    <label>title</label>
    <input type="text" class="form-control" name = "title">
  </div>
  <div class="form-group">
    <label>discription</label>
    <input type="text" class="form-control" name = "discription">
  </div>
  <div class="form-group">
    <label>price</label>
    <input type="text" class="form-control" name = "price">
  </div>
  <div class="form-group">
    <label>image</label>
    <input type="file" class="form-control" name = "image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>