<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>WeJapa | backend-php-wk-1</title>
</head>
<body>

<?php 
	
	if(isset($_POST['createprofile'])){
		?>	

<?php
		$slackusername = $_POST["slackusername"];
		  $createdate = $_POST["createdate"];

		 echo "Welcome "; if($_POST["gender"] == "female") echo "Miss/Mrs "; 
		 else echo "Mr ";  echo '<b>'. $_POST["firstname"]. '</b> <br/>'. ".";
?>

<div class="card">
  <img src="img/<?php if($_POST["gender"] == "female") echo "avatar_female.png"; else echo "avatar_male.png"; ?>" 
  alt="Image avatar" style="width:100%">
  
  <div class="img-container">
    
    <p class="text-center">
    	<span class=""><?php echo $_POST["firstname"]. " " .$_POST["lastname"]; ?></span> 
    	<br/> 
    	<span class="text-mute">
    		<?php echo "<small title='Slack username: $slackusername'>(" .$_POST["roletrack"] ." @ WeJapa Internship". ")</small>"; ?>
    	</span>
    	<br/>
    </p>
    <p class="text-center">Account created on: <br> <?php echo $createdate; ?></p> 
    <p>
    	<span style="float: left;">
    		<a href='tel:<?php echo $_POST["phonenumber"] ?>'> 
    			<img src="img/<?php if($_POST["gender"] == "female") echo "call-female.png"; else echo "call-male.png"; ?>" alt="Call"> 
    		</a> 
    	</span>
    	<span style="float: right;"><a href='mailto:<?php echo $_POST["emailaddress"] ?>'> <img src="img/send-email.png" alt="Call"> </a> </span>
    </p>
    
  </div>
</div>


<div class="row">
	<br>
	<input type="submit" onclick="location.assign('index.php')" value="Create another profile" style="float: left;">
</div>

		<?php	
	}

	else 
		echo '
		<div class="container">
			<h2 class="text-center text-mute"> Looks like there is nothing fun here, maybe you should <a href="index.php" style="color: green;"><img src="img/left.png" alt="left arrow"/>go back</a> and filled out the form. </h2>
		</div> ';
?>

</body>
</html>