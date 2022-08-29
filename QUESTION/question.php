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

    $name = $_REQUEST['name'];
    $sem = $_REQUEST['sem'];
    $subject = $_REQUEST['subject'];
    $unit = $_REQUEST['unit'];

    echo "<h1 id='name'>".$name."</h1>";
    echo "<h1 id='sem'>".$sem."</h1>";
    echo "<h1 id='subject'>".$subject."</h1>";
    echo "<h1 id='unit'>".$unit."</h1>";

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