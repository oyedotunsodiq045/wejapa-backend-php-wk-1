
<?php require_once('process.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Developer Survey Form</title>
</head>
<body>
    <div id="main">
        <div class="top-form">
            <h1 id="title">Developer Survey Form</h1>
            <p id="description">A general survey form for web and application developers and designers.</p>
        </div>
        <div class="form-section">
            <form action=" " method="POST" id="survey-form" enctype="multipart/form-data">

                <div class="bio"> 
                <label for="Name" id="name-label">Name
                    <input type="text" id="name" placeholder="Name" name="name" required>
                </label>
                <label for="Email" id="email-label">Email
                    <input type="email" id="email" placeholder="Email" name="email" required>
                </label>
                <label for="Age" id="number-label">Age
                    <input type="number" name="age" id="number" placeholder="Age" min="10" max="99">
                </label>
                </div>

                <div class="devstack">
                <p>Which option best describes your current role?</p>
                 <select name="devrole" id="dropdown">
                     <option value=""></option>
                     <option value="Front End Developer" name="devrole">Front End Developer</option>
                     <option value="Back End Developer" name="devrole">Back End Developer</option>
                     <option value=" UI/UX Designer" name="devrole">UI/UX Designer</option>
                     <option value="Full Stack Web Developer" name="devrole">Full Stack Web Developer</option>
                     <option value="Mobile Application Developer" name="devrole">Mobile Application Developer</option>
                 </select>
                </div>

                <div class="workspace">
                 <p>How do you prefer working?</p>
                 <label for="office">
                    <input type="radio" name="workmode" value="Office" id="">
                     Office Only</label>
                 <label for="remote">                  
                    <input type="radio" name="workmode" value="Remote" id="">
                    Remote Only</label>
                 <label for="both">
                    <input type="radio" name="workmode" value="Office and Remote" id="">
                    Remote and Office</label>
                </div>
                <div class="comments">
                 <p>Additional Comments:</p>
                 <textarea name="comments" id="" cols="30" rows="10" id="textarea"></textarea>
                </div>
                <div class="btn">
                    <button id="submit" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>