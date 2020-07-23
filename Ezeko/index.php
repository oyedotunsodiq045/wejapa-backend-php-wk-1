<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$fullname = $number = $email = $error = $responseMsg = "";

		//test input to ensure it is secure and free from any form of injections
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


		//when the submit button is clicked
		if(isset($_POST["submit"])) {
         if (empty($_POST["lastname"])){
             $error = "Lastname is required";

         }else{
             $lastname = test($_POST["lastname"]);
         }
         if (empty($_POST["firstname"])){
            $error = "Firstname is required";

        }else{
            $firstname = test($_POST["firstname"]);
        }
        if (empty($_POST["middlename"])){
            $middlename = "";

        }else{
            $middlename = test($_POST["middlename"]);
        }
        if (empty($_POST["number"])){
            $error = "Phone number is required";

        }else{
            $number = test($_POST["number"]);
        }
		//if mail field is empty	
			if(empty( $_POST["email"])) {
				$error = "The mail field is required";
			} else {
				$email = test( $_POST["email"]);

				//checks if email is a valid address
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$error = "Invalid email format";
				} else {
                    $fullname = $lastname . ' ' . $middlename . ' ' . $firstname;
                    $email;
                    $number;
				}

				}
			}
		}
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <title>User submission form</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  </head>
  <body>

  <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-6">
        <h2 class="mt-5">Add your details</h2>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> " class="mt-5">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="middlename">Middlename</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>
            
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div> 
            
            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control" id="number" name="number" required>
            </div> 
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         </form>

        </div>
    
   

        <!--submitted forms -->
                <div class="col-xl-6 pt-5">
                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0"> Submitted Users </h3>
                                                                

                                <p></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>FullName</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                            <tr>
                                                <td>
                                                <?php if (isset($fullname) && isset($email) && isset($number) ) 
                                                { echo 1; } ?>
                                                </td>
                                                <td><?php if (isset($fullname)) { echo $fullname; } ?></td>
                                                <td><?php if (isset($email)) { echo $email; } ?></td>
                                                <td><?php if (isset($number)) { echo $number; } ?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>    

    
    <script>
        jQuery(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>
  </body>
</html>