<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php backend first week task</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      
    <div class="container">
        <h1>Wejapa interns Details</h1>
        <form action="congrats.php" method="POST">
            <label for="fname">
                <input name="fname" type="text" placeholder="Firstname" required>
            </label>
            <label for="lname">
                <input name="lname" type="text" placeholder="Lastname" required>
            </label>
            <label for="email">
                <input name="email" type="email" placeholder="Email" required>
            </label>
            <label for="phone">
                <input name="phone" type="text" placeholder="Phone number" required>
            </label><br>
            <input type="submit" value="SIGN UP">
        </form>
    </div>
   
    
</body>
</html>