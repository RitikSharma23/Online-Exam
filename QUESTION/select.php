<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body onload="column()">

<?php
// var details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&obj="+obj;


$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$obj=$_REQUEST['obj'];

echo "fname : <span id='fname'>".$fname."</span><br>";
echo "lname : <span id='lname'>".$lname."</span><br>";
echo "email : <span id='email'>".$email."</span><br>";
echo "phone : <span id='phone'>".$phone."</span><br>";
echo "obj : <span id='obj'>".$obj."</span><br>";
?>

    <div id="sem">Select Sem : <br><br></div>
    <button id="se">Submit</button>
    
    <br><br>
    <br>

    <div id="sub">Select Subject : <br><br></div>
    <button id="su" disabled>Submit</button>

    <br><br>
    <br>

    <div id="unit">Select Unit : <br><br></div>

    <button id="uni" disabled>Submit</button>


    <br><br>
    <br>

    total : <div id="total"></div>
    <br>

    <button id="submit" disabled> Confirm</button>


<script src="select.js"></script>
</body>
</html>
	