<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User info</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/typewriter.css">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@100&display=swap" rel="stylesheet">

<style>
body
  {
    
    color: rgb(0,0,0); 
  }

.form-row{
  width: 70%;
  margin: 0 auto;
}
.welcome{font-size: 2rem;}
button{background-color: rgb(100, 10, 124) !important; color: rgb(255, 250, 255) !important; }
</style>
</head>
<body>

<?php 
      if(!isset($_POST['email']) || !isset($_POST['phone_no']) || !isset($_POST['f_name']) || !isset($_POST['l_name'])){
        header('location: index.php?msg=error');
      }
      else{
        if(empty($_POST['email']) || empty($_POST['phone_no']) || empty($_POST['f_name']) || empty($_POST['l_name'])){
          header('location: index.php?msg=error');
        }

         else{ ?>
          <div class="container ">
    <div class="row">
        <div class="col-12 alert-success text-center">
          <h3><i>success!</i></h3>
        </div>
        <div class="col-12 pt-5">
        <p class="text-center welcome">Welcome <span><b><?php echo $_POST["f_name"];?></b></span></p><hr>
        <h2>Your Details</h2>
        <p><b>First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b> <span><?php echo $_POST["f_name"];?></span></p>
        <p><b>Last Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <span><?php echo $_POST["l_name"];?></span></p>
        <p><b>Email Address: &nbsp;&nbsp;</b> <span><?php echo $_POST["email"];?></span></p>
        <p><b>Phone Number:&nbsp;</b> <span><?php echo $_POST["phone_no"];?></span></p>
        </div>
    </div>
    </div>
    <?php }
      }?>

    
</body>
</html>