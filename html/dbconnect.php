<?php

$servername = "localhost"; // If running locally
$username = "root"; // Root user for MariaDB
$password = "coldplay77$"; // Replace with your MariaDB root password
$dbname = "GROUP7"; // The database you created



$conn = new mysqli($servername, $username, $paswword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
