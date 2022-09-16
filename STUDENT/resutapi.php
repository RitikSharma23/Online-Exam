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
      $select="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'student_result' ORDER BY ORDINAL_POSITION;";
      $responce=mysqli_query($conn,$select);
      $i=0;
      while($row=mysqli_fetch_array($responce)){
      $index['col']=$row['0'];
      array_push($result,strval($index['col']));
      }

$marks=array();
$marks['data']=array();
$select1="SELECT * FROM `student_result` WHERE uid='21004500210167';";
$responce1=mysqli_query($conn,$select1);
$row1=mysqli_fetch_array($responce1);
for($i=0;$i<count($result);$i++){
$index1[$result[$i]]=$row1[$i];
array_push($marks['data'],$index1);
}

if($marks['data']==null){
  $marks['success']="0";
}else{
  $marks['success']="1";
}

echo json_encode($marks);
mysqli_close($conn);

?>