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

  
function dashboardenuser($conn){
    $result=array();
    $userid=$_REQUEST['userid'];
    $result['data']=array();
    $select="SELECT * FROM `faculty` where userid='$userid' ;";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
      $index["ind"]=$row['0'];
      $index["userid"]=$row['1'];
      $index["fname"]=$row['2'];
      $index["lname"]=$row['3'];
      $index["email"]=$row['4'];
      $index["phone"]=$row['5'];
      $index["pass"]=$row['6'];
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
  
function dashboardenroll($conn){
    $result=array();
    $uid=$_REQUEST['uid'];
    $result['data']=array();
    $select="SELECT * FROM `student` where uid='$uid' ;";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
    $index["roll"]=$row['0'];
    $index["fname"]=$row['1'];
    $index["lname"]=$row['2'];
    $index["phone"]=$row['3'];
    $index["email"]=$row['4'];
    $index["dob"]=$row['5'];
    $index["sem"]=$row['6'];
    $index["div"]=$row['7'];
    $index["uid"]=$row['8'];
    $index["year"]=$row['9'];
    $index["flat"]=$row['10'];
    $index["pin"]=$row['11'];
    $index["area"]=$row['12'];
    $index["city"]=$row['13'];
    $index["state"]=$row['14'];
    $index["pass"]=$row['15'];
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
function fdashboard($conn){
    $result=array();
    $result['data']=array();
    $select="SELECT * FROM `faculty`;";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
    $index["ind"]=$row['0'];
    $index["userid"]=$row['1'];
    $index["fname"]=$row['2'];
    $index["lname"]=$row['3'];
    $index["email"]=$row['4'];
    $index["phone"]=$row['5'];
    $index["pass"]=$row['6'];
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
function sdashboard($conn){
    $result=array();
    $result['data']=array();
    $select="SELECT * FROM `student`;";
    $responce=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($responce)){
    $index["roll"]=$row['0'];
    $index["fname"]=$row['1'];
    $index["lname"]=$row['2'];
    $index["phone"]=$row['3'];
    $index["email"]=$row['4'];
    $index["dob"]=$row['5'];
    $index["sem"]=$row['6'];
    $index["div"]=$row['7'];
    $index["uid"]=$row['8'];
    $index["year"]=$row['9'];
    $index["flat"]=$row['10'];
    $index["pin"]=$row['11'];
    $index["area"]=$row['12'];
    $index["city"]=$row['13'];
    $index["state"]=$row['14'];
    $index["pass"]=$row['15'];
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
   
    $select="INSERT INTO faculty (userid, fname, lname, phone,  email, pass) VALUES ('$userid', '$fname', '$lname', '$phone', '$email', '$pass') ;";
       
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
    $select2="INSERT INTO student_result (uid,sem,dev) VALUES ('$uid','$semester','$dev') ;";
       
       if ($conn->query($select2) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
         
         $conn->close();
   }
   
   function facultyedit($conn){
    $userid=$_REQUEST['userid'];
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];
   
    $select="update faculty set fname='$fname', lname='$lname',phone='$phone',email='$email',pass='$pass' where userid='$userid';";
       
       if ($conn->query($select) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
         
         $conn->close();
   }
   function superstudentedit($conn){

        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        $dob=$_REQUEST['dob'];
        $phone=$_REQUEST['phone'];
        $roll=$_REQUEST['roll'];
        $sem=$_REQUEST['sem'];
        $div=$_REQUEST['div'];
        $year=$_REQUEST['year'];
        $flat=$_REQUEST['flat'];
        $pin=$_REQUEST['pin'];
        $area=$_REQUEST['area'];
        $city=$_REQUEST['city'];
        $state=$_REQUEST['state'];
        $pass=$_REQUEST['pass'];
        $uid=$_REQUEST['uid'];

        $select="update student set fname='$fname',lname='$lname',email='$email',dob='$dob',phone='$phone',roll='$roll',semester='$sem',dev='$div',ayear='$year',flat='$flat',pin='$pin',area='$area',city='$city',state='$state',pass='$pass' where uid='$uid';";
 
       if ($conn->query($select) === TRUE) {
           echo "New record updated successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
         
         $conn->close();
   }
   
   function studentedit($conn){
     $email=$_REQUEST['email'];
     $flat=$_REQUEST['flat'];
     $pin=$_REQUEST['pin'];
     $area=$_REQUEST['area'];
     $city=$_REQUEST['city'];
     $state=$_REQUEST['state'];
     $pass=$_REQUEST['pass'];
     $uid=$_REQUEST['uid'];
    
     $select="update student set email='$email', flat='$flat', pin='$pin', area='$area', city='$city', state='$state', pass='$pass' where uid='$uid' ;";
        
       if ($conn->query($select) === TRUE) {
           echo "New record updated successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
         
         $conn->close();
   }
   
   function studentdelete($conn){
     $uid=$_REQUEST['uid'];
    
     $select="delete from student where uid='$uid' ;";
     $select1="delete from student_result where uid='$uid' ;";
        
       if ($conn->query($select) === TRUE) {
           echo "New record deleted successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
       if ($conn->query($select1) === TRUE) {
           echo "New record deleted successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
         
         $conn->close();
   }
   function facdelete($conn){
     $uid=$_REQUEST['uid'];
    
     $select="delete from faculty where userid='$uid' ;";
        
       if ($conn->query($select) === TRUE) {
           echo "New record deleted successfully";
         } else {
           echo "Error: <br>" . $conn->error;
         }
         
         $conn->close();
   }
   
   }


$apple = new Fruit();
// $apple->login($conn);


switch($choice){
  case 1:$apple->sdashboard($conn);break;
  case 2:$apple->superstudentedit($conn);break;
  case 3:$apple->dashboardenroll($conn);break;
  case 4:$apple->studentreg($conn);break;
  case 5:$apple->fdashboard($conn);break;
  case 6:$apple->dashboardenuser($conn);break;
  case 7:$apple->facultyedit($conn);break;
  case 8:$apple->facultyreg($conn);break;
  case 9:$apple->studentdelete($conn);break;
  case 10:$apple->facdelete($conn);break;

}












?>