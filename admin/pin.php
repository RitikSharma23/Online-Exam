<?php
$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "exam";


$conn = new mysqli($servername, $username, $passwor, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$pincode=$_REQUEST['pincode'];
$result=array();
$result['data']=array();
$select="SELECT * FROM `mytable` WHERE pincode='$pincode';";
$responce=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($responce)){
$index["pincode"]=$row['0'];
$index["city"]=$row['1'];
$index["state"]=$row['2'];
$index["area"]=$row['3'];
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