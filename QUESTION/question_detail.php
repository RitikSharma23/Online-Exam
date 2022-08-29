<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// quid="+nam+"&id="+id+"&sem="+sem+"&subject="+sub+"&unit="+unit+"&total="+x-1,true)

$quid=$_REQUEST['quid'];
$total=$_REQUEST['total'];
$sem=$_REQUEST['sem'];
$testid=$_REQUEST['id'];
$subject=$_REQUEST['subject'];
$unit=$_REQUEST['unit'];


$date=date('Y-m-d');


$division="B";
$status="stop";

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