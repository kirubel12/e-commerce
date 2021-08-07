<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "e-com";

$conn = mysqli_connect($host,$username, $password, $dbname);
$new_id = $_GET['del_id'];
$set = "DELETE FROM products WHERE id ='$new_id'";

if (mysqli_query($conn,$set)){
    header("Location: productshow.php");
}else{
    header("Location:adminindex.php");
}
