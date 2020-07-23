<?php
    if(isset($_POST['submit'])){
        $u_name = $_POST['uname'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
    }else header("location:index.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeJapa PHP WK1 Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="page__content">
            <div class="content">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h1>Dear <?php echo $u_name ;?></h1>
                            <p>Thank you for using this form.</p><br>
                            <p>
                               Your fullname is  <strong><?php echo $fname; ?></strong> and your email address is <strong><?php echo $email; ?></strong>.
                            </p>
                            <a  href="index.html" class="btn btn-secondary">Return to Form</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>