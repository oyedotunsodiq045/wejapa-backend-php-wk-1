

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
	<section class="container justify-content-center">
			<form class="form-container" method="post" action="process.php">
				<div class="form-group">
					<h3>Enter your details</h3>
					<label for="inputfname">First Name</label>

					<input type="text" name="fname" class="form-control" placeholder="Firstname">
				</div>
                <div class="form-group ">
                    <label for="inputlastname">lastname</label>
                    <input type="text" name="lname" class="form-control" id="inputlastname" placeholder="lastname">
                </div>
                <div class="form-group ">
                    <label for="inputemail">Email Address</label>
                    <input type="email" name="email" class="form-control" id="inputlastname" placeholder="lastname">
                 </div>

                 <div class="form-group ">
                    <label for="inputemail">Address</label>
                    <input type="text" name="add" class="form-control" id="inputlastname" placeholder="lastname">
                 </div>

                 <div class="form-group ">
                    <label for="inputGender">Level</label>
                    <select id="inputGender" class="form-control" name="level">
                    <option selected>...</option>
                    <option value="Beginner" >Beginner</option>
                    <option value="Junior">Junior</option>
                
                    </select>
                 </div>
				
				<div class="button">
				<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>
</section>



        
        <script src="" async defer></script>
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="" async defer></script>
    </body>
</html>