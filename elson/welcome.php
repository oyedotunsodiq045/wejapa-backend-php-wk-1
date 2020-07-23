<!DOCTYPE html>
<html laag="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wejapa Internships - Backend-php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-10 offset-1">
      <div class="card-mt6">
        <hr>
        <div class="card-header">
          <h2><b>Welcome <?php echo $_POST['name']; ?>!</b></h2>
          <a class="btn btn-outline-primary offset-10" href="form.html">Back to form</a>
        </div>
        <div class="card-body">
          <h5><b>Please see your other details</b></h5><br>
          Email: <?php echo $_POST['email']; ?><br>
          Track: <?php echo $_POST['track']; ?><br>
          Level: <?php echo $_POST['level']; ?><br>
          Goals: <?php echo $_POST['goal']; ?><br>
          Other Goals: <?php echo $_POST['other_goals']; ?><br>
        </div>
        <div class="card-footer">
          <a class="btn btn-primary" href="https://wejapa.com">Go to WeJapa Website</a>
        </div>

      </div>
      <hr>
    </div>
    <footer class="container offset-1">
      <p>&copy; Elson Bobo</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>
