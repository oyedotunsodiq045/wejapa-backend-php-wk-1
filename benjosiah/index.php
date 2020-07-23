<?php
    $errors=[];
    if(isset($_POST['submit'])){
        if (empty($_POST['name'])) {
            $errors['name']="Name input should not be empty";
        }else{
            $name=$_POST['name'];
        }
        if (empty($_POST['email'])) {
            $errors['email']="Email should not be empty";
        }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email']="Email is not Valid";
        }else{
            $email=$_POST['email'];
        }
       
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <label for="name"><h3>Name</h3></label>
            <div>
                <input type="text" name="name" id="name" value="<?php echo $name??""?>"> 
                <div class="error"><?php echo $errors['name']??"" ?></div>
            </div>
            <label for="email"><h3>Email</h3></label>
            <div>
                <input type="email" name="email" id="email" value="<?php echo $email??""?>">
                <div class="error"><?php echo $errors['email']??"" ?></div>
            </div>
            <div>
                <button name="submit">Submit</button>
            </div>
        </form>
        <div class="display">
            <?php if (!array_filter($errors)) { ?>
                <h2>Name : <?php echo $name??"" ?> </h2>
                <h2> Email : <?php echo $email??"" ?> </h2>
                
            <?php }?>
        </div>

    </div>
    
</body>
</html>