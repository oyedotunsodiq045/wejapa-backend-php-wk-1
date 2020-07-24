<!DOCTYPE html>
<html lang="en-us">
	<head><meta charset="UTF-8">
		<link rel="stylesheet" href="bootstrap.min.css">
		
		<title>Wajepa Task 1</title>
	</head>
<body>
<!-- just for navigation to exit -->
		<hr/>
			<nav class="nav-bar nav-bar-expand-xl-lg-md-sm bg-warning">
					<ul class="nav-bar nav">
						<li class="nav-item"><a class="nav-link text-success" href="#">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
					</ul>
			</nav>
	
<section class="body text-center bg-light">
<legend><b style="color:green">SIGN UP FORM</b></legend><center>
<!-- the form below is for only input -->
<form action="form-output.php" method="post" name="signup">
<input type="text" name="firstname" placeholder="First Name"><br/><br/>
<input type="text" name="lastname" placeholder="Last Name"><br/><br/>
<input type="email" name="mail" placeholder="E-mail" required="required"><br/><br/>
<input type="text" name="phone" placeholder="Phone Number"><br/><br/>
<input type="date" name="dob" placeholder="Date of Birth"><br/><br/>
<select name="track">
<option value="#" name="track[]">Select track</option>
<option value="Backend" name="track[]">Backend</option>
<option value="Frontend" name="track[]">Frontend</option>
</select><br/><br><b>Select your programming language(s)</b><br><br/>
<!-- this section is for programming language lang -->
	Node.js<input type="checkbox" name="lang[]" value="Node.js">
	PHP<input type="checkbox" name="lang[]" value="PHP">
	ReactNative<input type="checkbox" name="lang[]" value="ReactNative">
	Python<input type="checkbox" name="lang[]" value="Python">
	CSS<input type="checkbox" name="lang[]" value="CSS">
	Vue<input type="checkbox" name="lang[]" value="Vue">
	JQquery<input type="checkbox" name="lang[]" value="Jquery"><br/><br/>
<input type="submit" value="Sign up" name="submit">
</form>
<hr/>
</section>
</center>
<center>
<div class="container">
<?php
//this bunch of code controls the input section of the form
if (isset($_POST['submit'])){
	//&& isset($_POST['lastname']) && isset($_POST['mail'])
	//&& isset($_POST['phone']) && isset($_POST['dob']) && isset($_POST['track'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		$dob = $_POST['dob'];
		$track = $_POST['track'];
		
		echo "Name: " .$firstname ." " .$lastname ."<br/>";
		echo "E-mail: " .$mail . "<br/>";
		echo "Phone Number: " .$phone ."<br/>";
		echo "Date of Birth: " .$dob ."<br/>";
		echo "Track: " .$track . "<br/>";
	}
	// this below code is for the checkbox
	
	if (isset($_POST['lang'])){
	$lang = (isset($_POST['lang'])) ? $_POST['lang'] : array();
	echo "<b>I'm good in</b> ";
		if (count($lang) > 0) {
			foreach($lang as $item){
			echo "<br/>" .$item;
			}
		}
	}
// to see if the following code will mimick checkbox array

	if (isset($_POST['track'])){
		$track = (isset($_POST['track'])) ? $_POST['track'] : array();
			}
?>
</center>
</div>
</body>
</html>
