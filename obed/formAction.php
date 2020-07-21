<?php

if (isset($_POST['submit'])) {
    
    // accepting the form input
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $email = $_POST['email'];
    // $gender = mysqli_real_escape_string( $_POST['gender']);

    if (empty($firstname) || empty($lastname) || empty($middlename) || empty($email)) {
        return false;
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname) || !preg_match("/^[a-zA-Z]*$/", $middlename)) 
        {
                    return false;

        } else {
            //checking for valid email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                exit();
            } else{
echo "<h1>YOUR INPUTS</h1>";

                echo $firstname;
                echo"<br>";
                echo $lastname;
                                echo"<br>";
                echo $email;
                                echo"<br>";
                echo $middlename;
                                                echo"<br>";
                echo '<a href="http://localhost/wejapa-backend-php-wk-1/obed/index.php">Go back</a>';

            }
     
    }
}
 }


?>