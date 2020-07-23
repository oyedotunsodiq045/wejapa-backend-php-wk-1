<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
         
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="text-primary">User Details</h2>
                    </div>
                    <div class="card-body">

                        <p class="card-text">
                        <form action="" method="POST">

                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Name</span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="example@gmail.com">
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Phone</span>
                                </div>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address</span>
                                </div>
                                <input type="text" name="address" class="form-control" placeholder="Enter your address">
                            </div>

                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gender</span>
                                </div>
                                <select class="form-control" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Track</span>
                                </div>
                                <select class="form-control" name="track">

                                    <option>Frontend</option>
                                    <option>Backend</option>
                                    <option>UI/UX</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12">
            <div class="alert alert-success text-center " role="alert">
                <?php 
        
                    if(isset($_POST['submit'])){
                        echo "Hello <b>".$_POST["name"]."</b>";       
                        }     
                ?> <br>
                <p>Your credentials are shown below:</p>
                <?php 
        
                    if(isset($_POST['submit'])){
                        echo "<b> Email: </b>  ".$_POST["email"];
                    }     
                ?> <br>
                <?php 
        
                    if(isset($_POST['submit'])){
                        echo "<b> Phone Number: </b>  ".$_POST["phone"];
                    }     
                ?> <br>
                <?php 
        
                    if(isset($_POST['submit'])){
                        echo "<b> Address: </b>  ".$_POST["address"];
                    }     
                ?> <br>
                <?php 
        
                    if(isset($_POST['submit'])){
                        echo "<b> Gender: </b>  ".$_POST["gender"];
                    }     
                ?> <br>
                <?php 
        
                    if(isset($_POST['submit'])){
                        echo "<b> Track: </b>  ".$_POST["track"];
                    }     
                ?> 
            </div>
            </div>
        </div>  
    </div>
   
</body>
</html>