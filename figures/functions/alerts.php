<?php

function message(){
    if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
        echo "<div class = 'alert alert-success'>" . $_SESSION['message'] . "</div>";
    }
    
}

function error(){
    if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
        echo "<div class = 'alert alert-danger'>" . $_SESSION['error'] . "</div>";
    }
    
}

function set_alert($type = "", $content = ""){
    switch($type){
        case "message":
            $_SESSION['message'] = $content;
        break;
        case "error":
            $_SESSION['error'] = $content;
        break;
        case "info":
            $_SESSION['info'] = $content;
        break;
        default:
        $_SESSION['message'] = $content;
    break;
    }
}