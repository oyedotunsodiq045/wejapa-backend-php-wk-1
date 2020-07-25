<?php
  $name         = htmlentities($_POST["name"]);
  $lastname     = htmlentities($_POST["lastname"]);
  $username     = htmlentities($_POST["username"]);
  $phoneNumber  = htmlentities($_POST["phone-number"]);
  $email        = htmlentities($_POST["email"]);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Form Data</title>
</head>
<body class="bg-red-700 flex justify-center items-center h-screen">
  <div class="container">
  <table class="table table-dark">
    <thead>
      <tr>     
        <th scope="col">Name</th>
        <th scope="col">Last</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <!-- <th scope="row">1</th> -->
        <td>
          <?php echo ucfirst($name) ?>
        </td>
        <td>
          <?php echo ucfirst($lastname) ?>
        </td>
        <td>
          <?php echo ucfirst($username) ?>
        </td>
        <td>
          <?php echo ucfirst($email) ?>
        </td>
        <td>
          <?php echo $phoneNumber ?>
        </td>
      </tr>   
    </tbody>
  </table>
</div>

</body>
</html>