<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurantdb";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];
$message = $_POST['message'];

$sql = "INSERT INTO book_table (name, email, phone, date, time, people, message) 
        VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: thanku.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>  -->
