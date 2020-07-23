<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

<html>

    <body>


        <?php
                //Variable from form
                $surname = $_POST["surname"];
                $firstname = $_POST["firstName"];
                $email = $_POST["email"];
                $slackUserName = $_POST["slackUserName"];
                $track = $_POST["track"];
                $level = $_POST["level"];

                echo "<header>";
                    echo    '<h1><img src="images\wejapa_logo.png" alt="wejapa_logo">eJapa</h1>';
                echo '</header>';
            
                echo '<div class="report">';
                    echo "<h3>";
                    echo "Hello"," ", ucfirst($firstname), " ", ucfirst($surname), " !";
                    echo "</h3>";
                    echo "<p>";
                    echo "Welcome to Wejapa Internship Program <br>";
                    echo "Your registration with the email address: <span>", $email, " </span>has been successful. <br>
                            Your Slack Username: <span>", $slackUserName, "</span>.<br>
                            You selected the <span>", $track, "</span> track where you indicated the <span> ", $level, " </span>level";
                    echo "</p>";
                    
                    echo '<p>Abeg click  <a href="www.twitter.com/Yo_Giye">here</a> to follow this beginner on twitter</p>';
                echo "</div>";   

            ?>
        <footer>
            <span>-@Giye-- WeJapa-</span>
        </footer>
    </body>

</html>