<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h3>Comparision operator </h3>
<?php

$num_one =10;
$num_two=20;                                                                                                                                                                                        

if($num_one<=$num_two){
    echo "true";
}
else{
    echo "False";
}

#echo ++$num_one; //pre inc

#echo $num_two++;  //post inc


echo --$num_one; //pre dec
echo $num_two--;  //post dec
echo $num_two;

for ($i=0; $i < 10; $i++) { 
    echo $i;
    Echo "<br>";
}
$a=1;
while ($a <= 10) {
    echo $a;
    $a++;
}
echo "<br>";
$b=1;
do{

echo $b;
$b++;
}
while($b<10)

#echo $num_one==$num_two;




?>



</body>
</html>