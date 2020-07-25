<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		input,button{border-radius: 2px !important;}
	</style>
</head>
<body>
	<div class="container py-4 py-md-5">
		<div class="row mx-auto">
			<div class="col text-center">
				<h1>Contact Form</h1>
				<form class="mb-4" action="#" method="post">
					<div class="row justify-content-center mx-md-5 px-md-4">
					    <div class="col-6">
					      <label class="sr-only" for="firstName">First Name</label>
					      <div class="input-group">
					        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required>
					      </div>
					    </div>
					    <div class="col-6">
					      <label class="sr-only" for="lastName">Last Name</label>
					      <div class="input-group">
					        <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required>
					      </div>
					    </div>
					    <div class="col-6 py-4">
					      <label class="sr-only" for="phoneNumber">Phone Number</label>
					      <div class="input-group">
					        <input type="tel" class="form-control" id="phoneNumber" placeholder="08123456789" name="phoneNumber" required>
					      </div>
					    </div>
					    <div class="col-6 py-4">
					      <label class="sr-only" for="email">Email</label>
					      <div class="input-group">
					        <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email" required>
					      </div>
					    </div>
					    <div class="col">
					      <button type="submit" class="btn btn-danger mr-auto text-white px-4 w-100" name="submit">Submit</button>
					    </div>
					</div>
				</form>			
			</div>
		</div>
		<div class="row">
			<?php 
					$fname=$_POST['firstName'];
				 	$lname=$_POST['lastName'];
				 	$number=$_POST['phoneNumber'];
				 	$email=$_POST['email'];

				 	if(isset($_POST['submit'])){
				 	echo '<div class="col text-center"><h2><u>Your Contact</u></h2><br>
							<h4 class="text"><b>First Name:</b> '. $fname .'</h4><br>
							<h4 class="text"><b>Last Name:</b> '. $lname .'</h4><br>
							<h4 class="text"><b>Phone Number:</b> '. $number .'</h4><br>
							<h4 class="text"><b>Email Address:</b> '. $email .'</h4></div>';
					}
			?>	
		</div>
	</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
</body>
</html>