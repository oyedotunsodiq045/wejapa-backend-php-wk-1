<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thanks for Registering</title>
  </head>
  <body>
    <p style="text-align: center">Nice to meet you, <?php echo $_POST['first_name']?> <?php echo $_POST['last_name']?></p>
    <p style="text-align: center">I just hacked you and obtained your email address, which is <?php echo $_POST['email']?></p>
    <p style="text-align: center">You are a <?php echo $_POST['gender']?> intern at WeJapa, and your PHP level is <?php echo $_POST['level']?>, right?</p>
    <p style="text-align: center">Mwahahaha! 3:)</p>
  </body>
</html>
