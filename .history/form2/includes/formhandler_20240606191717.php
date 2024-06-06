<?php
$servename = "localhost";
$dbusername = "root";
$dbname = "formdatabase";
$dbpassword = "";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $conn = new mysql ($servename, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $fname = $_post("fname");
    $lname = $_post("lname");
    $email = $_post("email");
    $pwd = $_post("pwd");
    $pNum = $_post("pNum");
    $bDay = $_post("bDay");
    $gender = $_POST("gender");
    $title = $_POST("title");
    $country = $_POST("country");
    $education = $_POST("education");
    $job = $_POST("job");
    $hobbies = $_POST("hobbies");
    $facebook = $_POST("facebook");
    $github = $_POST ("github");
    $instagram = $_POST("instagram")
    $sql = "INSERT INTO details (firstName, lastName, email, pwd, phonenumber, birthDay, gender, 
    title, country, education, job, hobbies, facebook, github, instagram) 
    VALUES ('$fname', '$lname', '$email', '$pwd', '$pNum', '$bDay', '$gender', 
    '$title', '$country', '$education', '$job', '$hobbies', '$facebook', '$github', '$instagram')";


}