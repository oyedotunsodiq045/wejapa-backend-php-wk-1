<?php
   session_start();
   $firstname = $lastname = $email = $number = $gender = $git = "";

   $errorcount=0;

   $_POST["firstName"] == ""? $errorcount+=1:$firstname=$_POST["firstName"];
   $_POST["lastName"] == ""? $errorcount+=1:$lastname=$_POST["lastName"];
   $_POST["email"] == ""? $errorcount+=1:$email=$_POST["email"];
   $_POST["number"] == ""? $errorcount+=1:$number=$_POST["number"];
   $_POST["gender"] == ""? $errorcount+=1:$gender=$_POST["gender"];
   $_POST["git"] == ""? $errorcount+=1:$git=$_POST["git"];

   $_SESSION["firstName"] = $firstname;
   $_SESSION["lastName"] = $lastname;
   $_SESSION["email"] = $email;
   $_SESSION["git"] = $git;
   $_SESSION["gender"] = $gender;
   $_SESSION["number"] = $number;

   if ($errorcount>0){
     $_SESSION["error"] = $errorcount." fieldset not yet filled";
     header("location:index.php");
   }

   else{
       include("functions/include.php");
       echo("<h5 class= 'list-group-item list-group-item-success'>Hello ".$firstname." ".$lastname." your registration is successful</h5>" );
       echo ("<p class'lead'>Your Details are:</p>");
       echo("<ul class='list-group'>");
       echo ("<li class='list-group-item list-group-item-dark'>Fullname: ".$firstname." ".$lastname."</li>" );
       echo ("<li class='list-group-item list-group-item-light '>Email: ".$email."</li>" );
       echo ("<li class='list-group-item list-group-item-dark'>Mobile Number: ".$number."</li>" );
       echo ("<li class='list-group-item list-group-item-light'>Gender: ".$gender."</li>" );
       echo ("<li class='list-group-item list-group-item-dark'>Git Account: <a  href='$git'>".$git."</a></li>" );
       echo("</ul>");
       include("functions/footer.php");
   }