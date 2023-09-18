<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "project";

$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE User (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL
    email VACHAR(30) NOT NULL, 
    reg_data TIMESTAMP DEEDAULT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";
if ($conn->query($sql) == TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close ();
?>