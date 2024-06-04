<?php
// Database connection details
$host = 'localhost';
$dbname = 'formdatabase';
$username = 'root';
$password = '';

// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare and execute the SQL query to insert data into the table
$query = "INSERT INTO users(column1, column2, column3) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('sss', $value1, $value2, $value3);

// Set the values for the parameters
$value1 = 'Value 1';
$value2 = 'Value 2';
$value3 = 'Value 3';

// Execute the query
if ($stmt->execute()) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>