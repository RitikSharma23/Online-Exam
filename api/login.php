<?php

$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "exam";


$conn = new mysqli($servername, $username, $passwor, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$choice=$_REQUEST['obj'];

class Fruit {
  public $conn;
  public $color;
  public $number;
  public $password;

  function __construct() {
   
    
  }

  
function facultylogin($conn){

    $number = $_REQUEST['number'];
    $password = $_REQUEST['password'];
    $result=array();
    $result['data']=array();
    $select="SELECT * FROM faculty WHERE userid='$number' AND pass='$password'";
    // $select="SELECT * FROM faculty WHERE phone='11' AND pass='22';";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
    $index["ind"]=$row['0'];
    $index["userid"]=$row['1'];
    $index["fname"]=$row['2'];
    $index["lname"]=$row['3'];
    $index["email"]=$row['4'];
    $index["phone"]=$row['5'];
    $index["pass"]=$row['6'];
    array_push($result['data'],$index);}
    if($result['data']==null){
      $result['success']="0";
    }else{
      $result['success']="1";
    }
    echo json_encode($result);
    mysqli_close($conn);  
}
  
function superuser($conn){

    $number = $_REQUEST['number'];
    $password = $_REQUEST['password'];
    $result=array();
    $result['data']=array();
    $select="SELECT * FROM admin WHERE userid='$number' AND pass='$password'";
    // $select="SELECT * FROM faculty WHERE phone='11' AND pass='22';";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
    $index["ind"]=$row['0'];
    $index["fname"]=$row['1'];
    $index["lname"]=$row['2'];
    $index["email"]=$row['3'];
    $index["phone"]=$row['4'];
    $index["pass"]=$row['5'];
    array_push($result['data'],$index);}
    if($result['data']==null){
      $result['success']="0";
    }else{
      $result['success']="1";
    }
    echo json_encode($result);
    mysqli_close($conn);  
}

function studentlogin($conn){
  $number = $_REQUEST['number'];
  $password = $_REQUEST['password'];
  $result=array();
  $result['data']=array();
  $select="SELECT roll,fname,lname,phone,email,semester,dev,uid,pass,img,flat,pin,area,city,state FROM student WHERE phone='$number' AND pass='$password'";
  $responce=mysqli_query($conn,$select);
  while($row=mysqli_fetch_array($responce)){

  $index["roll"]=$row['0'];
  $index["fname"]=$row['1'];
  $index["lname"]=$row['2'];
  $index["phone"]=$row['3'];
  $index["email"]=$row['4'];
  $index["semester"]=$row['5'];
  $index["dev"]=$row['6'];
  $index["uid"]=$row['7'];
  $index["pass"]=$row['8'];
  $index["img"]=$row['9'];
  $index["flat"]=$row['10'];
  $index["pin"]=$row['11'];
  $index["area"]=$row['12'];
  $index["city"]=$row['13'];
  $index["state"]=$row['14'];

  array_push($result['data'],$index);
  }
  if($result['data']==null){
    $result['success']="0";
  }else{
    $result['success']="1";
  }
  echo json_encode($result);
  mysqli_close($conn);
}

}

$apple = new Fruit();
// $apple->login($conn);


switch($choice){
  case 1:$apple->facultylogin($conn);break;
  case 2:$apple->studentlogin($conn);break;
  case 7:$apple->superuser($conn);break;
}












?>