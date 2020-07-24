<!DOCTYPE html>
<html>
<head>
	<title>Submission</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php 

			if(isset($_POST['submit']))
			{
				if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['location']))
				{
					echo "<h3> All fields required </h3>";
					echo "Kindly <a href = 'index.php'>Go back</a> to fill-in all fields";
				}else
				{
					echo "Nice meeting you " . $_POST['firstname'] . " from " . $_POST['location'];
				}
			}
		?>
	</div>

</body>
</html>
