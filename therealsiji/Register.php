<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/Register.css">


    <title>Index</title>
</head>
<body class="mainBody" style="background-color:white;">
  <h1 class="display-4 text-center text-dark">Register Here</h1>

      <div class="card formContainer bg-dark text-white">
            <form class="myform"  method="post" action ="RegisterDisplay.php">
                <div class="form-group mt-3">
                    <label for="" style="margin-left: 60px;">Full Name</label>
                    <input class="form-control w-75 name" name="fullname" type="text" placeholder="Enter Your Full Name">
                    <div class="errName text-danger">
                      <!-- <?php echo $nameErr;?> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Phone Number</label>
                    <input class="form-control user w-75" type="number" name="PhoneNumber" placeholder="Select Phone Number">

                </div>
                <!-- <div class="form-group">
                    <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <input type="radio" name="mgender" value="male"> Male<br>
                    <input type="radio" name="fgender" value="female"> Female<br>
                </div> -->
                <div class="form-group gender">
                  <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <select class="mygender" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Next of Kin</label>
                    <input class="form-control user w-75" type="text" required name="NextOfKin" placeholder="Next of Kin">
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Next of Kin Phone Number</label>
                    <input class="form-control user w-75" type="number" required name="NextOfKinPhoneNumber" placeholder="Next of Kin Phone Number">
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Plate Number</label>
                    <input class="form-control user w-75" type="text" required name="carPlate" placeholder="Car Plate Number">
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Color</label>
                    <input class="form-control user w-75" type="text" required name="carColor" placeholder="Car Color">
                    <div class="errName text-danger">
                      <!-- <?php echo $colorErr;?> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Model</label>
                    <input class="form-control user w-75" type="text" required name="carModel" placeholder="Car Model">
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Chassis Number</label>
                    <input class="form-control user w-75" type="number" required name="carChassis" placeholder="Car Chassis Number">
                </div>
                    <button class="submit btn btn-outline-success mb-4 mt-3" name="myForm">Register Now</button>
            </form>
        </div>
</body>
</html>
