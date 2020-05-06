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

$a=20;

#condition ? statement 1 : statement 2
$b=($a > 40) ? "Value is greater than" :"Value is less than"; 

echo $b;


#voting age is graeter than 18 ? Eligible : Not Eligible

$votAge=20;

$checkAge=($votAge >=18)? "Eligible": "Not Eligible";

echo $checkAge;



/* if ($a>40){
    echo "Value is greater than";
}
else{
    echo "Value is less than";
}

 */
?>


</body>
</html>
