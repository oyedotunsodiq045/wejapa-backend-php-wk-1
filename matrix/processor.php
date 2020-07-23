<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>wejapa-backend(php)-task1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Task 1</span>
    </nav>
    <div class="container mt-5">

        <p>
            Hello
            <span class="font-weight-bold">
                <?php echo $_POST['name']; ?>.</span>
            This is your profile:
        </p>
        <p>
            <span class="font-weight-bold">Email: </span>
            <?php echo $_POST['email'] ?>
        </p>
        <p>
            <span class="font-weight-bold">University Attended: </span>
            <?php echo $_POST['school']?>
        </p>
        <p>
            <span class="font-weight-bold">Qualification: </span>
            <?php echo $_POST['qualification'] ?>
        </p>
    </div>
</body>
</html>