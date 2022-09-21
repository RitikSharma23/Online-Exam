<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
</head>
<body>

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
$subcol=$_REQUEST['subcol'];
$marks=$_REQUEST['marks'];

echo "<span id='uid' style='display:none;'>".$uid."</span>";
echo "<span id='subcol' style='display:none;'>".$subcol."</span><br>";



$select="UPDATE `student_result` SET `$subcol` = '$marks' WHERE `student_result`.`uid` = '$uid';";

if ($conn->query($select) === TRUE) {
    echo "<center><h1 align='center' >FEEDBACK</h1><textarea id='feed' style='width:80%;height:500px;border:4px solid #b865ae;font'></textarea>
    <a><br><br><button id='submit'>Submit</button></a></center>";
  } else {
    echo "Error: <br>" . $conn->error;
  }
  $conn->close();
?>

<script>
  document.getElementById("submit").addEventListener("click",()=>{
		localStorage.setItem(document.getElementById("subcol").innerHTML,1)
    feed=document.getElementById("feed").value;
    y=new Date;
    date=y.getYear()+"-"+y.getMonth()+"-"+y.getDate();
    uid=document.getElementById("uid").innerHTML;

    console.log(feed)

    ss=new XMLHttpRequest
    ss.open("GET","../api/question.php?obj=5&date="+date+"&uid="+uid+"&feed="+feed,true)
    ss.onload=function(){
      res=this.responseText;
    }
    ss.send();
    location.replace("studentdashboard.php")
  })
</script>

<style>
  #submit{
    width: 120px;
    height: 40px;
    background-color: #1e81b0;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 15px;
    color: white;
  }
</style>
  
</body>
</html>

