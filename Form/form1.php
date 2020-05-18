<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form2.php" method="get">
<label for="">Enter your  Name</label>
<input type="text" name="name" id="name">
<br><br>
<label for="">Enter your Age</label>
<input type="number" name="age" id="age">
<br><br>
<label for="">Gender : </label>
<input type="radio" name="gender" id="gender"> <label for="">Male</label>
<input type="radio" name="gender" id="gender"> <label for="">Female</label>
<br><br>
<label for="">Enter YOur Email</label>
<input type="email" name="email" id="email">
<br><br>
<label for="">Enter YOur Email</label>
<input type="password" name="pass" id="pass">
<br><br>
<input type="submit" value="Submit" name="SubmitBtn">
</form>
<?php 

/* if(isset($_GET["SubmitBtn"])){
$name1=$_GET["name"];
$age1=$_GET["age"];
$gender1=$_GET["gender"];
$email1=$_GET["email"];
$pass=$_GET["pass"];

echo "<br><h2>Your Name is :".$name1."</h2>"  ;

echo "<h2> Your age is :".$age1."  </h2>";

echo "<h2>Your Gender is : ".$gender1."</h2>";

echo "<h2>Your Email is : ".$email1."</h2>";


echo "<h2>Your Password is : ".$pass."</h2>";


}
 */


/* if(isset($_POST["SubmitBtn"])){
    $name1=$_POST["name"];
    $age1=$_POST["age"];
    $gender1=$_POST["gender"];
    $email1=$_POST["email"];
    $pass=$_POST["pass"];
    
    echo "<br><h2>Your Name is :".$name1."</h2>"  ;
    
    echo "<h2> Your age is :".$age1."  </h2>";
    
    echo "<h2>Your Gender is : ".$gender1."</h2>";
    
    echo "<h2>Your Email is : ".$email1."</h2>";
    
    
    echo "<h2>Your Password is : ".$pass."</h2>";
    
    
    } */
    
?>




</body>
</html>