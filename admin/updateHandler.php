<?php

include("../partials/db.php");
$new_id = $_POST['form_id'];
$new_name         = $_POST['name'];
$new_price        = $_POST['price'];
$new_description  = $_POST['description'];
$new_category_id  =$_POST['category_id'];

$target = "../uploads/";

$file_path = $target.basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "../uploads/".$file_name;


$set = "UPDATE products set name='$new_name', price='$new_price', description='$new_description', picture='$file_path', category_id='$new_category_id' where id='$new_id'";

$set = mysqli_query($conn, $set);

