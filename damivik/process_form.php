<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>wejapa-backend(php)-task1</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <p>
            Hello
            <span class="font-weight-bold">
                <?php
                echo $_POST['firstName'] . " " .  $_POST['lastName'];
                ?>.</span>
            These are the details you submitted:
        </p>

        <p>
            <span class="font-weight-bold">Email: </span>
            <?php echo $_POST['email'] ?>
        </p>

        <p>
            <span class="font-weight-bold">Mobile No: </span>
            <?php echo $_POST['mobile']?>
        </p>
        <p>
            <span class="font-weight-bold">Age: </span>
            <?php
            echo (new DateTime($_POST['dateOfBirth']))->diff((new DateTime()))->y;
            ?>
        </p>
        <p>
            <span class="font-weight-bold">Location: </span>
            <?php echo $_POST['location'] ?>
        </p>
        <p>
            <span class="font-weight-bold">Bio: </span>
            <?php echo $_POST['bio'] ?>
        </p>
    </div>
</body>

</html>