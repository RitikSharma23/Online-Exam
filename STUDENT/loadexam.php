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

$result=array();
$result['data']=array();
$select="SELECT question,a,b,c,d,correct	 FROM `question` WHERE question_id=$id ORDER BY no;";
$responce=mysqli_query($conn,$select);


while($row=mysqli_fetch_array($responce)){

$index["question"]=$row['0'];
$index["a"]=$row['1'];
$index["b"]=$row['2'];
$index["c"]=$row['3'];
$index["d"]=$row['4'];
$index["correct"]=$row['5'];

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