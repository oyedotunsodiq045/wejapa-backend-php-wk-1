<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>WeJa PHP Assessment</h1>
        <div class="form">
            <form action="result.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" placeholder="Share first name" name="fname" required/> 
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Share last name" name="lname" required/> 
                </div>
                <div class="form-group">
                    <label for="track">Select Your Track</label>
                    <select name="track" id="track" required>
                        <option value="">You need a path</option>
                        <option value="backend">Backend</option>
                        <option value="frontend">Frontend</option>
                        <option value="design">Design</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Complete Interaction"/>
                </div>
            </form>
        </div>
        

    </div>


</body>
</html>