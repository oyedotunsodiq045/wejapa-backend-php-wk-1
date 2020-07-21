<?php
$fullname=$email=$stack=$level="";
$emailErr=$fullnameErr=$stackErr=$levelErr="";
if($_SERVER['REQUEST_METHOD']=="POST") {

    if (isset($_POST['submit'])) {


            if (!preg_match("/^[a-zA-Z ]*$/", $_POST['fullname'])) {
                $fullnameErr = "Only letters and white space allowed";
            }
            $fullname = $_POST['fullname'];


            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            $email = $_POST['email'];

            if (!preg_match("/^[a-zA-Z-#-+ ]*$/", $_POST['stack'])) {
                $stackErr = "Only letters,white space,# and + are allowed";
            }
            $stack = $_POST['stack'];


            if (empty($_POST['level'])) {
                $levelErr = "kindly select from the DropDown";
            }
            $level = $_POST['level'];

    }
}
?>
