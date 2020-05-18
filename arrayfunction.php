<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$studentlist= array("imad","aliyan","hasan","zia","jaffar");

//sort($studentlist);

rsort($studentlist);
foreach($studentlist as $item){

    echo $item."<br>";
}

$numlist=array(55,88,22,99,44,11);


//sort($numlist);
rsort($numlist);
foreach($numlist as $item){

    echo $item."<br>";
}


echo "Array Merge fuction";
echo "<br><br>";

$myarray=array_merge($studentlist,$numlist);


foreach($myarray as $item)
{
    echo $item."<br>";
}

echo "<br><br>";


$departmentList1=array("d"=>"imad", "i"=> "aliyan", "a"=>"jaffar");

ksort($departmentList1);


foreach($departmentList1 as $key => $value){
    echo "Key is : ".$key." and value is  :  ".$value."<br>";
}
?>






</body>
</html>