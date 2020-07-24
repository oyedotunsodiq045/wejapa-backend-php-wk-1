<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title>User Response</title>
    <link rel="stylesheet"
          type="text/css"
          href="myFormStyle.css" />
  </head>
  <body>
    <h2>User Details</h2>
    <?php
      //gather the variables
      $firstName = filter_input(INPUT_POST, "firstName");
      $lastName = filter_input(INPUT_POST, "lastName");
      $address = filter_input(INPUT_POST, "address");
      $state = filter_input(INPUT_POST, "state");
      $phone = filter_input(INPUT_POST, "phone");
      $email = filter_input(INPUT_POST, "email");
      $dob = filter_input(INPUT_POST, "date_of_birth");
      $stack = filter_input(INPUT_POST, "stack");
      $level = filter_input(INPUT_POST, "level");
      $education = filter_input(INPUT_POST, "education");
      $getDob = explode("-", $dob);
      $birthYear = $getDob[0];
      $curYear = date('Y');
      $age = $curYear - $birthYear; 
      
      //send user response
      print "<h4>Hello, $firstName! Here are the details you submitted</h4>";
      $reply = <<< HERE
    
      <fieldset>
        <legend><strong>Personal Details</strong></legend>
        <p>
          <strong>Full Name:</strong> $firstName $lastName.
        </p>
        <p>
          <strong>Address:</strong> $address, $state.
        </p>
        <p>
          <strong>Telephone number:</strong> $phone.
        </p>
        <p>
          <strong>E-mail Address:</strong> $email
        </p>
      </fieldset>
        <h4>
          You stated that you were born on $dob and that makes you $age years old.
          You are a $level on $stack track on Wejapa. Great stuff! you attended $education.
        </h4>
        
HERE;
      print $reply;
    ?>
  </body>
</html>

    