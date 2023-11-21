<?php
// Connect to your database (replace placeholders with actual database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Insert data into the database
  $sql = "INSERT INTO participants (name, email, phone) VALUES ('$name', '$email', '$phone')";

  if ($conn->query($sql) === TRUE) {
    echo "Đăng ký thành công!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
