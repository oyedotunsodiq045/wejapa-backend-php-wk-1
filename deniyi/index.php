<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deniyi form Assignment</title>
</head>
<body>
  <form action="" method='POST'>
    <h1>Please input your name:</h1>
    <input type="text" name='name'>
    <button name='submit' type='submit'>Submit Name</button>
  </form>
  <div>
    <?php
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        echo "<h2>Hello {$name}</h2>";
    }
    ?>
  </div>
</body>
</html>