<?php
require_once 'require.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel="stylesheet" href="add.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="dropdown.js"></script>
    <script src="isnumber.js"></script>
    <script src="alphanumeric.js"></script>
    <script src="cancel.js"></script>
</head>
<body>
    <form action="" id="product_form" method="POST" name="product_form">
        <nav>
            <div class="title">
            <h1>Add Product</h1>
        </div>
        
            <div class="buttons">
                
            <input type="submit" id="add" value="Save" class="button" onclick="return clicksave()" name="add">
            <input type="submit" id="cancel" value="cancel" class="button"  onclick="return redirect()">
        </div>
        </nav>
        <div class="container">
            <div class="inputs">
            <ul>
                <li><label>SKU</label>
                <input type="text" id="sku" name="sku" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')"><br></li>
                <li><label>Name</label>
                <input type="text" id="name" name="name" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9 ]/g, '')" ><br></li>
                <li><label>Price ($)</label>
                <input type="text" id="price" name="price" onkeypress="return isNumberKey(event,this)"></li>
            </ul>
            </div>
            <div class="switch">
                <label>Type Switcher</label>
                <select id="productType" name="type" onchange="select(this);">
                    <option value="none">Type Switcher</option>
                    <option value="DVD" name="dvd"  >DVD</option>
                    <option value="Furniture" name="furniture" >Furniture</option>
                    <option value="Book" name="book" >Book</option>
                </select>
            </div>
            <div id="dvd-box" class="data">
                <ul>
                    <li> <label> Size (MB)</label>
                <input type="text" id="size"  name="size" onkeypress="return isNumberK(event)" ></li>
            </ul>
            </div>
            <div id="furniture-box" class="data">
                <ul> 
                    <li> <label> Height (CM)</label>
                        <input type="text" id="height" name="height" onkeypress="return isNumberK(event)">
                    </li>
                    <li><label>Width (CM)</label>
                        <input type="text" id="width" name="width" onkeypress="return isNumberK(event)">
                    </li>
                    <li><label>Length (CM)</label>
                        <input type="text" id="length" name="length"onkeypress="return isNumberK(event)">
                    </li>
            
            </ul>
            </div>
            <div id="book-box" class="data">
                <ul>
                    <li><label> Weight (KG)</label>
                        <input type="text" id="weight" name="weight" onkeypress="return isNumberK(event)">
                    </li>
                </ul>
                
            </div>
            <?php  
            echo $dvd->insertDvd();
                echo $product->insertProduct();
                echo $book->insertBook();
                echo $furniture->insertFurniture();
            ?>
        </div>

    </form>
    
    <footer class=footer>
        <p>Scandiweb Test Assignment</p>
    </footer>
</div>
</body>
</html>