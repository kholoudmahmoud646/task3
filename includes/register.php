<?php

include "db.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

if ($password != $repeat_password) {
    die("Passwords do not match");
}

$sql = "INSERT INTO users (fname, lname, email, password)
VALUES ('$fname', '$lname', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration Successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>