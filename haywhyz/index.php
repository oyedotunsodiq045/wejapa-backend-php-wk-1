<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Wejapa Intership Backend(php)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>
<body>
    <div class="container">
       <center> <h2 class="mt-o"style="font-size:3em">Fill your details</h2></center>
        <!-- <div class="row"> -->
            <form action="form.php" method="post" class="mt-3">
                <div class="form-group">
                    <label>Firstname </label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter your Firstname">
                </div>
                <div class="form-group">
                    <label>Lastname </label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter your Lastname">
                </div>
                <div class="form-group">
                    <label>Gender </label>
                   <select name="gender" id="" class="form-control">
                       <option>--select Gender---</option>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="others">Others</option>
                   </select>
                </div>
                <div class="form-group">
                    <label>Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label>Phone Number </label>
                    <input type="text" class="form-control" name="phonenumber" placeholder="Enter your Phone Number">
                </div>
                <div class="form-group">
                    <label> Slack Username </label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your Username">
                </div>
               
                 <div class="form-group">
                    <label>Address </label>
                    <textarea name="address" class="form-control"></textarea>
                    <!-- <input type="text" class="form-control" name="address" placeholder="Enter your address"> -->
                </div>
                <div class="form-group">
                   
                    <input type="submit" class="btn btn-dark btn-block" name="submit" value="submit">
                </div>

            </form>
        <!-- </div> -->
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>