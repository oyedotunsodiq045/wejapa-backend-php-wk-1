<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/RegisterDisplay.css">
  </head>
  <body>
    <div class="content text-center">
      <?php
      if(isset($_POST['myForm'])){
        echo  '<h1>Car Information</h1>';
        echo  '<h2> Full Name:'.$_POST['fullname'].'</h2>';
        echo  '<h2> Phone Number:'.$_POST['PhoneNumber'].'</h2>';
        echo  '<h2> Gender:'.$_POST['gender'].'</h2>';
        echo  '<h2> Next Of Kin:'.$_POST['NextOfKin'].'</h2>';
        echo  '<h2> Next Of Kin Phone Number:'.$_POST['NextOfKinPhoneNumber'].'</h2>';
        echo  '<h2> Car Plate:'.$_POST['carPlate'].'</h2>';
        echo  '<h2>Car Color:'.$_POST['carColor'].'</h2>';
        echo  '<h2> Car Model:'.$_POST['carModel'].'</h2>';
        echo  '<h2> Car Chassis Number:'.$_POST['carChassis'].'</h2>';
      }
      ?>
    </div>
  </body>
</html>
