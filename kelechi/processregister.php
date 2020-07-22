<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="assets/style.css" rel="stylesheet"> --> 

  </head>

  <body>
    <div class="container text-center">

       <?php 
            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
       ?>


    <h3> Hello  <?php echo $fullname ?> </h3> 
    <br>

    <div class="trial">
        <p> These are the details you filled in, please confirm </p>

        <p> Full Name: <?php echo $fullname; ?> </p>
        </br>

        <p> Email: <?php echo $email; ?> </p>
        <br/>

        <p> Phone: <?php echo $phone; ?> </p>
        <br/>

        <p> Password not shown for security reasons </p>

        <p> If you're satisfied with these details pls <a href="index.php"> proceed </a> else go <a href="index.php"> back </a>
    </div>

    </div>
  </body>
</html>