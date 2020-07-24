<?php 
include_once('lib/header.php'); require('functions/alerts.php');

?>
    <title>Your Submission</title>
</head>

<body>
<!-- Bring in the menu -->
    <?php
        include_once('lib/menu.php');
    ?>
    <div class="header">
        <h3> Your Submission </h3>
    </div>
    
    <div class="content">
        <div class="error success">
            <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){ 
            ?>
            <h3> <?php  echo "Girl Power 💪" ; ?> &#128170 </h3>
            <?php } else{ ?>
            <h3> <?php  echo "Men who code💪" ; ?> </h3>
            <?php } ?>
        </div>
        <br />
        <div class="profile_info">
            
            <p> Name: <?php echo $_SESSION['fullname']; ?> </p>
            <p> email: <?php echo $_SESSION['email']; ?> </p>
            <p> Gender: <?php echo $_SESSION['gender']; ?> </p>
            <p> You are a <?php echo $_SESSION['level'] . " " . $_SESSION['stack'] ?> Ninja ! </p>
            
            Submitted : <?php echo " " . date("h:ia") ?>  on <?php echo " " . date("l") . ", ". date("d-m-Y") . "."?> <br />
        </div>    
    </div>

<?php  
    include_once('lib/footer.php');
?>
</body>

</html>