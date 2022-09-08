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

  
function dashboard($conn){
    $result=array();
    $phone=$_REQUEST['phone'];
    $result['data']=array();
    $select="SELECT * FROM `question_details` WHERE user='$phone';";
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

  
}

  
function delete($conn){
    $id=$_REQUEST['id'];
    $select="DELETE FROM question WHERE question_id=$id;";

    if ($conn->query($select) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: <br>" . $conn->error;
    }

    $select2="DELETE FROM question_details WHERE question_id=$id;";

    if ($conn->query($select2) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: <br>" . $conn->error;
    }
    $conn->close();

  
}

function edit($conn){
    $quid=$_REQUEST['id'];
    $result=array();
    $result['data']=array();
    $select="SELECT question,a,b,c,d,correct	 FROM `question` WHERE question_id=$quid ORDER BY no;";
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
  
}


function start($conn){
    $id=$_REQUEST['id'];
    $sem=$_REQUEST['sem'];
    $dev=$_REQUEST['dev'];
    $unit=$_REQUEST['unit'];
    $sub=$_REQUEST['sub'];
    $col='sem_'.$sem.'_'.$sub.'_unit_'.$unit;
    $select="UPDATE `question_details` SET `status` = 'start' WHERE `question_details`.`question_id` = $id;";;
    if ($conn->query($select) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: <br>" . $conn->error;
    }
    $select1="UPDATE `student_result` SET `$col` = '0' WHERE sem='$sem' AND dev='$dev';";
    if ($conn->query($select1) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: <br>" . $conn->error;
    }
    $conn->close();
  
}


function stop($conn){
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $id=$_REQUEST['id'];
    $select="UPDATE `question_details` SET `status` = 'stop' WHERE `question_details`.`question_id` = $id;";;

    if ($conn->query($select) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: <br>" . $conn->error;
    }
    $conn->close();
  
}

function update($conn){
    $no=$_REQUEST['no'];
    $quid=$_REQUEST['id'];
    $question = $_REQUEST['question'];
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
    $d = $_REQUEST['d'];
    $correct = $_REQUEST['correct'];
    $select="UPDATE question set question='$question',a='$a',b='$b',c='$c',d='$d',correct='$correct' WHERE no='$no' AND question_id='$quid';";
    if ($conn->query($select) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: <br>" . $conn->error;
    }
  
}


}


$apple = new Fruit();
// $apple->login($conn);


switch($choice){
  case 1:$apple->dashboard($conn);break;
  case 2:$apple->delete($conn);break;
  case 3:$apple->edit($conn);break;
  case 4:$apple->start($conn);break;
  case 5:$apple->stop($conn);break;
  case 6:$apple->update($conn);break;
}












?>