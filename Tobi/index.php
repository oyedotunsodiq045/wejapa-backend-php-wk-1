<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Display Name- WeJapa</title>
</head>
<body class="my-5 container">
<div class="">
  <div class="py-5">


    <?php

    if(isset($_POST['submit'])){
    // echo 'Tobiloba';
      echo "<div><p>Hello, <b>".$_POST['name']. ".</b><br> Your mail is <b>" .$_POST['email']. "</b>.<br> Having checked you Github: <b>" .$_POST['git']."</b> </p><p>Your Slack username is: <b>" .$_POST['slack']. "</b>, and you stay in <b>".$_POST['city']."</b>,<b>".$_POST['state']."</b></p><p>Nice meeting you!</p><div>";
    }

    ?>

  </div>
  <div class="">
      <h1>Welcome</h1>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="name">Fullname</label>
        <input name="name" required type="text" class="form-control" id="name"  placeholder="Enter fullname">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@email.com">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Github username</label>
        <input name="git" required type="text" class="form-control" aria-describedby="emailHelp" placeholder="github username">
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Slack username</label>
        <input name="slack" required type="text" class="form-control" aria-describedby="emailHelp" placeholder="Slack username">
    </div>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input name="city" required type="text" class="form-control" id="inputCity" placeholder="Ikorodu">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <input name="state" required type="text" class="form-control" aria-describedby="emailHelp" placeholder="State">
          </div>
        </div>
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>





</div>
</body>
</html>