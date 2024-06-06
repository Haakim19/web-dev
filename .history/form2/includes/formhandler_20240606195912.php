<?php
$servename = "localhost";
$dbusername = "root";
$dbname = "detailsdatabase";
$dbpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST("fname");
    $lname = $_POST("lname");
    $email = $_POST("email");
    $pwd = $_POST("pwd");
    $pNum = $_POST("pNum");
    $bDay = $_POST("bDay");
    $gender = $_POST("gender");
    $title = $_POST("title");
    $country = $_POST("country");
    $education = $_POST("education");
    $facebook = $_POST("facebook");
    $github = $_POST("github");
    $instagram = $_POST("instagram");

    $conn = new mysqli($servename, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql1 = "INSERT INTO infromations (firstName, lastName, email, pwd, phoneNumber, birthDay, gender, 
    title, country, education, facebook, github, instagram) 
    VALUES ('$fname', '$lname', '$email', '$pwd', '$pNum', '$bDay', '$gender', 
    '$title', '$country', '$education', '$facebook', '$github', '$instagram')";

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
