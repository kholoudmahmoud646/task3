<?php
$server = "localhost";
$username = "root";
$password = "";
$name_db = "sb_admin2";

$conn = new mysqli($server,$username,$password,$name_db);

if($conn->connect_error)
    die("connection failed: " . $conn->connect_error);
else
    echo "connected" . "<br>";;

?> 