<?php 
     $fname = $_POST["firstname"];
     $lname = $_POST["lastname"];
     $email = $_POST["email"];
    $submit = $_POST["submit"];

    if (isset($_POST['submit']) ) {
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Form Page</title>
</head>
<body>

    <h1>Fill In Your Details</h1>

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">

        <input type="text" class="name" name="firstname" placeholder="First name" required>
        <input type="text" class="name" name="lastname"  placeholder="Last name" required>
        <input type="email" class="email" name="email"  placeholder="Email address" required>
        <input type="submit" value="Submit" name="submit"  class="name">
        
    </form>
<div class="main" id="output" style="width:500px; height:170px; background-color:#ccc;text-align:left; color:#000; font-weight: bold; padding:40px; font-size: 20px; margin-top:20px;">
    <?php   
        echo "Your First Name is: " .$fname. "\t\t <br><br>";
        echo "Your Last Name is: " .$lname. "\t\t <br><br>";
        echo "Your Email Address is: " .$email. "\t\t <br><br>";
    } 
    ?>
    
</div>
       <script>
       function deleteDiv() {
           x = document.getElementById("output");
        x.style.display = "none";
       }
           
       </script>

       <button id="delete" onclick="deleteDiv()">Delete</button>
</body>
</html>