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

        <!-- jQuery -->
        <script src="resources/js/jquery-3.6.0.min.js"></script>
        <!-- inputmask -->
        <script src="resources/js/inputmask.bundle.js"></script>
    </head>
<body class="d-flex flex-column h-100">
    <div class="col-lg-8 mx-2 p-3 py-md-5">
        <header class="d-flex justify-content-between pb-3 mb-5 border-bottom">    
            <span class="fs-3">Ministry of Transportation</span>   
            <a href="index.php" alt="Add product">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                </svg>
            </a>
        </header>
        <div class="row g-5">
            <span class="fs-4">Add new product</span>
            <form class="needs-validation" action="add_product.php" method="post" enctype="multipart/form-data" novalidate>
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" maxlength="255" placeholder="" value="" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" maxlength="255" placeholder="00.00" value="" required data-inputmask="'alias': 'currency'">
                    </div>
                    <div class="col-md-4">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category" >
                            <option value="Store">Store</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                </div>
                <div class="row g-3 p-2 d-flex justify-content-end">
                    <button class="w-25 btn btn-primary" type="submit">Add product</button>
                </div>
            </form>
        </div>
    </div>
    <script src="resources/js/bootstrap.min.js"></script>      
    <script src="resources/js/form_validation.js"></script>

    <script>
        //On document load...
        $(document).ready(function(){
            //Applies the inputmask script on 'input' elements
            $(":input").inputmask();
        });
    </script>  
</body>
</html>
