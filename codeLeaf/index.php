<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeLeaf</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body>
    <div class="container-fluid bg-light vh-100 py-5">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-6 col-xl-4">
                <?php
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                ?>
                <?php if(isset($name)) : ?>
                    <div class="alert alert-success">
                        <?= "Hi, my name is {$name} with email {$email} and Phone number {$phone}" ?>
                    </div>
                <?php else : ?>
                    <p class="text-muted">Enter your details here</p>
                <?php endif ?>
                <form action="/" method="post">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" id="Name" name="name" class="form-control py-4" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" name="email" class="form-control py-4" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="tel" id="Phone" name="phone" class="form-control py-4" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block py-3 font-weight-bold" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>