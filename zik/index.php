
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>

<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"></h5>

<div class="container">
    <div class="col-8">
        <h2>Register</h2>
    </div>
    <div class="col-8">
        <p><strong>Welcome, Please Register</strong></p>
    </div>
    <div class="col-8">
        <p>All Fields are required</p>
    </div>
    </div>
    </div>


    <form action="form.php" method="post" class="mt-2">
    <div class="container">
    <div class="row">
    <div class="col-8">
            <p>
                <label>First Name</label><br />
                <input type="text" class="form-control" name="first_name" placeholder="First Name" />
            </p>
            <p>
                <label>Last Name</label><br />
                <input type="text" class="form-control" name="last_name" placeholder="Last Name"  />
            </p>
            <p>
                <label>Email</label><br />
                <input type="text" class="form-control" name="email" placeholder="Email"  />
            </p>

            
            <p>
                <label>Gender</label><br />
                <select class="form-control" name="gender" >
               
                    <option value="">Select One</option>
                    <option>Female</option>
                    <option>Male</option>
                </select>
                </p>
           <p>
            <label>Track</label><br />
                <select class="form-control" name="track" >
                
                    <option value="">Select One</option>
                    <option>Frontend(FE)</option>
                    <option>Backend (BE)</option>
                    <option>Design</option>
                    </select>
                </p>
                              
                <p>
                <button class="btn btn-sm btn-success" type="submit">Register</button>
                </p>
           </div>
           </div>
           </div>
        </form>
        
</body>
</html>