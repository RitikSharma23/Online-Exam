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
$no=$_REQUEST['no'];
$quid=$_REQUEST['id'];
$question = $_REQUEST['question'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$correct = $_REQUEST['correct'];




$select="UPDATE question set question='$question',a='$a',b='$b',c='$c',d='$d',correct='$correct' WHERE no='$no' AND question_id='$quid';";

if ($conn->query($select) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  	
//   $total=2;
//   $status="start";


// $select1="INSERT INTO question_details(user,date,question_id,sem,dev,subject,unit,total,status)VALUES ('$quid','$date','$testid','$sem','$division','$subject','$unit','$total','$status')";

  
  $conn->close();
?>