<?php

include("../partials/db.php");

$name         = $_POST['name'];
$price        = $_POST['price'];
$description  = $_POST['description'];
$category_id  = $_POST['category_id'];

$target = "../uploads/";

$file_path = $target . basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "../uploads/" . $file_name;


$set = "INSERT INTO products (name,price,description,picture,category_id) values ('$name','$price','$description', '$file_path', '$category_id')";

$set = mysqli_query($conn, $set);

header("Location: productshow.php");
