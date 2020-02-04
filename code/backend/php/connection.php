<?php
$host = "localhost";
$database = "mfac";
$user = "root";
$password = "";

$connection = mysqli_connect($host, $user, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
 ?>
