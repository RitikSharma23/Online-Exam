<?php
$name;
$filename=$_REQUEST['filename'];
if(isset($_FILES['image'])){

    $name=$_FILES['image']['name'];
    $size=$_FILES['image']['size'];
    $tmp=$_FILES['image']['tmp_name'];
    $type=$_FILES['image']['type'];

    move_uploaded_file($tmp,"uploads/".$name);
}

$row = 1;
$question=array();
$a=array();
$b=array();
$c=array();
$d=array();
$correct=array();
$result=array();
$result['data']=array();

if (($handle = fopen("uploads/$filename", "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
            array_push($question,$data[0]);
            array_push($a,$data[1]);
            array_push($b,$data[2]);
            array_push($c,$data[3]);
            array_push($d,$data[4]);
            array_push($correct,$data[5]);
            $index["question"]=$data[0];
            $index["a"]=$data[1];
            $index["b"]=$data[2];
            $index["c"]=$data[3];
            $index["d"]=$data[4];
            $index["correct"]=$data[5];
            array_push($result['data'],$index);
    }
    $result['row']=$num;
    echo json_encode($result);
    fclose($handle);
}

?>