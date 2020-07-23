<!DOCTYPE html>
<html>
<head>
	<title>Eleos | Task1</title>

	<style type="text/css">

		div {
					width: 100%;
		}

		h2 {
					color: green;
		}

		label {
					color: green;
		}

		form input {
					width: 90%;
					border-radius: 10px;
					padding: 5px;
		}

		form input:hover {
					transform: translate(3px, 3px);

					-webkit-transition: all 500ms ease;
					-moz-transition: all 500ms ease; 
					-o-transition: all 500ms ease;
		}

		form button {
					border-radius: 10px;
					padding: 5px;
					background-color: gold;
		}

		@media screen and (min-width: 768px) {
			div {
					width: 500px;
					margin: 0 auto;
			}

		}


	</style>
</head>
<body>

<div>
	<h2>Hi there, I'm Elle and I'll love to meet you:</h2><br>
	<form method="post" action="index.php">
		<label for="name"> Name:
			<input type="text" name="name" >
		</label> <br><br>
		<label for="codename"> Code name:
			<input type="text" name="codename" required>
		</label> <br><br>
		<label for="email"> Email:
			<input type="email" name="email" required>
		</label> <br><br>
		<label for="git"> Git Username:
			<input type="text" name="git">
		</label> <br><br>


		<button>Submit</button>
	</form>
</div>

<div>
		<h3>Hi, my name is <?php echo $_POST["name"]; ?> and my Code Name is <?php echo $_POST["codename"]; ?> </h3>
		<p>You can mail me on <?php echo $_POST["email"]; ?> and also follow me on github.. "<?php echo $_POST["git"]; ?>" <br><br>

		Nice to meet you Elle.</p>
</div>


</body>
</html>


