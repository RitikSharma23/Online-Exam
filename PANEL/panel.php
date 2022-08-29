<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $id=$_REQUEST['id'];

$result=array();
$result['data']=array();
$select="SELECT * FROM `question_details`;";
$responce=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($responce)){

$index["user"]=$row['0'];
$index["date"]=$row['1'];
$index["question_id"]=$row['2'];
$index["sem"]=$row['3'];
$index["dev"]=$row['4'];
$index["subject"]=$row['5'];
$index["unit"]=$row['6'];
$index["total"]=$row['7'];
$index["status"]=$row['8'];




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