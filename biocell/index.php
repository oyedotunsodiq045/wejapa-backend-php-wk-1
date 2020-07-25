<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>biocell japa</title>
</head>
<body>
<?php
session_start();
?>

<h2>Please fill the form below</h2>
<form method="POST" action="processform.php">
    <p>
        <?php
            if (isset($_SESSION['error']) && !empty($_SESSION['error'])){
                echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
               session_destroy();
                
            }
            ?>
    </p>
<p>
    <label>First Name</label><br/>
        <input 
        <?php
        if(isset($_SESSION['first_name'])){
            echo "value=" . $_SESSION['first_name']; 
        }
        ?>
       
        type="text" name="first_name" placeholder="First Name" />
</p>
<p>
    <label>Last Name</label><br/>
        <input 
        <?php
        if(isset($_SESSION['last_name'])){
            echo "value=" . $_SESSION['last_name']; 
        }
        ?>
        type="text" name="last_name" placeholder="Last Name" />
</p>
<p>
    <label>Email</label><br/>
        <input 
        <?php
        if(isset($_SESSION['email'])){
            echo "value=" . $_SESSION['email']; 
        }
        ?>
        type="text" name="email" placeholder="Email" />
</p>
<p>
    <label>Message</label><br/>
        <input 
        <?php
        if(isset($_SESSION['message'])){
            echo "value=" . $_SESSION['message']; 
        }
        ?>
        type="text-area" name="message" placeholder="message" />
</p>
<p><button>Send</button></p>


    
</body>
</html>