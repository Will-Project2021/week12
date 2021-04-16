<?php

require('connection.php');

//Fetches data from form
$description = trim($_POST['description']);
$price = str_replace(['$', ','], '', $_POST['price']); //Replaces '$' and ',' from price to fit decimal format from DB
$category = trim($_POST['category']);

//Image settings
$target_dir = 'resources/img/'; //Target directory
$target_file = $target_dir . basename($_FILES["image"]["name"]); //Temporary file name
$image_extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$path = time().'.'.$image_extension; //File name based on timestamp for unique name

//
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $path)) {    
    try {
        $connect = new mySQL();
        $connect->connect();
        $sql = "INSERT INTO product(description, price, category, path) VALUES('".$description."',".$price.",'".$category."','".$path."')";
        $result = $connect->query($sql);

        print_r($result);
    } catch (Exception $e) {
        $exception = $e->getMessage();
        print_r($exception);
    }
} else {
    //nok
} 

header("Location: index.php");
die();
?>