<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>WeJapa | backend-php-wk-1</title>
</head>
<body>

<p>Please fill in this form to create an account while we start the training. It is important you do so as its the only way you would be identified as a part of <strong>WeJapa Internship</strong> program.</p>

<div class="container">
  <form action="profile.php" method="POST">
    
    <div class="row">
      <div class="col-25">
        <label for="firstname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="firstname" name="firstname" placeholder="Your name..." required="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lastname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lastname" name="lastname" placeholder="Your last name..." required="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <select id="gender" name="gender" required="">
          <option></option>
          <option value="female">Female</option>
          <option value="male">Male</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phonenumber">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number..." required="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="emailaddress">Email Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="emailaddress" name="emailaddress" placeholder="Your email address..." required="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="roletrack">Track</label>
      </div>
      <div class="col-75">
        <select id="roletrack" name="roletrack" required="">
          <option></option>
          <option value="Backend Node">Backend Node</option>
          <option value="Backend PHP">Backend PHP</option>
          <option value="Data Science Python">Data Science Python</option>
          <option value="Frontend React">Frontend React</option>
          <option value="Frontend Vue">Frontend Vue</option>
          <option value="Product Design Figma">Product Design Figma</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="slackusername">Slack Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="slackusername" name="slackusername" placeholder="Your slack username..." required="">
      </div>
    </div>

    <div class="row">
      <input type="hidden" value="<?php echo date('D, d M, Y') . ' at ' . date('h:i:sa'); ?>" id="createdate" name="createdate" required="">
      <br>
      <input type="submit" name="createprofile" value="Create account">
    </div>

  </form>
</div>

</body>
</html>