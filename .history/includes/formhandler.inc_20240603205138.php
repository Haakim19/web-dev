<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    try {
        require_once "dbh.inc.php";
// using paceholder
        $query = "INSERT INTO users (fname, lname, email, pwd)
        VALUES (?, ?, ?, ?);";


        $stmt = $pdo->prepare($query);

        $stmt->execute([$fname, $lname, $email, $pwd]);

        $pdo = null;
        $stmt = null;

        header("location: ../form.php");
        die();
    } catch (PDOException $e) {
        die("Quary failed: ". $e->getMessage());
    }
}

else{
    header("location: ../form.php");
}