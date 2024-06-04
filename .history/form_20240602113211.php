$name = $_get['name'];
$email = $_get['email'];
$age = $_get['age'];

$customer_detail = array(
    'name' => $name,
    'email' => $email,
    'age' => $age
);

echo "<h2>User Details</h2>";
echo "<ul>";
echo "<li>Name: ".$customer_detail['name']."</li>";
echo "<li>Email: ".$customer_detail['email']."</li>";
echo "<li>Age: ".$customer_detail['age']."</li>";
echo "</ul>";