<?php

$conn =mysqli_connect("localhost", "root", "", "php_crud");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    // Connection successful
    // echo "Connected successfully";
}


?>