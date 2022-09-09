<?php


$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "exam";


$conn = new mysqli($servername, $username, $passwor, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sem=$_REQUEST['sem'];
$dev=$_REQUEST['dev'];
$col=$_REQUEST['col'];

    $result=array();
    $result['data']=array();
    $select="SELECT student.fname,student.lname, student_result.uid,student_result.$col FROM student_result INNER JOIN student ON student_result.uid=student.uid WHERE student_result.dev='$dev' and student_result.sem='$sem';";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
    $index["fname"]=$row['0'];
    $index["lname"]=$row['1'];
    $index["uid"]=$row['2'];
    $index["marks"]=$row['3'];
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