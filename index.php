<?php
require('connection.php');

$connect = new mySQL();
$connect->connect();

$products = $connect->query("SELECT * FROM product ORDER BY id");
?>

<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>Ministry of Transportation</title>
        
        <!-- Bootstrap core CSS -->
        <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body class="d-flex flex-column h-100">

    <div class="col-lg-8 mx-2 p-3 py-md-5">
    <header class="d-flex justify-content-between pb-3 mb-5 border-bottom">    
        <span class="fs-3">Ministry of Transportation</span>
        <a href="new_product.php" alt="Add product">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
            </svg>
        </a>    
    </header>

    <div class="row g-5">
        <table class="table table-striped table-image">
            <thead>
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Photo</th>
                <th scope="col" class="text-center">Price (US$)</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Update</th>
                <th scope="col" class="text-center">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($products as $product) {
                ?>
                    
                        <tr>
                            <th><?=$product['description']?></th>
                            <td class="w-25">
                                <a href="resources/img/<?=$product['path']?>" target="_blank">
                                    <img class="img-fluid rounded" src="resources/img/<?=$product['path']?>">                            
                                </a>
                            </td>
                            <td class="text-center"><?=$product['price']?></td>
                            <td><?=$product['category']?></td>                            
                            <td class="text-center">
                                <a href="update_product.php?id=<?=$product['id']?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                    </svg>
                                </a>
                            </td>
                            <td class="text-center">
                            <a href="delete_product.php?id=<?=$product['id']?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
                                        <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>

                    
                <?php
                } 
                ?>
        </tbody>
        </table>

    </div>

    </div>


    <script src="resources/js/bootstrap.min.js"></script>      
</body>
</html>
