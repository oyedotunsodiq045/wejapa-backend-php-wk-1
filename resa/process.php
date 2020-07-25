<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$name = $_POST['name'];
 	$email= $_POST['email'];
 	$age = $_POST['age'];
 	$role = $_POST['devrole'];
 	$workmode=  $_POST['workmode'];
 	$comments = $_POST['comments'];


 	//Output

 	 echo '<h3 style="text-align:left; color:White; padding:20px;">Hello,<br> 
 	  My name is '.$name.'. <br>
 	  I am a '.$role.'. I am '.$age.' years old. <br> </h3>';
 	 
 	 echo '<h3 style="text-align:left; color:White; padding:20px;">
 	  Work Mode: '.$workmode.'<br> 
 	  Email: '.$email.'<br>
 	  Additional Comments: '.$comments.'<br> 
 	  </h3>';
   }
 
?>