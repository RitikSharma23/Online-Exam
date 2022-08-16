<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$question = $_REQUEST['question'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$correct = $_REQUEST['correct'];

// $question = "Question";
// $a = "a";
// $b = "b";
// $c = "c";
// $d = "d";
// $correct = "c";


$select="INSERT INTO question(question,a,b,c,d,correct) VALUES ('$question','$a','$b','$c','$d','$correct')";

if ($conn->query($select) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>