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
            box-size
        }
       div{
        margin-top:100px;
        padding: 30px;
        background: cyan;
        text-align: center;
        width: 30rem;
        max-height: 100rem;
        align-self: center;
        border: 1px solid blue;
        box-sizing: border-box;
        overflow: auto;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div>
<strong><?php
if(isset( $_POST["btn"] )){
    echo "Welcome ", $_POST["name"], "! ", "I am Oluwafemi by name.", "<br>", "<br>", "Here are your details you entered."; 
};

echo "<br>";
echo "<br>";

if(isset( $_POST["btn"] )){
    echo "your emial address is: ", $_POST["email"]; 
};
echo "<br>";
echo "<br>";


if(isset( $_POST["btn"] )){
    echo "Phone number: ", $_POST["phone"]; 
    
}
echo "<br>";
echo "<br>";
echo "Nice meeting you.  <a href='index.php'>Go Back</a>";
?>
</strong> 
</div>
</body>
</html>
