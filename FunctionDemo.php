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

//1st method ,without pararmeter and argument
function MyFunction( ){ // function declarartion

    echo "This is my First Function statement <br>";
    echo "This is my Second Function statement <br>";
    echo "This is my Third Function statement<br>";

}

//calling a function
MyFunction(); //argument
MyFunction();
MyFunction();

//function with one parameter
function PrintName($name){
    echo "Welcome :".$name."<br>";
}

printName("fariha");
printname("Aliyan");
printName("jaffar");

//function with 3 parameter
function fullname($fname,$mname,$lname){
    echo "Your Full name is : ".$fname." ".$mname." ".$lname."<br>";
}

fullname("fariha","ahmed","khan");


//function with int type
function add($num1 ,$num2){
    $result = $num1+$num2;
    echo "Addititon result is :".$result;
}

add(12,56);

//function with default value
function Age($age = 20 ){
    echo "<br>Your age is : ".$age;
}
age();
age(50);

echo "<br>";

//function with return keyword

function Height($h){
    return $h;
}

 echo  Height(5.4);  //directly echo

$result= Height(5.7);  //store return value in variable

echo $result;













?>

</body>
</html>