<?php 
    session_start();
    include("functions/sessions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/css/bootstrap.min.css">
  <title>FORM</title>
</head>
<body>
      <div class="container">
          <div class="data">
              <h4> Let us know you </h4>
              <p>Enter your Details Below</p>
            
              <form action="process.php" method="post">
                       <p>
                         <?php 
                           error();
                         ?>
                       </p>
                        <p class="form-group">
                            <Label>First Name</Label><br>
                            <input type="text" name="firstName"  placeholder="First name" class="form-control" 
                            <?php firstname(); ?>>
                        </p>
                        <p class="form-group">
                            <Label>Last Name</Label><br>
                            <input type="text" name="lastName" placeholder="Last name" class="form-control"
                            <?php lastname(); ?>>
                        </p>
                        <p class="form-group">
                            <Label>Email</Label><br>
                            <input type="text" name="email" " placeholder="Email" class="form-control" id="exampleInputEmail1"
                            <?php email(); ?>>
                        </p>
                        <p class="form-group">
                            <label for="">Gender</label><br>
                            <select name="gender" id="exampleFormControlSelect1"
                                    >
                                    <option value="">Your Gender</option>
                                    <option value="male"  <?php
                                    gender();
                                    ?> >Male</option>
                                    <option value="female"  <?php
                                    gender1();
                                    ?>>Female</option>
                            </select>
                        </p>
                        <p class="form-group">
                            <Label>Phone Number</Label><br>
                            <input type="tel" name="number" placeholder="Phone Number" class="form-control"
                            <?php number(); ?>>
                        </p>
                        <p class="form-group">
                            <Label>git link</Label><br>
                            <input type="url" name="git"  placeholder="http://github.com/gitusername" class="form-control"
                            <?php git(); ?>>
                        </p>
                        <p class="form-group">
                            <input type="submit" value="submit" class="btn btn-primary" >
                        </p>
              </form>
          </div>
      </div>
</body>
</html>