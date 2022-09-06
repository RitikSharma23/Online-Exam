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

  
function adminlogin($conn){

    $number = $_REQUEST['number'];
    $password = $_REQUEST['password'];
    $result=array();
    $result['data']=array();
    $select="SELECT * FROM admin WHERE phone='$number' AND pass='$password'";
    // $select="SELECT * FROM admin WHERE phone='11' AND pass='22';";
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
  $select="SELECT roll,fname,lname,phone,email,semester,dev,uid,pass FROM student WHERE phone='$number' AND pass='$password'";
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
function facultyreg($conn){
 $userid=$_REQUEST['userid'];
 $fname=$_REQUEST['fname'];
 $lname=$_REQUEST['lname'];
 $phone=$_REQUEST['phone'];
 $email=$_REQUEST['email'];
 $pass=$phone;

 $select="INSERT INTO admin (userid, fname, lname, phone,  email, pass) VALUES ('$userid', '$fname', '$lname', '$phone', '$email', '$pass') ;";
    
    if ($conn->query($select) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: <br>" . $conn->error;
      }
      
      $conn->close();
}
function studentreg($conn){
  $roll=$_REQUEST['roll'];
 $fname=$_REQUEST['fname'];
 $lname=$_REQUEST['lname'];
 $phone=$_REQUEST['phone'];
 $dob=$_REQUEST['dob'];
 $semester=$_REQUEST['sem'];
 $dev=$_REQUEST['div'];
 $uid=$_REQUEST['uid'];
 $ayear=$_REQUEST['year'];
 $pass=$phone;

 $select="INSERT INTO student (roll, fname, lname, phone,  dob, semester, dev, uid, ayear, pass) VALUES ('$roll', '$fname', '$lname', '$phone', '$dob', '$semester', '$dev', '$uid', '$ayear', '$pass') ;";
    
    if ($conn->query($select) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: <br>" . $conn->error;
      }
      
      $conn->close();
}

}


$apple = new Fruit();
// $apple->login($conn);


switch($choice){
  case 1:$apple->adminlogin($conn);break;
  case 2:$apple->studentlogin($conn);break;
  case 3:$apple->studentreg($conn);break;
  case 4:$apple->facultyreg($conn);break;
}












?>