<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>

    
<?php
$roll=$_REQUEST['roll'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$sem=$_REQUEST['sem'];
$dev=$_REQUEST['dev'];
$uid=$_REQUEST['uid'];



echo "roll : <span id='roll'>".$roll."</span><br>";
echo "fname : <span id='fname'>".$fname."</span><br>";
echo "lname : <span id='lname'>".$lname."</span><br>";
echo "phone : <span id='phone'>".$phone."</span><br>";
echo "email : <span id='email'>".$email."</span><br>";
echo "sem : <span id='sem'>".$sem."</span><br>";
echo "dev : <span id='dev'>".$dev."</span><br>";
echo "uid : <span id='uid'>".$uid."</span><br>";


    ?>





<div id="div1"></div>


<script src="studentdashboard.js"></script>
    
</body>
</html>