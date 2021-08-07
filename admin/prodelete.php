<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "e-com";

$conn = mysqli_connect($host, $username, $password, $dbname);
$newid = $_GET['delid'];
$set = "DELETE FROM products WHERE id ='$newid'";

if (mysqli_query($conn, $set)) {
    header("Location: productshow.php");
} else {
    header("Location:adminindex.php");
}
