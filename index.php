


<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecomerce';


$pdo = new PDO('mysql:host=localhost; dbname=ecomerce', $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$statment = $pdo->prepare("SELECT * FROM `woocomerce`");
$statment->execute();
$products = $statment->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>';
//var_dump($products);
//echo '<pre>';

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h3>Product</h3>
      <p>
      <a href="./create.php" class="btn btn-success">ADD new product</a>
      </p>
  <table class="table">
  <thead class="table-dark">
      <th>ID</th>
    <th>Title</th>
    <th>discription</th>
    <th>price</th>
    <th>image</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php foreach($products as $i => $product): ?>
        <tr>
            <th><?php echo $i + 1;?></th>
            <td><?php echo $product['title']?></td>
            <td><?php echo $product['discription']?></td>
            <td><?php echo $product['price']?></td>
            <td><?php echo $product['image']?></td>
            <td>
        
            <form style = "display: inline-block" method = "post" action = "delete.php">
                <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                <button type="submit" id = <?php echo $product['id']?> class="btn btn-outline-danger">Delete</button>    
            </form>
            <a href = "./edit.php" type="button" class="btn btn-outline-primary">Edit</a>
            </td>

        </tr>

    <?php endforeach ?>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>