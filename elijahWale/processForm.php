<?php
 
//  collect information from form
if(isset($_POST['submit'])){

    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['Email'];
    $message = $_POST['firstName'];

    echo "<strong>" . "Hi, " . $firstName . $lastName . "<br>". "your email is " . $email . "<br>" . "and the message you submitted is: " . $message . "</strong>"; 
}