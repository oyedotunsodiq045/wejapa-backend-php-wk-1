<?php
    // $name = isset($_POST["name"]) ? $_POST["name"] : "Anonymous";
    echo "<title>Details</title>";
    echo "<link rel='stylesheet' type='text/css' href='main.css'>";

    echo "<div class='main__box box'>";

    if (isset($_POST["name"])) {
        echo "<h2>Hello <span class='pink'>" . $_POST['name'] . "</span>, here are your details</h2>";

        foreach ($_POST as $input_key => $input_value) {
            if (isset($input_value)) {
                echo "<div class='input'>";

                $key = "<label style='display: inline;'>$input_key:</label>";
                $value = "<span class='input' style='border: 0px;'>$input_value</span>";
                echo $key . $value;

                echo "</div>";
            }
        }    
    }
    else {
        echo "<h2>Hello <span class='pink'> Anonymous </span></h2>";
        echo "<p>You need to register to view your details";
        echo "<div align='right'><a href='main.html'><button class='button box'>Register</button></a></div>";
    }

    echo "</div>"
?>