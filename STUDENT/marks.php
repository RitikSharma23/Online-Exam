<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$roll=$_REQUEST['roll'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$sem=$_REQUEST['sem'];
$dev=$_REQUEST['dev'];
$uid=$_REQUEST['uid'];
$id=$_REQUEST['id'];
$subcol=$_REQUEST['subcol'];
$marks=$_REQUEST['marks'];


$select="UPDATE `student` SET `$subcol` = '$marks' WHERE `student`.`uid` = '$uid';";

if ($conn->query($select) === TRUE) {
    echo "<h1 align='center'><pre>FEEDBACK DE AUR NIKAL YAHA SE <h1><pre><textarea style='width:100%;height:500px;border:4px solid;font'></textarea>";
  } else {
    echo "Error: <br>" . $conn->error;
  }
  $conn->close();

?>