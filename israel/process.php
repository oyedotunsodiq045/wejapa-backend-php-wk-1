<?php 
 

  if(isset($_POST["submit"])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email=$_POST['email'];
    $address = $_POST['add'];
    $level = $_POST['level'];

  }

    
    
    
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
	<section class="container justify-content-center">
    <section class="container form-container justify-content-center">
        <h3>Entered Details</h3>
        <span>First Name :</span> <span><?php echo $firstname; ?> </span> <br>
        <span>Last Name :</span> <span> <?php echo $lastname; ?> </span> <br>
        <span>Email :</span> <span><?php echo $email; ?></span> <br>
        <span>Address :</span> <span> <?php echo $address; ?></span> <br>
        <span>level :</span> <span> <?php echo $level; ?></span> <br>
        </section>	
     </section>



        
        <script src="" async defer></script>
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="" async defer></script>
    </body>
</html>