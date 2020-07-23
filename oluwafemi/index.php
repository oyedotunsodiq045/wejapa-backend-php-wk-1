<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
       div{
        padding: 30px;
        background: cyan;
        text-align: center;
        width: 30rem;
        max-height: 50rem;
        align-self: center;
        border: 1px solid blue;
        box-sizing: border-box;
        overflow: auto;
        font-family: arial, verdana, lucida;

        }
        a{
            text-decoration: none;
        }
       fieldset p {
           clear: both;
           padding: 1px;
       }
    </style>
</head>
<body>
<div>
<h3>Please enter your details below.</h3>
<br>
    <form action="test.php" method="POST">
        <fieldset>
            <p>
                <label for="Name">Full name :</label>
                <input class="field" type="text" name="name" placeholder="Full name" required>
        </p> <br>
            <p>
                <label class="field" for="Email">Email address:</label> 
                <input type="email" name="email" placeholder="Email " required>
            </p><br>
        <p>
            <label class="field" for="Phone"> Phone number:</label>
            <input type="phone" name="phone" placeholder="Phone number">
        </p><br>
        <p>
            <input type="submit" name="btn"> 
        </p> 
        </fieldset>      
    </form>
    </div>
</body>
</html>



