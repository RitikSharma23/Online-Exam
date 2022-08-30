<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>

</head>
<body>

<div id="question">
    <?php
     $fname=$_REQUEST['fname'];
     $lname=$_REQUEST['lname'];
     $email=$_REQUEST['email'];
     $phone=$_REQUEST['phone'];
     $obj=$_REQUEST['obj'];
    $sem = $_REQUEST['sem'];
    $subject = $_REQUEST['subject'];
    $unit = $_REQUEST['unit'];
    
   

    echo "fname : <span id='fname'>".$fname."</span><br>";
    echo "lname : <span id='lname'>".$lname."</span><br>";
    echo "email : <span id='email'>".$email."</span><br>";
    echo "phone : <span id='phone'>".$phone."</span><br>";
    echo "sem : <span id='obj'>".$sem."</span><br>";
    echo "subject : <span id='obj'>".$subject."</span><br>";
    echo "unit : <span id='obj'>".$unit."</span><br>";

    ?>
</div>


    <div id="div1">

    </div>

    <button id="add">Add new</button>
    <br><br>
    <button id="sub">Submit</button>

    <br><br>
    <span id="res"></span>

    <button id="click">Click</button>

    <script src="question.js"></script>

    <!-- <a href=></a> -->
    
</body>
</html>