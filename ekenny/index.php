<?php
$message = "";
function welcome(){
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $firstname= $_POST["firstname"];
        $surname = $_POST["surname"];
        $internship = $_POST["internship"];
        $language = $_POST["language"];
       $message = "<p>I am {$firstname} {$surname}"." an intern in {$internship} "." learning {$language}, looking forward to having a seamless experience!.</p>";
       return $message;
    }else{
        $message = "<p> Ensure you use a post request</p>";
        return $message;
    }
}

;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
    <h2> Wejapa Internship first task </h2>
<div>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        Firstname:<br>
            <input type="text" name="firstname" value="" class="box" required>
            <br>
            <br>
        Surname:<br> 
            <input type="text" name="surname" value="" class="box" required>
            <br>
            <br>
        Internship:<br>
            <input type="text" name="internship" value="" class="box" required>
            <br>
            <br>
        Language:<br>
            <input type="text" name="language" value="" class="box" required>
            <br>
            <br>
            <input type="submit" value="Submit">
    </form>
</div>
    

<?php echo welcome();?>
</body>
</html>

