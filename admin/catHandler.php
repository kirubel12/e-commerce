<?php

include("../partials/db.php");

$email = $_POST['email'];


$set = "INSERT INTO categories (name) values ('$email')";

$set = mysqli_query($conn, $set);

header("Location: productshow.php");
