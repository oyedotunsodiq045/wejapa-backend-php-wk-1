<?php
session_start();
$errorCount = 0;

$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorCount++; 
$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$message = $_POST['message'] !=""? $_POST['message'] : $errorCount++;


$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;


if($errorCount > 0){

    $session_error = "You have " . $errorCount . " error"; 
        
    if($errorCount > 1) {
        $session_error .= "s";
    }
    $session_error .= " in your form";
    $_SESSION['error'] = $session_error; 
    header("Location: index.php ");
}else{
 
    echo "Hello " .$first_name ." ".$last_name ." " ."Your message from " . $email ." has been received, we will get back to you shortly.";
}





