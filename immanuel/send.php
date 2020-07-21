<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
        display: flex;
        text-align: center;
        justify-content: center;
        align-content: center;
        font-size: 2rem;
         text-transform: capitalize;
        }

        a {
        text-decoration: none;
        color: rgb(255, 0, 0);
        margin-left: 1em;
        }

        a:hover {
        color: rgb(0, 0, 255);
        }
    </style>
</head>
<body>
    <div>
<?php
if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['code'])) {
    echo '<br>Hello '.$_POST['name'];
    echo '<br><br>Hope we can work together,  '.$_POST['code'];
    echo '<br><br> My stack comprises of Html, CSS, and a touch of JS ';
    echo "thank you".'<a href="index.html">Home</a>';
} 
else{
    echo "name and codename cannot be empty <a href='index.html'>click here to try again.</a>";
}
?>
</div>
</body>
</html>

