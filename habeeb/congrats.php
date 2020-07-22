<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="congrats-wrapper">
        <h1>you just signed up for weJapa internship, expect our message soon</h1>
        <div class="div-post">
             <?php
                 echo '<br><h1>Congratulations</h1> '.$_POST['fname'].' '.$_POST['lname'];
             ?>
        </div>
        <p>click <a href="index.php">here</a>to go back home</p>
    </div>
</div>
</body>
</html>