<?php
    if(isset($_POST['name'], $_POST['mail'], $_POST['age'], $_POST['gender'])){
        $name = htmlentities($_POST['name'], ENT_QUOTES,'UTF-8');
        $mail = $_POST['mail'];
        $age = (int)$_POST['age'];
        $gender = htmlentities($_POST['gender'], ENT_QUOTES,'UTF-8');

        echo "Your username is {$name}. <br> Your email address is {$mail}. <br> You are {$age} years of age. <br> You are {$gender}.";
    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wejapa-Form</title>
    <style><?php include 'CSS/style.css' ?></style>
</head>
<body>
<div class="form">
            <h1>Wejapa Registration Form</h1>
            <P>Please enter your details below.</P>
            <form action="index.php" method="post">
                <input class="input-fields" type="text" name="name" placeholder="username">
                <input class="input-fields" type="email" name="mail" placeholder="mail@example.com">
                <input class="input-fields" type="text" name="age" placeholder="how old are you?">
                <input class="input-fields" type="text" name="gender" placeholder="gender">
                <input id="button" type="submit" name="submit">                         
            </form>
        </div>
</body>
</html>