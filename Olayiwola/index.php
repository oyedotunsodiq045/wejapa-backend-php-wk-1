<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat&display=swap" rel="stylesheet">
        <style>
            body {
                    background: url(annie-spratt-unsplash.jpg);
                    background-repeat: repeat;
                    background-size: cover;
            }
            
            h2, h3 {
                        text-align: center;
                        font-family: 'Caveat', cursive;
                        font-weight: 900;
                        line-height: 18px;
            }
            
            h2 {
                font-size: 50px;
            }
            
            h3 {
                font-size: 30px
            }
        </style>
    </head>
    <body>
        <?php
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            
            echo "<h2>Hello " . $firstName . " " . $lastName."</h2>";
            echo "<h3>Welcome to wejapa internship!</h3>";
        ?>    
    </body>
</html>
