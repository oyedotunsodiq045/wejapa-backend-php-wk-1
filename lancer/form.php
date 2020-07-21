<?php

$email = $_GET["email"];
$fullname = $_GET["fullname"];
$conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6d19c977650fd", getenv("PASSWORD"), "heroku_1f0a660f47e45f9");

//check if not connected
if (!$conn) {
    echo "cant connect to db";
} else {
    $email = mysqli_real_escape_string($conn, $email);
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $sql = "INSERT INTO wejapa (email,fullname) VALUES ('$email','$fullname')";
    $conn->query($sql);
}
header("Location:/");
