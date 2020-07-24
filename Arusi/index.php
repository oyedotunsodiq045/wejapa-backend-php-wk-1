
<?php 


 if (isset($_POST['submit'])){

  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $track= $_POST['track'];


}




?>




<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A tool to send airtime to interns with one click">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link rel="icon" href="img/logo.jpg" type="image/jpg">
	<title>HNG INTERNSHIP</title>
</head>
<body>
     <nav class="navbar navbar-light" style="background-color: black">
        <a class="navbar-brand" href="#" id="text">
          <img src="https://cdn.hashnode.com/res/hashnode/image/upload/v1594059995543/vwTYbmSQ9.png" width="30" height="30" class="d-inline-block align-top" alt="HNG logo" loading="lazy">
         <span style="color: white;"> Wejapa Internships </span>
        </a>
      </nav>


<div class="container">
	<div class="row">


		<div class="col-lg-8 col-md-5 col-xm-12" style="background-color: white; border: 2px solid #f9f9f9; border-radius: 25px;">

					<h4 class="text-center">Complete the form</h4>

		 <form action="" method="post" enctype="multipart/form-data" >

    <div class="form-group">

   <label for="email">Name</label>
      <input type="text" class="form-control" id="email"  name="name" required="" placeholder="Enter Name">
    </div>

        <div class="form-group">

   <label for="email">Email</label>
      <input type="email" class="form-control" id="email"  name="email" required="" placeholder="Enter Email">
    </div>

            <div class="form-group">

   <label for="email">Phone Number</label>
      <input type="number" class="form-control" id="email"  name="phone" required="" placeholder="Enter Phone">
    </div>

                <div class="form-group">

   <label for="email">Track</label>
      <input type="text" class="form-control" id="email"  name="track" required="" placeholder="Enter Track (Back or Front end)">
    </div>

  <input type="submit" name="submit" value="Submit" class="btn btn-success">

</form>

		

		</div> <br><p></p>

     <?php  if(isset($name)) {?><div class="col-lg-4 col-md-4 col-xm-12 p-10" style="background-color: white; color: black; border: 2px solid #f9f9f9; border-radius: 25px;" >
      Hello, my name is <strong style="text-transform: uppercase;"><?php echo $name ?> </strong> and these are my data for Wejapa Internship :<p></p>
      <strong>Email: </strong><?php echo $email ?>  <br><p></p>
      <strong >Phone Number: </strong><?php echo $phone ?> <br><p></p>
      <strong>Track: </strong><?php echo $track ?> <br><p></p>



    </div><?php }?>


	</div>
</div>

</body>
</html>