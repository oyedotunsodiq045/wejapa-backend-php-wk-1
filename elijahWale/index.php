<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Contact Form</h3>
        <form action="processForm.php" method="POST">
            <div class="form-control">
                <label>First Name</label><br>
                <input type="text" placeholder="Enter your firstName" name="firstName">
            </div>
            <div class="form-control">
                <label>Last Name</label><br>
                <input type="text" placeholder="Enter your lastName" name="lastName">
            </div>
            <div class="form-control">
                <label>Email</label><br>
                <input type="email" placeholder="Email" name="Email">
            </div>
            <div class="form-control">
                <label>Message</label><br>
                <textarea name="message" id=""></textarea>
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>  
    </div>
</body>
</html>