<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <style>
            input[type=text, tel, email, password, date, checkbox] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }

            input[type=submit] {
              width: 100%;
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            div {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
            }
        </style>
    </head>
    <body>
        <h3>Please fill out the form accurately</h3>
        <div>
          <form action="wejapa_first_task.php" method="post">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Your name.."><br><br>

                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
              
                <label for="phone">Phone Number</label><br>
                <input type="tel" id="phone" name="phoneNumber" placeholder="Your phone number"><br><br>
              
                <label for="dob">Date of Birth</label><br>
                <input type="date" id="dob" name="dateOfBirth"> <br><br>
              
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Your email"> <br><br>
            
                <label for="pass">Password</label><br>
                <input type="password" id="pass" name="password"> <br><br>
                
                <!--checkbox-->
                <label for="gender">Gender</label><br>
                Male: <input type="radio" name="gender" value="male">&nbsp;&nbsp;
                Female: <input type="radio" name="gender" value="female">&nbsp;&nbsp;
                Others: <input type="radio" name="gender" value="others"> <br><br>

                <label for="country">Country</label>
                Nigeria: <input type="radio" id="country" name="country" value="nigeria">&nbsp;&nbsp;
                USA: <input type="radio" id="country" name="country" value="usa">&nbsp;&nbsp;
                Canada: <input type="radio" id="country" name="country" value="canada">&nbsp;&nbsp;
                Italy: <input type="radio" id="country" name="country" value="italy"><br><br>
                

                <input type="submit" value="Submit">
          </form>
        </div>
        
        <?php
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $phoneNumber = $_POST["phoneNumber"];
            $dob = $_POST["dateOfBirth"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $gender = $_POST["gender"];
            $country = $_POST["country"];
            
            echo "Full name: " . $firstname . ' ' . $lastname . "<br><br>";
            echo "Phone Number: " . $phoneNumber . "<br><br>";
            echo "Date of birth: " . $dob . "<br><br>";
            echo "Email: " . $email . "<br><br>";
            echo "You are a " . $gender . "<br><br>";
            echo "You are from $country";
        ?>
    
    </body>
</html>
