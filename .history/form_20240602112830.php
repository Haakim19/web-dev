$name = $_get['name'];
$email = $_get['email'];
$age = $_get['age'];

$customer_detail = array(
    'name' => $name,
    'email' => $email,
    'age' => $age
);

echo "<h2>User Details</h2>";
echo "<p>Name: ".$customer_detail['name']."</p>";
echo "<p>Email: ".$customer_detail['email']."</p>";
echo "<p>Age: ".$customer_detail['age']."</p>";