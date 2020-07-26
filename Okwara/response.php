<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$track=$_POST['track'];
		$email=$_POST['email'];
		$state=$_POST['state'];
	}
	?>
	<?php
	    if(empty($name)){
		echo"<li>You forgot to enter a name!</li>";
			
	    }
	    if(empty($track)){
	      	echo"<li>You forgot to enter a track!</li>";
	      	
	    }
	    if(empty($email)) {
	      	echo"<li>You forgot to enter a email!</li>";
	      	
	    }
	    if(empty($state)) {
	      	echo"<li>You forgot to select your state!</li>";
	      	echo"</br>";
	      	echo "<p style=\"color:red;\">No Data Submitted</p>";
	      exit();
	    }
	    
	?>

	<table width="700" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Names</th>
			<th>Track</th>
			<th>Email</th>
			<th>State</th>
		</tr>
		<?php
			echo "<tr>";
			echo "<td>".$name."</td>";
			echo "<td>".$track."</td>";
			echo "<td>".$email."</td>";
			echo "<td>".$state."</td>";
			echo "</tr>";
		?>
	</table>
</body>
</html>

