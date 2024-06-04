<?php

$dbhost = "localhost";
$dbname = "formdatabase";
$dbusername = "root";
$dbpassword = "";

// Create a mysqli connection
$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connection successful";
}