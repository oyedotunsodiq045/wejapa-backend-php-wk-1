<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Php Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>

<body>
<div class="d-flex flex-column flex-md-row align-items-center 
p-3 px-md-8 mb-8 bg-white border-bottom shadow-sm">
       
    <div class="container">
    <p>

    Hello

    <span class="font-weight-bold">

        <?php

        echo $_POST['first_name'];

        ?>.</span>

    </p>
        <h3> Here are your Details</h2>
        <?php
       
        echo
        '<p><strong> Fullname:</strong>' .  $_POST['first_name'].' '.$_POST['last_name'] .'</p>';
        echo '<p><strong> Gender :</strong>' . $_POST['gender'] .'</p>';
        echo '<p><strong>Email  :</strong>' . $_POST['email'] .'</p>';
        echo '<p><strong>Gender :</strong>' .$_POST['gender'].'</p>';
        echo '<p><strong>Track :</strong>' .$_POST['track'].'</p>';
        
        ?>
</div>
    </div>
</body>

</html>