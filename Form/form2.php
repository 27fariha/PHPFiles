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
    


    if(isset($_GET["SubmitBtn"])){
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

?>





</body>
</html>