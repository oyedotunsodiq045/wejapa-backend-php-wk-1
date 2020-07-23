
<?php 
   if(isset($_GET['submit'])){
      echo'Hi '.$_GET['name'];
      echo '<br> email '.$_GET['email'];
      echo '<br> number '.$_GET['number'];
      echo '<br> address '.$_GET['address'];
   }

?>
<html>

<body>

<form action="" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
number: <input type="text" name="number"><br>
address: <input type="text" name="address"><br>
<input type="submit" name="submit" value="submit" >
</form>

</body>
</html> 
