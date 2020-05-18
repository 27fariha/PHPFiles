<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="addnum.php" method="post">

<label for="">Enter First Number</label>
<input type="text" name="fnum" id="fnum">
<br><br>
<label for="">Enter second Number</label>
<input type="text" name="snum" id="snum">
<br><br>

<input type="submit" value="Add Value" name="AddBtn">
</form>

<?php

if(isset($_POST["AddBtn"])){

$num1=$_POST["fnum"];
$num2=$_POST["snum"];

$result=$num1+$num2;

echo "<h1>Addition Result is :".$result."</h1>";


}






?>



</body>
</html>