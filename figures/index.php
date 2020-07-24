<?php
include_once('lib/header.php'); require('functions/alerts.php');

?>
    <title> Tell Us About Yourself </title>
</head>

<body>
<!-- Bring in the menu bar -->
    <?php
        include_once('lib/menu.php');
    ?>

    <div class="container">        
        <div class="col-lg">
            <div class="header">
                <h2>Tell Us About Yourself</h2>
            </div>    
            <div class="content">
                <?php
                    //Check if Success message is available and print it out
                    message();
                    session_destroy();
                ?>
            </div>
 <!-- form begins here -->           
            <form method="POST" action="processform.php">
                <!-- <?php
                    //Check if error message is available and print it out
                    error();
                ?> -->
                <div class="input-group">
                    <p>
                        <label> Fullname </label>
                        <input 
                            <?php
                            //Check if Fullname is available after error message (ie if initially inputed by user) and hold it in 
                            if(isset($_SESSION['fullname'])){
                                echo "value=" . $_SESSION['fullname'];
                            }
                            ?>
                        type="text" name="fullname" placeholder="Fullname" /> <br />
                    </p>
                </div>
                   
                <div class="input-group">
                    <p>
                        <label> Email </label>
                        <input 
                            <?php
                            //Check if Email is available after error message (ie if initially inputed by user) and hold it in 
                            if(isset($_SESSION['email'])){
                                echo "value=" . $_SESSION['email'];
                            }
                            ?>
                        type="text" name="email" placeholder="Email" /> <br />
                    </p>
                </div>

                <div class="input-group">
                    <p>
                        <label> Gender </label>
                        <select name="gender" >
                            <option value=""> Select One </option>
                            <option
                                <?php
                                //Check if Male is available after error message (ie if initially inputed by user) and hold it in 
                                if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                                    echo "selected";
                                }
                                ?>
                            >Male</option>
                            <option
                                <?php
                                //Check if Female is available after error message (ie if initially inputed by user) and hold it in 
                                if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                                    echo "selected";
                                }
                                ?>
                            >Female</option>
                        </select>
                    </p>
                </div>

                <div class="input-group">
                    <p>
                        <label> Stack </label>
                        <input 
                            <?php
                            //Check if Stack is available after error message (ie if initially inputed by user) and hold it in 
                            if(isset($_SESSION['stack'])){
                                echo "value=" . $_SESSION['stack'];
                            }
                            ?>
                        type="text" name="stack" placeholder="Stack" /> <br />
                    </p>
                </div>

                <div class="input-group">
                    <p>
                        <label> Level </label>
                        <select name="level" >
                            <option value=""> Select One </option>
                            <option
                                <?php
                                //Check if Beginner is available after error message (ie if initially inputed by user) and hold it in 
                                if(isset($_SESSION['level']) && $_SESSION['level'] == 'Beginner'){
                                    echo "selected";
                                }
                                ?>
                            >Beginner</option>
                            <option
                                <?php
                                //Check if Junior is available after error message (ie if initially inputed by user) and hold it in 
                                if(isset($_SESSION['level']) && $_SESSION['level'] == 'Junior'){
                                    echo "selected";
                                }
                                ?>
                            >Junior</option>
                        </select>
                    </p>
                </div>
                    <p>
                        <button class="btn btn-success" type="submit"> Submit </button>
                    </p>

            </form>
        </div>   
    </div>
<?php
    include_once('lib/footer.php');
?>

</body>

</html>