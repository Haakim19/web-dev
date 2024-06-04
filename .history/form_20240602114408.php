<?php
$name = $_post['name'];
$email = $_post['email'];
$age = $_post['age'];

$customer_detail = array(
    'name' => $name,
    'email' => $email,
    'age' => $age
);

echo "User Details";
echo "name: " . $customer_detail['name'];
echo "email: " . $customer_detail['email'];
echo "age: " . $customer_detail['age'];
?>