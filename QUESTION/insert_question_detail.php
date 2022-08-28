<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$quid=$_REQUEST['quid'];
$total=$_REQUEST['total'];
$sem=$_REQUEST['sem'];
$testid=$_REQUEST['id'];
$subject=$_REQUEST['subject'];
$unit=$_REQUEST['unit'];
$date=date('Y-m-d');
$question = $_REQUEST['question'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$correct = $_REQUEST['correct'];

$division="B";
$status="start";

// $quid="ritik1";
// $sem=1;
// $subject="cpp";
// $unit=1;
// $date=date('Y-m-d');
// $question = "Question";
// $a = "a";
// $b = "b";
// $c = "c";
// $d = "d";
// $correct = "c";

// $testid=123456;


$select="INSERT INTO question_details(user,date,question_id,sem,dev,subject,unit,total,status)VALUES ('$quid','$date','$testid','$sem','$division','$subject','$unit','$total','$status')";

if ($conn->query($select) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
  $conn->close();
?>