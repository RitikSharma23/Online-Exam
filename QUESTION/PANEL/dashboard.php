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

  
}

function studentlogin($conn){
  
}

}


$apple = new Fruit();
// $apple->login($conn);


switch($choice){
  case 1:$apple->adminlogin($conn);break;
  case 2:$apple->studentlogin($conn);break;
}












?>