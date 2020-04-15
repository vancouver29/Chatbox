<?php
// Connect to MySQL
$server = "localhost";
$username = "root";
$password = "root";
$database = "chatbox";

// Creat connection
$con = mysqli_connect($server, $username, $password, $database);

// Test connection
if(!$con) {
    die("Connection failed: " .mysqli_connect_error());
}


