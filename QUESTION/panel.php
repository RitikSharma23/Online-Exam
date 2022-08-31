<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL</title>
</head>
<body>

<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$obj=$_REQUEST['obj'];

echo "fname : <span id='fname'>".$fname."</span><br>";
echo "lname : <span id='lname'>".$lname."</span><br>";
echo "email : <span id='email'>".$email."</span><br>";
echo "phone : <span id='phone'>".$phone."</span><br>";

?>

    <div id="div1"></div>

    <button id="start">start</button><br>
    <button id="stop">stop</button><br>
    <button id="delete">delete</button><br>

    
    <script src="../javascript/ADMIN/panel.js"></script>
</body>
</html>