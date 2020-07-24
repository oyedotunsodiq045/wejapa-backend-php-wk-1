

<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Contact Form </title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
	<form action="details.php" enctype="multipart/form-data" method="POST">
		<div>
		<h3><u> Fill in your details</u></h3>
	</div>
	<label>Name</label><br>
		<input type="text" name="first_name" placeholder="first name" class="first_name"  required><br>
		<input type="text" name="last_name" placeholder="last name" required>
		<br>
		<br>
	<label> E-mail</label><br>
		<input type="email" name="email" placeholder="example@mail.com" required>
		<br>
		<br>

	<label>Occupation</label><br>
		<input type="text" name="job" id="job" required>
		<br><br>
	

	<label>Hobbies</label><br>
		<textarea id="hoby" name="hobby" rows="3" cols="20">
		</textarea>
<br>
<button id="submit" name= "all" type="submit"> Sign Up</button>

