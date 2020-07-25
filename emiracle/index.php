<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
                <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <title>Welcome Page</title>
    </head>
    <body>
        

        <div class='container'>
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        </div>
        <div class='container'>
            <h1 class="text-center">Let's Know you better</h1>
            <form role="form" method='post' action='validator.php'>
            <div class="form-group">
            <label  for="name">Full Name:</label>
            <input type="text" class="form-control" name="name" required placeholder="First Name Last Name Other Name">
            </div>
            <div class="form-group">
            <label  for="email">Email address:</label>
            <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
            <label  for="bio">Tell us a little about yourself:</label>
            <textarea name="bio" required="" class="form-control"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </body>
</html>