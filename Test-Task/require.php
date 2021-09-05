<?php
include 'database.php';
$data =new Database;
$conn=$data->db_connect();
include 'products.php';
$product= new Products;
include 'book.php';
$book = new Book;
include 'dvd.php';
$dvd = new DVD;
include 'furniture.php';
$furniture = new Furniture;



        

