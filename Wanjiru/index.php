<HTML>
	<head>
		<title>
			We Japa Internship
		</title>
	</head>
	
	<body>
		<h1>
			Assignment 1: <span>PHP Beginner Track</span>
		</h1>
		<p>
		<form method='POST' action ='index.php'>
			<fieldset>
				<legend> Intern Data </legend>
			<label for='name'> Names: </label><br>
			<input type='text' id='name' name ='name' required></br>
	
<br>		<label for='track_level'> Track Level: </label><br>
                        <input type='text' id='track' name ='track' required ><br>

			<br>

			<input type='submit' value='Submit'>
			</fieldset>
		</form>
		

		</p>
<?php
 error_reporting (E_ALL ^ E_NOTICE);
$name = $_POST['name'];
$track = $_POST['track'];

if(empty($name)){
	echo 'Your'.'<Strong>'.' Name'.'</strong>'.' will appear here after submitting';
	echo '<br>';
}
if(empty($track)){
        echo 'Your'.'<strong>'.' Track'.'</strong>'.' will appear here after submitting'.'<br>';
        echo '<br>';
}
if(!empty($name)){

echo 'Hello '.'<strong>'.$name .' !!'.'</strong> '.'<br><br>';
	echo '<br>';

}
if(!empty($name)){
	echo 'You are in the '.'<strong>'.$track .'</strong>'. ' Track'.'<br><br>' ;
	echo '<strong> '.'Fun Fact :) ...'.'I used VI to code this';
	echo '<br>';

	echo '<br>';
}



?>

	</body>


</HTML>
