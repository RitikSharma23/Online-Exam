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


$number = $_REQUEST['number'];


$sql = "SELECT * FROM test WHERE number=$number";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["number"]. " - Name: " . $row["pass"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>