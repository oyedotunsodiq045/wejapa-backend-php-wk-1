<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User info</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/typewriter.css">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@100&display=swap" rel="stylesheet">

<style>
body
  {
    background-image:linear-gradient(to bottom right,rgb(11, 30, 24),rgb(108, 187, 233) ); 
    color: rgb(255, 250, 255); 
  }

.form-row{
  width: 70%;
  margin: 0 auto;
}
button{background-color: rgb(210, 240, 154) !important; color: rgb(255, 40, 25) !important; }
button:hover{background-color: rgb(180, 210, 124) !important; }
</style>
</head>
<body>
    

<div class="container text-center px-0">
    <br><br>
    <div class="subscription-form">
      <br><br><br>
    <div class="row form-row">
        <div class="col-12">
        <h2>Hello! enter your details below please</h2>
        <br><br><br>
        <?php if(isset($_GET['msg']) && $_GET['msg']=='error'){?>
          <p class="alert-danger">Wrong input, please enter all required fields with valid input</p>
          <form class="email-form" action="display.php" method="POST" auto-complete="off">
              <div class="form-group">
                  <input type="text" class="form-control p-4" placeholder="Enter first name" id="fname" name="f_name"  style="background-color:linear-gradient(to left right,rgb(6, 91, 139),rgb(108, 187, 233) );">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control p-4" placeholder="Enter last name" id="lname" name="l_name" style="background-color:linear-gradient(to left right,rgb(6, 91, 139),rgb(108, 187, 233) );">
                </div>
              <div class="form-group">
                <input type="email" class="form-control p-4" placeholder="Enter email" id="email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Enter phone number" id="phone_no" name="phone_no">
              </div>
              <button type="submit" class="btn form-button p-3 w-100"> <h5>SUBMIT</h5> </button>
            </form>
            <br><br><br>
        </div>
    </div>
</div>
        <?php } else {?>
          <form class="email-form" action="display.php" method="POST" auto-complete="off">
              <div class="form-group">
                  <input type="text" class="form-control p-4" placeholder="Enter first name" id="fname" name="f_name"  style="background-color:linear-gradient(to left right,rgb(6, 91, 139),rgb(108, 187, 233) );">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control p-4" placeholder="Enter last name" id="lname" name="l_name" style="background-color:linear-gradient(to left right,rgb(6, 91, 139),rgb(108, 187, 233) );">
                </div>
              <div class="form-group">
                <input type="email" class="form-control p-4" placeholder="Enter email" id="email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Enter phone number" id="phone_no" name="phone_no">
              </div>
              <button type="submit" class="btn form-button p-3 w-100"> <h5>SUBMIT</h5> </button>
            </form>
            <br><br><br>
        </div>
    </div>
</div>
        <?php } ?>
</body>
</html>