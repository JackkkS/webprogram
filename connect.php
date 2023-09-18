<?php
$severname = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "project";

$conn = new mysqli ($severname, $username, $password);
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>