<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Default password is empty for XAMPP
$database = 'webproject'; // Update database name here

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
