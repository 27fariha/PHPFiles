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

$grade=10;

switch ($grade) {

    case  80:
       echo "Excellent!";
    break; 

    case  70:
       echo "Welldone";
    break;  
    case  60:
        echo "Better";
    break; 
    
    case  50 :
        echo "next time better luck";
    break; 


    default:
        echo "Invalid Choice";
    break; 
}



















/* $age=30;


if ($age!=0){
    if($age >=18){
        echo "Eligible";
    }
    else{
        echo "Not Eligible";
    }
}
else{
    echo "Invalid Age";
}

 */











?>







</body>
</html>