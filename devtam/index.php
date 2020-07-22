<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="form-container">
    <header>
        <img src="./wejapa.png" alt="logo" class="logo">
        <h1>Sign in to <span class="we">We</span><span class="japa">Japa</span></h1>
    </header>
<form method="post" action="index.php">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Enter your username">
    <label for="Password">Password</label>
    <input type="text" name="password" id="password" placeholder="Enter your password">
    

    <input type="submit" value="Log in">
<?php


if(!empty($_POST['username'])) {
    $username = $_POST['username'];
    echo "your Username is " . $username . "<br />";
}
if(!empty($_POST['password'])) {
    $password = $_POST['password'];
    echo "your Password is " . $password;
}


?>
</form>


</div>
    
</body>
</html>