<?php
$server = "localhost";
$username = "root";
$password = "";
$name_db = "sb_admin2";

$connect = new mysqli($server,$username,$password,$name_db);

if($connect->connect_error)
    die("connection failed: " . $connect->connect_error);
else
    echo "connected";

?>