<?php
session_start();
if (isset($_POST["submit"])) {
    
    $errors = 0;
    $username = htmlspecialchars($_POST["username"]);
    $fullname = htmlspecialchars($_POST["fullName"]);
    $email = htmlspecialchars($_POST["email"]);
    $role = htmlspecialchars($_POST["role"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $addr = htmlspecialchars($_POST["addr"]);

// if (!validateEmail($email)) {
//     $errors +=1;
// }
// if (!validatePhone($phone)) {
//     $errors +=1;
// }

// function validateEmail($email){
//     $rsp = true;
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $rsp =  false;
//     }
//     return $rsp;
// }
// function validatePhone($phone)
// {       $rsp = true;
//         $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
//         if (!$phone) {
//             $rsp = false;
//         }
//         if(strlen(str_replace('-', '',$phone)) < 10 || strlen(str_replace('-', '',$phone)) > 14){
//             $rsp =  false;
//         }
        
//         return $rsp;
// }

    // Data to be Sent to the response page
    $data = [ 
        $fullname,
         $username,
         $email,
         $phone,
         $role,
         $dob,
         $addr
    ];
      
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="app" class="container">
    <?php if (!isset($data)) {?>
        <div class="heading text-center p-3">
            <h2>WEEK ONE TASK</h2>
            <h5>Complete the form below...</h5>
        </div>
        
        <form action="index.php" method="post" class="form container">
            <div class="form-group" autocomplete="false">
                <label for="fullName">Full Name: </label>
                <input type="text" id="fullName" name="fullName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="addr">Address: </label>
                <input type="text" id="addr" name="addr" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role">Role | Position: </label>
                <input type="text" id="role" name="role" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dob">DOB: </label>
                <input type="date" id="dob" name="dob" class="form-control" required>
            </div>
            <button class="btn btn-primary form-control" name="submit">SUBMIT</button>
        </form>
    <?php }else{?>
        <div id="output">
            <h2 class="text-center">Below are your Details</h2>
            <div>
                <p>Full Name: <?php echo $data[0] ?></p>
                <p>Username: <?php echo $data[1] ?></p>
                <p>Email: <?php echo $data[2] ?></p>
                <p>Phone: <?php echo $data[3] ?></p>
                <p>Role: <?php echo $data[4] ?></p>
                <p>DOB: <?php echo $data[5] ?></p>
                <p>Address: <?php echo $data[6] ?></p>
            </div>
        </div>


    <?php } ?>
    </div>



</body>
</html>