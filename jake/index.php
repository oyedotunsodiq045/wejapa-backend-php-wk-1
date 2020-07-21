<?php
require "processor.php";
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Introduction form</title>

    <!-- Custom style -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="body">
                <h3 style="text-align: center">Introduce Yourself</h3>
                <form action="" method="post">
                    <div class="entries">
                        <label>Fullname</label><br>
                        <input  type="text" name="fullname" placeholder="Enter Your fullname" required>
                    </div>

                    <div class="entries">
                        <label>Email</label><br>
                        <input  type="email" name="email" placeholder="Enter Your email" required>
                    </div>

                    <div class="entries">
                    <label>Stack</label><br>
                        <input  type="text" name="stack" placeholder="Enter your stack" required>
                    </div>


                     <div class="entries">
                         <label>Level</label><br>
                         <select name="level" required>
                             <option value="">Select your stack</option>
                             <option value="Beginner">Beginner</option>
                             <option value="Junior">Junior</option>
                             <option value="Senior">Senior</option>
                         </select>
                     </div>

                    <div class="entries">
                       <button type="submit" name="submit">Submit</button>
                    </div>


                </form>
            </div>
        </div>

        <div class="details">
<h3>Hi <strong><?php

    if(!empty($fullnameErr)){
        echo "";
    }else{
        echo $fullname;
    }


?></strong>

    ,Confirm details</h3>
            <div class="output">

                <div>
                    <strong>name:</strong>
                   <p>
                       <?php
                       if(!empty($fullnameErr)){
                       echo "<i style='color: red'>$fullnameErr</i>";
                       }else{
                       echo $fullname;
                       }
                       ?>
                   </p>
        <strong>Email:</strong>
                   <p>
                       <?php
                       if(!empty($emailErr)){
                       echo "<i style='color: red'>$emailErr</i>";
                       }else{
                       echo $email;
                       }
                       ?>
                   </p>
        <strong>stack:</strong>
                   <p>
                       <?php
                       if(!empty($stackErr)){
                       echo "<i style='color: red'>$stackErr</i>";
                       }else{
                       echo $stack;
                       }
                       ?>
                   </p>


       <strong> Level:</strong>
                   <p>
                       <?php
                       if(!empty($levelErr)){
                       echo "<i style='color: red'>$levelErr</i>";
                       }else{
                       echo $level;
                       }
                       ?>
                   </p>


                </div>

            </div>
        </div>


    </div>

</body>
</html>
