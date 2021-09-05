<?php
require_once 'require.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css ">
    <script src="redirect.js"></script>
    
    <title>Product List</title>
</head>
<body>
 
<nav>
        <div class="title"><h1>Products List</h1></div>
       
        <form method="POST">
            <div class="nav-links" >
        <input type="submit" value="ADD"  onclick="javascript: form.action='add.php';" id="add">
        <!--</div>-->
        
        <!--<div id="form" >-->
        
        <input type="submit" id="delete-product-btn" value="MASS DELETE" name="delete-product-btn" onclick="<?php $product->deleteProduct();?>">
        </div>
    </nav>
    <div class="container">
    <?php 
    $product->getDvds();
    $product->getBooks();
    $product->getfurniture();
    ?>
</form>
    </div>
    <footer>
        <p>Scandiweb Test assignment</p>
    </footer>
</body>
</html>