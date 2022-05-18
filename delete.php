<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecomerce';


$pdo = new PDO('mysql:host=localhost; dbname=ecomerce', $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id = $_POST['id'] ?? null;
if(!$id) {
    header('location: index.php');
    exit;
}
$statment = $pdo->prepare('DELETE FROM `woocomerce` WHERE id = :id');
$statment->bindvalue(':id', $id);
$statment->execute();

header('location: index.php');

?>