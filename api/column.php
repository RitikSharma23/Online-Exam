<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$result=array();
$result['data']=array();
$select="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'student' ORDER BY ORDINAL_POSITION;";
$responce=mysqli_query($conn,$select);

$i=0;
while($row=mysqli_fetch_array($responce)){

$index['col']=$row['0'];

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