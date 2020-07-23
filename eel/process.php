<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
<table cellpadding="6">
        <?php
            if (isset($_REQUEST['submit'])) {
                $fullName = $_REQUEST['fullname'];
                $number = $_REQUEST['number'];
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];
            } else {
                echo 'Unauthorised access';
                exit();
            }
        ?>
        <tr>
            <th>Full Name</th>
            <td><?php echo $fullName; ?></td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td><?php echo $number; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $password; ?></td>
        </tr>
    </table>
</body>
</html>