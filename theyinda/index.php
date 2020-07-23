<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Form</title>
  </head>
  <body>
    
    <div class="container">
    <h2 class="heading">Simple Form</h2>
      <form action="index.php" method="post" class="form">
        Name: <br><input type="text" name="username" placeholder="Your Name" class="name" required><br>
        <input type="submit" name="submit" value="Submit" class="submit">
      </form>
      <?php
      $name= $_POST["username"];
      echo "Hello " . $name;
      ?>
    </div>
  </body>
  </html>