<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <!-- meta http-equiv = "Content-Type" content = "text,html,css; charset = UTF-8" -->
    <style>
        .error{color : #FF0000;}
    </style>

    </head>
    <body bgcolor = "skyblue">
        
        <?php
            //setting variables to empty string for definition
            $nameErr = $emailErr = $trackErr = " ";
            $name = $email = $track = $submit =  " ";
            //Retrieving the replies and storing them in variables
            if($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                if (empty( $_POST['name'])){
                    $nameErr = "Name is required";
                } 
                else{
                    $name = test_input($_POST['name']);
                }
                if (empty( $_POST['email'])){
                    $emailErr = "Email is required";
                } 
                else{
                    $email = test_input($_POST['email']);
                    }
                if (empty( $_POST['track'])){
                    $trackErr = "Track is required";
                } 
                else{
                    $track = test_input($_POST['track']);
                }
            }
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <h1 align ="center"><i>Brief Introduction</i></h1>
        <hr width="70px" />
        <h3>Please enter your details below </h3>
        <span class = "error">* required field </span>
        <form method = 'POST' action="form_output.php" >
            <h4>Fullname</h4>
            <input type = 'text' name = 'name' placeholder = 'name'>
            <span class ="error">* <?php echo $nameErr;?></span>
            <h4>Gender</h4>
            <input type = "radio" name = "gender" value = "male" /> Male <br/>
            <input type = "radio" name = "gender" value = "female" /> Female <br/> 
            <input type = "radio" name = "gender"  /> Prefer not to say <br/>
            <h4>Email</h4>
            <input type = 'email' name = 'email' placeholder = 'enter your email'>
            <span class ="error">* <?php echo $emailErr;?></span>
            <h4>Track</h4>
            <input type = 'text' name = 'track' placeholder = 'enter your track'>
            <span class ="error">* <?php echo $trackErr;?></span>
            <h4>Level</h4>
            <input type = "checkbox" name = "level" value = "Beginner" /> Beginner <br/>
            <input type = "checkbox" name = "level" value = "Junior" /> Junior <br/>
            <input type = "checkbox" name = "level" value = "Senior" /> Senior <br/><br/>
            <input type = "submit" name = "submit" value = "Submit"
             button style = 'background-color:grey; border-color:grey; color:black' >
        </form>
        
    </body>
</html>