<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Variables -->
    <?php 
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $track = $_POST["track"]
    ?>
        <div class="response">
            <p>Welcome to the WeJapa Internship <span><?php echo $first_name . " " . $last_name; ?></span> </p>
            <p class="track">Your track is <?php echo $track ?></p>
        </div>


</body>
</html>