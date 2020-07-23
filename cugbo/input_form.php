<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>wejapa form</title>

    </head>

    <body>
        <div class="form-wrap">
            <p>
                <span class="font-weight-bold">Name: </span>
                <?php
                echo $_POST['full_name'];
                ?>
            </p>
                <p>
                    <span class="font-weight-bold">Slack Username: </span>
                    <?php 
                    echo $_POST['slack_username'] 
                    ?>
                </p>
                    <p>
                        <span class="font-weight-bold">Email: </span>
                        <?php 
                        echo $_POST['email'] 
                        ?>
                    </p>
                <p>
                    <span class="font-weight-bold">Phone No: </span>
                    <?php 
                    echo $_POST['phone_number']
                    ?>
                </p>
            <p>
                <span class="font-weight-bold">Track: </span>
                <?php 
                echo $_POST['track'] 
                ?>
            </p>
        </div>
    </body>

</html>