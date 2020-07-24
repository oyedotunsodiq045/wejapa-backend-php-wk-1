<?php

if(isset($_POST['submit'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    echo $first;echo "<br>";
    echo $last;echo "<br>";
    echo $email;echo "<br>";
    echo $number;echo "<br>";
}
   
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form-wejapa internship</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
    <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>ISAAC'S FORM</h1>
                <form method="POST" action="form.php">
                    <div class="form-group">
                        <input type="text" name="first" class="form-control" placeholder="Please input your First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last" class="form-control" placeholder="Please input your Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Please input your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="number" class="form-control" placeholder="Please input your Mobile Number" required>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name= "submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>



</html>