<?php

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $track=$_POST['track'];

    echo "Hello,<b>{$firstName} {$lastName}</b><br>". 
    	"Your email is <b>" .$email ."</b><br>". 
    	"Your gender is <b>" .$gender ."</b><br>".
    	"Your are on <b>" .$track ."</b> track<br>". 
    	"Your Phone Number is <b>" .$phone ."</b><br>".
    	"Your birthday is on <b>" .$birthday ."</b><br>"; 

?>