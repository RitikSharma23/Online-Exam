<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $quid=$_REQUEST['quid'];
// $sem=$_REQUEST['sem'];
// $subject=$_REQUEST['subject'];
// $unit=$_REQUEST['unit'];
// $date=date('Y-m-d');
// $question = $_REQUEST['question'];
// $a = $_REQUEST['a'];
// $b = $_REQUEST['b'];
// $c = $_REQUEST['c'];
// $d = $_REQUEST['d'];
// $correct = $_REQUEST['correct'];

$division="B";
$quid="ritik1";
$sem=1;
$subject="cpp";
$unit=1;
$date=date('Y-m-d');
$question = "Question";
$a = "a";
$b = "b";
$c = "c";
$d = "d";
$correct = "c";

$testid=rand(10000,99999);


$select="INSERT INTO question(user,question_id,dat,sem,subject,unit,division,question,a,b,c,d,correct)VALUES ('$quid','$testid','$date','$sem','$subject','$unit','$division','$question','$a','$b','$c','$d','$correct')";

if ($conn->query($select) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  	
  $total=2;
  $status="start";


$select1="INSERT INTO question_details(user,date,question_id,sem,dev,subject,unit,total,status)VALUES ('$quid','$date','$testid','$sem','$division','$subject','$unit','$total','$status')";

if ($conn->query($select1) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>