<?php

if(isset($_POST['btn-submit'])){

  $first_name = strip_tags($_POST['first_name']);
  $last_name = strip_tags($_POST['last_name']);
  $email = strip_tags($_POST['email']);
  $track = strip_tags($_POST['track']);
  $slack_username = strip_tags($_POST['slack_username']);

  ucfirst($first_name);

  $output = "Nice to meet you $first_name $last_name.

You are on the $track track.

We would reach you via email at $email 

OR

via slack at $slack_username to communicate useful info.

Have a nice day.";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nkemjika's Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
<div class="wrapper">
    <div class="title">
        <h1>Fill in details</h1>
    </div>
  <form action="" method='POST'>
      <div class="contact-form">
          <div class="input-fields">
              <input type="text" class="input" placeholder="First Name" name='first_name' required>

              <input type="text" class="input" placeholder="Last Name" name='last_name' required >

              <input type="email" class="input" placeholder="Email Address" name='email' required>

              <select class='input' name='track' required>
                <option value="" class='option'>Choose Track</option>
                <option value="Front-End" class='option'>Front-End</option>
                <option value="Back-End" class='option'>Back-End</option>
                <option value="Mobile" class='option'>Mobile</option>
                <option value="Design" class='option'>Design</option>
              </select>

              <input type="text" class="input" placeholder="Slack username"  name='slack_username' required>

              <button type='submit' class="btn" name='btn-submit'>SUBMIT</button>
          </div>

        <div class="msg">
          <textarea disabled placeholder='Output' ><?php if(isset($output)){ echo $output; } ?></textarea>
        </div>

      </div>
  </form>
</div>
	
</body>
</html>