<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Indexed Array</h2>
<?php
//$studentlist= array("Imad","aliyan","hasan","zia","jaffar"); //single dimen

//Key =>value //int ,comma operator

$departmentList=array(1=>"CS", 2=> "SE", 3=>"PharmD");
echo $departmentList[1];
echo $departmentList[2];
echo $departmentList[3];

echo "<br><br>";


foreach($departmentList  as $key =>$value   ){

echo "Key is :".$key. "and values is : ".$value."<br>";


}

echo "<h1>Associative array </h1>";

$departmentList1=array("a"=>"CS", "b"=> "SE", "c"=>"PharmD");

//echo $departmentList1["b"];


foreach($departmentList1  as $key =>$value   ){

    echo "Key is :".$key. "   and values is : ".$value."<br>";
    
    
    }
?>



</body>
</html>