<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body onload="column()">

<?php

$fname=$_REQUEST['fname'];

echo "<h1 id='fname'>".$fname."</h1>";
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
	