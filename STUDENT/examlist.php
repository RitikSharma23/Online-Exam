<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sem = $_REQUEST['sem'];
$div = $_REQUEST['div'];

$result=array();
$result['data']=array();
$select="SELECT * FROM student WHERE phone='$number' AND pass='$password'";
$responce=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($responce)){

$index["roll"]=$row['0'];
$index["fname"]=$row['1'];
$index["lname"]=$row['2'];
$index["email"]=$row['3'];
$index["phone"]=$row['4'];
$index["uid"]=$row['5'];
$index["semester"]=$row['6'];
$index["pass"]=$row['7'];

array_push($result['data'],$index);
}
if($result['data']==null){
  $result['success']="0";
}else{
  $result['success']="1";
}
echo json_encode($result);
mysqli_close($conn);
?>