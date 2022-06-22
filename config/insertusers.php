<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_form (id, name, email, password, user_type)
  VALUES (1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
         (2, 'user', 'user@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



$conn->close();
?>