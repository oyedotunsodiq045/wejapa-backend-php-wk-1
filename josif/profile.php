<?php
    session_start();

    if ((isset($_SESSION['firstname']) && $_SESSION['firstname'] != '')
     && (isset($_SESSION['lastname']) && $_SESSION['lastname'] != '')
     && (isset($_SESSION['email']) && $_SESSION['email'] != '')
     && (isset($_SESSION['username']) && $_SESSION['username'] != '')
     && (isset($_SESSION['level']) && $_SESSION['level'] != '')
    )
    {
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Site Metas -->
        <title>Profile</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/logo_2.png" type="image/x-icon" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
          <div class="col-sm-12 col-md-9 col-lg-6" id="center-div">
            <h2>
                <span style="color: #7386D5;">Thanks for replying</span>
            </h2>
            <h4>This is your profile:</h4>
            <h4>
                <span class="font-weight-bold">Firstname: </span><br /><?php echo $_SESSION['firstname'] ?>
    </h4>
    <h4>
                <span class="font-weight-bold">Lastname: </span><br /><?php echo $_SESSION['lastname'] ?>
    </h4>
            <h4>
                <span class="font-weight-bold">Email: </span><br /><?php echo $_SESSION['email'] ?>
    </h4>
            <h4>
                <span class="font-weight-bold">Username: </span><br /><?php echo $_SESSION['username']?>
    </h4>
            <h4>
                <span class="font-weight-bold">Stack Level: </span><br /><?php echo $_SESSION['level']?>
    </h4>
          </div>
        </div>
    </body>
</html>
<?php
    }
    else
    {
        header("location : index.php");
    }
?>