<?php
session_start(); require('functions/alerts.php');


//To complete Submission:
//(1) Collect data
//(2) Validate data: for non-empty fields, for non-numeric name and correct email address, et c
//(3) Proceed to Success.php

$error_count = 0;

//Collect the data (through the POST method) and attempt validation with ternary operator
$fullname = $_POST['fullname'] != "" ? $_POST['fullname'] : $error_count++;

$email = $_POST['email'] != "" ? $_POST['email'] : $error_count++;
$gender = $_POST['gender'] != "" ? $_POST['gender'] : $error_count++;
$stack = $_POST['stack'] != "" ? $_POST['stack'] : $error_count++;
$level = $_POST['level'] != "" ? $_POST['level'] : $error_count++;


//Validate the data

$correct_fullname = is_numeric($fullname);
strlen($fullname);

if($correct_fullname == 1){
    set_alert("error", "Name can not contain numbers. Please review");
    header("Location: index.php ");
}   
elseif(strlen($fullname) < 2){
    set_alert("error", "Name can not be less than two characters. Please review");
    header("Location: index.php ");
}  
else{

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))    {
        set_alert("error", "Invalid email format");
        header("Location: index.php ");
    }
    else{

        if(0 < $error_count) {
            //redirect to index page with error message
            $session_error = "You have " . $error_count . " empty field";
            if (1 < $error_count ) {
                $session_error .= "s";
            }
            set_alert("error", $session_error . " in your submission. Please review");
            header("Location: index.php ");

            //While redirected, hold data inputs after error message is printed 
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            $_SESSION['gender'] = $gender;
            $_SESSION['stack'] = $stack;
            $_SESSION['level'] = $level;
        }
        else{ //proceed to success.php

            //resave data in session variables to be shown across pages
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            $_SESSION['gender'] = $gender;
            $_SESSION['stack'] = $stack;
            $_SESSION['level'] = $level;
            set_alert("message", "Submission received!");
            header("Location: success.php ");

        }
    }
}