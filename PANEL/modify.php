<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
<div id="div1"></div>
  
    <?php
    $id=$_REQUEST['id'];

    echo "<span id='quid' style='display:none'>".$id."</span>";
    ?>

<br>
<br>
<br>
<br>
<button id="sub">submit</button>

<script src="edit.js"></script>

    
<style>
  .hhh{
    border: solid;
  }
</style>


</body>
</html>