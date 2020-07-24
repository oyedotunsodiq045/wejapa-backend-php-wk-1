<html>
  <link rel="stylesheet" href="./css/form.css">

<div>
<?php
	$break = "<br>";
	
	if (isset ($_POST['submit'])){
		echo "<h2 class='header'> Hello ".$_POST['firstname'].' '."</h2>";
        echo "<h4>Thanks for filling this form 🙂 ".$break."Here's what we got from you</h4>";
		echo "<b>Full Name: </b>".$break.$_POST['firstname'].' '.$_POST['lastname'];
        echo $break;
		echo "<b>E-MAIL: </b>".$break.$_POST['email'];
        echo $break;
        echo "<b>Favorite Sport: </b>".$break.$_POST['sport'];
	}
?>
</div>
</html>