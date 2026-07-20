<!-- <?php
$conn = new mysqli('localhost', 'root', '', 'your_database_name');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dish = $_POST['dish'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO orders (dish, quantity, name, email, address, phone)
        VALUES ('$dish', '$quantity', '$name', '$email', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    header("Location: thankyou.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> -->
