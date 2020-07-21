<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
       <style>
    input[id^='name'] {
        width: 300px;
        height: 30px;
        border-color: #304c68;
        border-radius: 4em;
        padding: 0 1em;
    }

    input[id^='name']:focus,
    input[class^='btn']:focus {
        outline: none;
    }

    label {
        text-transform: uppercase;
    }

    input[class^='btn'] {
        width: 100px;
        height: 30px;
        color: #fff;
        background-color: #304c68;
        border: none;
        border-radius: 4em;
    }
    form {
        display: flex;
        flex-direction: column;
    }

    form *{
        margin: 0.5em;
    }

    a{
        text-decoration: none;
        color: rgb(255, 0, 0);
        text-transform: uppercase;
    }
    a:hover{
        color: rgb(0, 0, 255);
    }
</style>

</head>
<body>

<div id="form-div">
    <form action="" method="POST">
        <h1>Lets get to know you?</h1>
        <p>Please Enter you Name </p>
        <a href="index.php">Refresh Page</a>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter you name">

        <label for="codename">Codename:</label>
        <input type="text" name="code" id="name" placeholder="Enter you codename">
        <input type="submit" value="Submit name" name="submit" class="btn">
        
    </form>
   
</div> 

<?php
if (isset($_POST['submit'])) {
    echo '<br>Hello '.$_POST['name'];
    echo '<br><br>Hope we can work together,  '.$_POST['code'];
    echo '<br><br> My stack comprises of Html, CSS, and a touch of JS';
}
?>

</body>
</html>