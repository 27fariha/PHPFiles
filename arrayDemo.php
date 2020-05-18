<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

//two mwthod of initializing an array

//1st method
$studentlist= array("Imad","aliyan","hasan","zia","jaffar");
echo  $studentlist[0]."<br>".$studentlist[1]."<br>".$studentlist[2]."<br>".$studentlist[3]."<br>".$studentlist[4]."<br>";

echo "<h3>with Foreach loop</h3>";
foreach($studentlist  as $item ){
 echo $item."<br> ";

}

$array_length=count($studentlist);
 
//echo "<h3>$array_length</h3>";  5

echo "<h3>with for Loop</h3>";
for ($i=0; $i < $array_length ; $i++) { 

    echo $studentlist[$i]."<br>";   //0,1
}



//2nd method
$numberlist[0]=11;
$numberlist[1]=22;
$numberlist[2]=33;

echo $numberlist[0]."<br>".$numberlist[1]."<br>".$numberlist[2];


$myinfo=array("fariha ahmed","BSCS",23,5.4);

foreach($myinfo  as $item1 ){
    echo $item1."<br> ";
   
   }
?>



</body>
</html>