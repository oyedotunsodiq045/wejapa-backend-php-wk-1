<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction Form</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
    <section>
        <H2>Introductory Form </H2>
        <form action="action.php" method="POST">
            <p>Please input your Firstname:</p><input type="text" name="firstName" placeholder="Input your first name" required>
            <p>Please input your Lastname:</p><input type="text" name="lastName" placeholder="Input your Last name" required>
            <p>Please input your email:</p><input type="email" name="email" placeholder="Input your Email" required>
            <p>Please input your age:</p><input type="text" name="age" placeholder="Input your Age">
            <p>Please input your stack:</p><input type="text" name="stack" placeholder="Input your stack" required>
            <textarea name="bio" id="" cols="30" rows="10" placeholder="Your bio tell us about you"></textarea>
            <input type="submit" value="submit">

        </form>
    </section>
</body>
</html>