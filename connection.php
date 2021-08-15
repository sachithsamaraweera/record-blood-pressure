<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'health';

$conn = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno($conn)) {
    die("Database Connection Failed");
}


