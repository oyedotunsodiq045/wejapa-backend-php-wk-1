
<!DOCTYPE <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title><?php echo $_POST['name']; ?></title>
</head>

<body>
<section class="half">
    <form action="form.php" method="POST">
        <h2>Welcome to <strong>Wejapa</strong>Internships</h2>
        <p>Please fill in your details below.</p>
        <fieldset>
            <legend>Intern Form</legend>
            Name:<br />
            <input type="text" name="name" /><br/><br/>
            Email:<br />
            <input type="text" name="email" /><br/><br/>
            Phone Number:<br />
            <input type="text" name="phone" /><br/><br/>
            Prefered Username:<br />
            <input type="text" name="user" /><br/><br/>
            Stack:<br />
            <input type="text" name="stack" /><br/><br/>
            Level:<br />
            <input type="text" name="level" /><br/><br/>
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
</section>
<br/><br/>

<section class="half">
    <div>          
    <?php
    if(isset($_POST['submit'])){
        echo "<h2>Your submitted details here...<br/></h2>";
        echo "Name : ". $_POST['name'];
        echo "<br/><br/>";
        echo "Email : ". $_POST['email'];
        echo "<br/><br/>";
        echo "Phone Number : ". $_POST['phone'];
        echo "<br/><br/>";
        echo "Username : ". $_POST['user'];
        echo "<br/><br/>";
        echo "Stack : ". $_POST['stack'];
        echo "<br/><br/>";
        echo "Level : ". $_POST['level'];
        echo "<br/><br/>";
    }else{
        echo "You omitted a field while filling the form. Kindly revisit form.";
    }
    ?> 
    </div>
</section>
</body>
</html>
    


