<?php
if (isset($_post['submit'])){
    echo "Form Submitted";
    echo "Name: " . $_post['name'] . "<br>";
    echo "Email: " . $_post['email'] . "<br>";
    echo "Age: " . $_post['age'] . "<br>";
}