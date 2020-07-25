<?php 

if(isset($_POST['first_name']) &&
 isset($_POST['last_name']) &&
  isset($_POST['email']) 
 && isset($_POST['job'])
&& isset($_POST['hobby'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$job = $_POST['job'];
$hobby = $_POST['hobby'];

echo "Awesome, thanks for registering!!
Here are the details we got from you: "."<br>"."<br>".
"<b>"."Fullname:  "."</b>".$first_name." ". $last_name."<br>".
"<b>"."Email : "."</b>". $email."<br>".
"<b>"."Occupation: "."</b>". $job."<br>".
"<b>"."My Hobbies "."</b>". $hobby;
}

?>