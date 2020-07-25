<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WeJapa PHP Task 1</title>
  </head>
  <body>
    <form action="completed.php" method="post">
      <legend><h2>WeJapa PHP Track Members</h2></legend>

      <p>First Name: <input type="text" name="first_name"></p>
      <p>Last Name: <input type="text" name="last_name"></p>
      <p>Email: <input type="text" name="email"></p>
      <p>Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
      </p>
      <p>WeJapa PHP Track Level:
        <input type="radio" name="level" value="beginner">Beginner
        <input type="radio" name="level" value="intermediate">Intermediate
        <input type="radio" name="level" value="expert">Expert
      </p>
      <button type="submit" name="button">Get Hacked</button>
    </form>
  </body>
</html>
