<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>php Backend task-1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

    <?php 
        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $stack = $_POST['stack'];
            $language = $_POST['language'];
            $level = $_POST['level'];

            if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($stack) || empty($language) || empty($level)) {
                $result = "<p class='alert alert-danger'> Fill in all details</p>";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $result = "<p class='alert alert-danger'> Use a valid email</p>";
                } else {
                    $result = "<p class='alert alert-success'> Hello, this is " .$firstname. " " .$lastname. " with username " .$username. " and email " .$email. " . <br> ";
                    $result .= "I am a " .$stack. " " .$language. " " .$level. " developer.</p>"; 
                }
            }
        }
    ?>

    
    <div class="d-flex justify-content-center align-items-center container">
        <section class="col col-lg-10"> 
        
        <h3>Details Form</h3><hr>

        <?php 
            if (isset($result)) {
                echo $result;
            }
        ?>
        
        <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="form-group col-md-6">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="form-group">
            <label for="useremail">Email</label>
            <input type="email" class="form-control" id="useremail" name="email">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" >
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="stack">Stack</label>
            <input type="text" class="form-control" id="stack" name="stack">
            </div>
            <div class="form-group col-md-4">
            <label for="language">Language</label>
            <select id="language" class="form-control" name="language">
                <option>PHP</option>
                <option>Javascript</option>
                <option>Python</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" name="level">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </section>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>