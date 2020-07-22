
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="detail">
    <?php
if(isset($_POST['age'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $stack = $_POST['stack'];
    $bio = $_POST['bio'];
}
?>
<?php print_r($_POST) ?>
    </section>
</body>
</html>