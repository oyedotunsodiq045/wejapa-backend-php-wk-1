
<!DOCTYPE html>
<html lang="en">

<head>
    <!--  meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>WeJapa Entry</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Your Details</h2>
                    <p style="color: green;">Here are the details you submitted</p>
                    <br>
                    <br>
                    <form>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input value="<?php echo $_POST['first_name']?>"readonly class="input--style-4" type="text" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input  class="input--style-4"  type="text" value="<?php echo $_POST['last_name']?>"readonly>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input  class="input--style-4 js-datepicker" type="date" value="<?php echo $_POST['birthday']?>" disabled>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" disabled>
                                        	<?php if($_POST['gender']=='Male'){?>
                                            	<option>Male</option>
                                        	<?php } ?>

                                        	<?php if($_POST['gender']=='Female'){?>
                                            	<option>Female</option>
                                        	<?php } ?>

                                            <?php if($_POST['gender']=='Others'){?>
                                            	<option>Others</option>
                                        	<?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input value="<?php echo $_POST['email']?>"readonly class="input--style-4" type="email">
                                </div>
                                
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input value="<?php echo $_POST['phone']?>"readonly class="input--style-4" type="text">
                                </div>
                                
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Track</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="track" disabled>
                                	<?php if($_POST['track']=='FrontEnd'){?>
                                        <option>FrontEnd</option>
                                    <?php } ?>

                                    <?php if($_POST['track']=='BackEnd'){?>
                                        <option>BackEnd</option>
                                    <?php } ?>

                                    <?php if($_POST['track']=='Others'){?>
                                        <option>Others</option>
                                    <?php } ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->

</body>

</html>
<!-- end document-->