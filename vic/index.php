<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wejapa Task 1</title>
    <style>
        html,
        body {
            max-width: 100%;
        }

        .container {
            position: relative;
            display: block;
            margin: 12px auto;
            border: 1px solid rgba(120, 120, 120, 1);
            border-top-right-radius: 16px;
            border-bottom-left-radius: 16px;
            width: min(70vw, 600px);
            padding: 16px 16px;
        }

        .form-group {
            width: 100%;
            margin: 16px 0px;
        }

        .form-group label {
            display: block;
            margin: 4px 0;
            font-size: 24px;
        }

        .form-control {
            width: 100%;
            font-size: 18px;
            margin: 0;
            padding: 4px 2px;
            /* border-radius: 4px; */
        }

        .btn.btn-primary {
            background-color: lightskyblue;
            outline: none;
            border: 1px solid lightskyblue;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 21px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="name_form">Name</label>
                <input type="text" class="form-control" id="name_form" name="name_form" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            ?>
        <h3>Your details</h3>
        <p>
            Name: <b><?= ($_POST['name_form'] == '') ? 'Nothing' : $_POST['name_form']; ?></b>
        </p>
        <p>
            Email: <b><?= ($_POST['email'] == '') ? 'Nothing' : $_POST['email']; ?></b>
        </p>
        <?php
        }
        ?>
    </div>
</body>

</html>