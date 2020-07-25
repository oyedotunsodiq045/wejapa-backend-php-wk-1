<?php

//require_once "dbConnection.php";
session_start();

if (isset($_POST)) {
	$name = trim(stripcslashes(htmlspecialchars($_POST['name'])));
	$email = trim(stripcslashes(htmlspecialchars($_POST['email'])));
	$bio = trim(stripcslashes(htmlspecialchars($_POST['bio'])));

	if (empty($name) OR empty($email) OR empty($bio)) {
		
        $mssg =  "<div class='alert alert-danger'>
        <strong>Error!</strong> Passwords don't match, try again
        </div>";
        $_SESSION['message'] = $mssg;

        header("location: index.php");
	}

	$explode = explode(' ', $name);

	$firstName = $explode[0];
    $lastName = $explode[1];
    $otherName = '';

    if (!empty($explode[2])) 
    {
        $otherName = $explode[2];
    }

    $message = "Look what we've got from you: <br>First Name: ".$firstName." <br>last Name: ".$lastName." <br>Other Name: ".$otherName." <br>email: ".$email." <br>About: ".$bio."";

	$_SESSION['message'] = "<div class='alert alert-success'>
                <strong>Congrat!</strong> <br>".$message."
                </div>";
    header("location: index.php");
}