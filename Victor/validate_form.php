<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Wejapa Intership Backend(php)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>
<body>
    <div class="container">
        <?php 
            echo "<h3>Hey " . $_POST['firstname'] ."</h3>"
        
        ?>

        <?php
       
        echo '<p> Fullname:' .  $_POST['firstname'].' '.$_POST['lastname'] .'</p>';
        echo '<p>Slack Username :' .$_POST['username'].'</p>';
        echo '<p> Gender :' . $_POST['gender'] .'</p>';
        echo '<p>Email  :' . $_POST['email'] .'</p>';
        echo '<p>Contact Number :' .$_POST['phonenumber'].'</p>';

        ?>

    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>