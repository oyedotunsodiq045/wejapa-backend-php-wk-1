<?php 
	
	if(isset($_POST["firstName"])){
		
		echo "<h1> Hi ". $_POST["firstName"]. " ". $_POST["lastName"]. "</h1>";
		echo "Thank you for filling this form";

		echo "We'll contact you";
		
		



	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<!-- Forms -->
		 <form action="week1-1.php" method="POST">
		 	<div> <!-- Make the contents to be in blocks -->
		 		<label>First Name</label>
		 		<input type="text" name="firstName" placeholder="Enter first name">
		 		
		 	</div>
		 	<br>
		 	<div>
		 		<label>Last Name</label>
		 		<input type="text" name="lastName">
		 		
		 	</div>
		 	<br>
		 	<div>
		 		<label>Email</label>
		 		<input type="email" name="email">
		 	</div>
		 	<br>
		 	<div>
		 		<label>Phone No.</label>
		 		<input type="tel" name="phone" placeholder="Country code first">
		 	</div>
		 	<br>
		 	<div>
		 		<label>Github Link</label>
		 		<input type="url" name="url">
		 		<p>
		 			<strong>Note:</strong>Enter link in the format "https://www.google.com"
		 		</p>
		 	</div>
		 	<br>
		 	<div>
		 		<label>Message</label>
		 		<textarea name = "message"></textarea>
		 	</div>
		 	<br>
		 	<div>
		 		<label>Gender</label>
		 		<select name = "gender">
		 			<option value = "select gender">Select Gender</option>
		 			<option value = "Male">Male</option>
		 			<option value = "Female">Female</option>	
		 		</select>
		 	</div>
		 	<br>
		 	<div>
		 		<label>Age:</label>
		 		<input type= "number" name="age" value="30">	
		 	</div>
		 	<br>
		 	<div>
		 		<label>Date of Birth</label>
		 		<input type= "date" name="birthday">	
		 	</div>
		 	<br>
		 	<input type="submit" name="submit" value="Submit">
		 	<br>
		 	<input type="reset" name="reset" value="Reset">
		 </form>

</body>
</html>