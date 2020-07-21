<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="form.php" method="GET">
        <div class="formstuff">
            <div>
                <label for="">Fullname</label>
                <input type="text" name="fullname">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
    <div class="data">
        <?php
        $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6d19c977650fd", "c1ede30b", "heroku_1f0a660f47e45f9");
        $sql = "SELECT * FROM wejapa";
        $result = $conn->query($sql);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<div><div>$row[fullname]</div><div>$row[email]</div></div>";
            }
        }
        ?>
    </div>
</body>

</html>