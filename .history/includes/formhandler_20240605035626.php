<?php
$dbusername = "root";
$dbpassword = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $servername = "localhost";
    $dbname = "formdatabase";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (firstName, lastName, email, pwd) VALUES ('$fname', '$lname', '$email', '$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
        header("location: ../form.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    header("location: ../form.php");
}
