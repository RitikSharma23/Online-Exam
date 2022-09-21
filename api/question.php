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

  
function insert_question($conn){

    $quid=$_REQUEST['quid'];
    $no=$_REQUEST['no'];
    $sem=$_REQUEST['sem'];
    $testid=$_REQUEST['id'];
    $subject=$_REQUEST['subject'];
    $unit=$_REQUEST['unit'];
    $date=date('Y-m-d');
    $question = $_REQUEST['question'];
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
    $d = $_REQUEST['d'];
    $correct = $_REQUEST['correct'];
    $division=$_REQUEST['dev'];
    $select="INSERT INTO question(user,question_id,dat,sem,subject,unit,division,no,question,a,b,c,d,correct)VALUES ('$quid','$testid','$date','$sem','$subject','$unit','$division','$no','$question','$a','$b','$c','$d','$correct')";

    if ($conn->query($select) === TRUE) {
        echo "1";
      } else {
        echo "Error:  <br>" . $conn->error;
      }
      $conn->close();
    
}

function insert_question_details($conn){
    $quid=$_REQUEST['quid'];
    $total=$_REQUEST['total'];
    $sem=$_REQUEST['sem'];
    $testid=$_REQUEST['id'];
    $subject=$_REQUEST['subject'];
    $unit=$_REQUEST['unit'];
    $date=date('Y-m-d');
    $division=$_REQUEST['dev'];
    $status="stop";

    $select="INSERT INTO question_details(user,date,question_id,sem,dev,subject,unit,total,status)VALUES ('$quid','$date','$testid','$sem','$division','$subject','$unit','$total','$status')";

    if ($conn->query($select) === TRUE) {
        echo "1";
      } else {
        echo "Error: <br>" . $conn->error;
      }
      $conn->close();

}
function insert_column($conn){
    $column = $_REQUEST['column'];
    $pos = $_REQUEST['pos'];
    
    $select="ALTER TABLE `student_result` ADD `$column` INT NOT NULL DEFAULT '-1' AFTER `$pos`;";
    
    if ($conn->query($select) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: <br>" . $conn->error;
      }
      
      $conn->close();
  }
function display_column($conn){
      $result=array();
      $result['data']=array();
      $select="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'student_result' ORDER BY ORDINAL_POSITION;";
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
  }

function feedback($conn){
  $date=$_REQUEST['date'];
  $uid=$_REQUEST['uid'];
  $feed=$_REQUEST['feed'];

  $select= "INSERT INTO `feedback` ( `date`, `uid`, `feed`) VALUES ('$date', '$uid', '$feed');";

  if ($conn->query($select) === TRUE) {
      echo "1";
    } else {
      echo "Error:  <br>" . $conn->error;
    }
    $conn->close();
  }

}


$apple = new Fruit();


switch($choice){
  case 1:$apple->insert_question($conn);break;
  case 2:$apple->insert_question_details($conn);break;
  case 3:$apple->display_column($conn);break;
  case 4:$apple->insert_column($conn);break;
  case 5:$apple->feedback($conn);break;

}



?>
