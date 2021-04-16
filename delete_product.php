<?php

require('connection.php');
$id = $_GET['id']; //Product id

try {
    $connect = new mySQL();
    $connect->connect();

    //Fetches path filename
    $product = $connect->query("SELECT path FROM product WHERE id = ".$id)->fetch_assoc();
    //Deletes file
    unlink('resources/img/'.$product['path']);

    //Delete given row in DB
    $result = $connect->query("DELETE FROM product WHERE id = ".$id);
} catch (Exception $e) {
    $exception = $e->getMessage();
    print_r($exception);
}

header("Location: index.php");
die();
?>