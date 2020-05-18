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

//$studentlist= array(   array ,array ,array,"zia","jaffar");

//multidimensional array

$std_BioData=array(
               //      0       1   2
            array("Imad",20,5.7),
            array("Moiz",20,5.5),
           array("abc",30,5.6)
);

//echo $std_BioData[0][0];

foreach( $std_BioData as $row ){

foreach(  $row  as $column){
    echo $column."   ";
}


}


?>









</body>
</html>