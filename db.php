<?php
$servername = 'localhost';
$username = 'root';
$password = 'cirera27'; 
$dbname = 'portfolio';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('Could not connect to MySQL server: ' . mysqli_connect_error());
}
?>