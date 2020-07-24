<!DOCTYPE html>
<html>
  <head>
    <title> USER FORM </title>
	<!-- EXTERNAL CSS -->
	<link rel="stylesheet" href="./css/form.css">
  </head>
  <body>
    <form action="form-process.php" method="POST" autocomplete="off" target="blank">
	<h2> USER BIO-DATA </h2>
	   <input type="text" name="firstname" placeholder="First Name" required>
	   <input type="text" name="lastname" placeholder="Last Name" required>
	   <input type="email" name="email" placeholder="E-Mail" required>
	   <input type="text" name="sport" placeholder="What's your Favorite Sport?" required>
	   <input type="submit" name="submit" value="SUBMIT">
	</form>
  </body>
</html>