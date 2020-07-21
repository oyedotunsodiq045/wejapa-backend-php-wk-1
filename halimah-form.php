<!DOCTYPE html>
<html>
  <head>
    <title> USER FORM </title>
	<!-- INTERNAL CSS -->
	<style>
	  input[type=text]{
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid hsl(0, 0%, 80%);
		  border-radius: 4px;
		  box-sizing: border-box;
		  outline-color: #a6a6a6;
	  }
	  input[type=submit]{
		  width: 100%;
		  background-color: hsl(225, 100%, 50%);
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius:4px;
		  cursor: pointer;
		  outline-color: hsl(225, 100%, 40%);
	  }
	  input[type=submit]:hover{
		  background-color: hsl(225, 100%, 45%);
		  outline-color: hsl(225, 100%, 40%);
	  }
	  form{
		  background-color: hsl(0, 0%, 100%);
		  border-radius: 5px;
		  padding: 40px;
		  text-align: center;
		  text-shadow: 1px 1px 1px hsl(240, 100%, 50%);
		  box-shadow: 2px 2px 5px hsl(0, 0%, 0%), -2px -2px 10px hsl(0, 0%, 100%);
		  font-size: 20px;
	  }
	  h2{
		  text-shadow: 0px;
		  color: hsl(225, 100%, 60%);
		  font-family: Open Sans;
	  }
	  @media only screen and (min-width: 600px){
		  form{
			  margin: 5% auto 0 auto;
			  width: 40%;
		  }
	  }
	</style>
  </head>
  <body>
    <form action="" method="GET" autocomplete="off">
	<h2> USER BIO-DATA </h2>
	   <input type="text" name="firstname" placeholder="First Name">
	   <input type="text" name="lastname" placeholder="Last Name">
	   <input type="text" name="sport" placeholder=" What's your Favorite Sport? ">
	   <input type="text" name="beverage" placeholder="Tea or Coffee ☕?">
	   <input type="submit" name="submit" value="SUBMIT">
	</form>
	
	<?php
	$coffee = "coffee";
	$Coffee = "Coffee";
	$COFFEE = "COFFEE";
	$tea = "tea";
	$Tea = "Tea";
	$TEA = "TEA";
	$break = "<br>";
	
	if (isset ($_GET['submit'])){
echo "<h3>Thanks for filling this ".$_GET['firstname'].' '. $_GET['lastname']." 🙂</h3>";
echo $break;
echo "<b>Your Favorite Sport is ".$_GET['sport'].' '."and </b>";
echo $break;
if ($_GET['beverage'] == $tea || $Tea || $TEA){
	echo "<b>You Prefer Tea to Coffee</b>";
}
elseif ($_GET['beverage'] == $coffee || $Coffee || $COFFEE){
	echo "<b>You prefer Coffee to Tea</b>";
}
else {
	echo "<h3 style='color:red;'>Wrong Input ❌".$break."Please Enter the right input</h3>";
	}
}
?>
	
  </body>
</html>