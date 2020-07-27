<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Form Handling</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <input type="text" name="name" value="" placeholder="Your name">
                <input type="text" name="username" value="" placeholder="Your username">
                <input type="email" name="email" value="" placeholder="Your email">
                <input type="number" name="phone" value="" placeholder="Your phone no.">
                <select name="prefer">
                    Preferred Language:
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Python">Python</option>
                    <option value="C#">C#</option>
                </select>
                <input type="submit" name="submit" value="Submit" />
            </form>
        </div>
        <div class="details">
            <?php 
                if(isset($_POST['submit'])){
                    echo "<h2>Your Details<br/></h2>";
                    echo "Name : ". $_POST['name'];
                    echo "<br/><br/>";
                    echo "Username : ". $_POST['username'];
                    echo "<br/><br/>";
                    echo "Email : ". $_POST['email'];
                    echo "<br/><br/>";
                    echo "Phone Number : ". $_POST['phone'];
                    echo "<br/><br/>";
                    echo "Preferred Language : ". $_POST['prefer'];
                    echo "<br/><br/>";
                } else {
                    echo 'Enter all fields';
                }
            ?>
        </div>
    </div>
</body>
</html>