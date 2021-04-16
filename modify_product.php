<?php

require('connection.php');

//Fetches data from form
$id = $_POST['id'];
$description = trim($_POST['description']);
$price = str_replace(['$', ','], '', $_POST['price']); //Replaces '$' and ',' from price to fit decimal format from DB
$category = trim($_POST['category']);

try {
    $connect = new mySQL();
    $connect->connect();
    $sql = "UPDATE product SET description = '".$description."', price = ".$price.", category = '".$category."' WHERE id = ".$id;
    $result = $connect->query($sql);

    print_r($result);
} catch (Exception $e) {
    $exception = $e->getMessage();
    print_r($exception);
}

header("Location: index.php");
die();

?>