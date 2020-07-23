<?php
$msg = "";
$firstname = $lastname = $email = $username = "";
$firstname_err = $lastname_err = $email_err = $username_err = "";

if (isset($_POST['submit']))
{
    if (empty(trim($_POST["firstname"])))
    {
        $firstname_err = "Please enter firstname.";
    }
    else {
        $firstname = trim($_POST["firstname"]);
    }

    if (empty(trim($_POST["lastname"])))
    {
        $lastname_err = "Please enter lastname.";
    }
    else {
        $lastname = trim($_POST["lastname"]);
    }

    //validate email
    if (empty(trim($_POST["email"])))
    {
        $email_err = "Please enter email.";
    }
    else {
        //SANITIZE EMAIL
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    }

    //VALIDATE USERNAME
    if (empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    }
    else
    {
        $username = trim($_POST["username"]);
    }

    $level = trim($_POST["level"]);


    //Check input errors before inserting in databse
    if((empty($firstname_err) && empty($lastname_err)) 
        && (empty($username_err) && empty($email_err))
    )
    {
      // Password is correct, so start a new session
      session_start();

      // Store data in session
      $_SESSION['firstname'] = $firstname;
      $_SESSION['lastname'] = $lastname;
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $username;
      $_SESSION['level'] = $level;

      // Redirect user to home page
      header("location: profile.php");
    }
}

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
        <title>Form</title>  
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
            <h2>Please fill in your details</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
              <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" />
                  <span class="help-block" style="color:red;"><?php echo $firstname_err; ?></span>
              </div>
              <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>" />
                  <span class="help-block" style="color:red;"><?php echo $lastname_err; ?></span>
              </div>
              <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" />
                  <span class="help-block" style="color:red;"><?php echo $email_err; ?></span>
              </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" />
                  <span class="help-block" style="color:red;"><?php echo $username_err; ?></span>
              </div>
              <div class="form-group">
                <label for="level">Level</label>
                <select name="level" class="form-control" required>
                    <option value="Beginner">Beginner</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
              </div>
              <div class="form-group">
                  <div class="pull-left">
                      <input type="submit" class="btn btn-warning" name="submit" value="Submit" style="background-color: #7386D5; border-color: #7386D5">
                  </div>
              </div>
            </form>
          </div>
        </div>
    </body>
</html>