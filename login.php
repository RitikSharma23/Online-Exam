<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "conn success;"."<br>";
}


$number = $_POST['number'];
$password = $_POST['password'];

echo "Phone number : ".$number."<br>";
echo "password : ".$password."<br>";

$sql = "INSERT INTO test (number, pass)
VALUES ('$number','$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>