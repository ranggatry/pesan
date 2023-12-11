<?php
$servername = "localhost";
$username = "root";
$password = "NKKAaNaygx";
$dbname = "db_keluar_masuk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
