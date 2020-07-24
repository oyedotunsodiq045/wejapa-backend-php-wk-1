
<?php 
   if(isset($_GET['submit'])){
      echo'Hi '.$_GET['fullname'];
      echo '<br> Also known as '.$_GET['slackname'];
      echo '<br> With this email address '.$_GET['email'];
      echo '<br> Loves '.$_GET['hobbies'];
   }

?>

<!Doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
      .start{
        width: 400px;
        height: 450px;
        text-align: center;
        opacity: 1;
        background-color: grey;    
}
    .textbox{
        margin-top: px;
        text-align: center;
        font-size: 20px;
        font-family: sans-serif;
        align-content: center;
        height: 30px;
        width:300px;
        padding: 15px;
        border: none;
        border-radius: 20px;
        
}        
.btn{
        width: 300px;
        height: 30px;
        border-radius: 10px;
        font-size: 20px;
        background-color: blue;
}
    </style>
</head>
<body>
        <div class="start">
        <form action="" method="GET">
        <h2 class ="center">Kindly fill in your details </h2>
            <input type="text" name="fullname" class="textbox" placeholder="fullname"></input><br></br>
            <input type="text" name="slackname" class="textbox" placeholder="slackname"></input><br></br>
            <input type="text" name="email" class="textbox" placeholder="Email ID"></input><br></br>
            <input type="text" name="hobbies" class="textbox" placeholder="hobbies"></input><br></br>
            <input type="submit" name="submit" value="submit" class="btn">
        </div>
        </form>
</body>    
</html>