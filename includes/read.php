<?php
include "db.php";
$users = $connect->query("SELECT * FROM users");

while($row = $users->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Name: " . $row["fname"] . "<br>";
}
?>