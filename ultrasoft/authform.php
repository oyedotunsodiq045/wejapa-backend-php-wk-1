<?php
 
//  process information from form
if(isset($_POST['submit'])){

    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['Email'];
    $message = $_POST['firstName'];

    echo  "Hello, " .$firstName .$lastName . "<br>" "your email is " .$email . "Thank you for subscribing"; 
}
