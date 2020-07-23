<?php
function firstname(){
  if(isset($_SESSION["firstName"])){
    echo "value=".$_SESSION["firstName"];
    unset($_SESSION["firstName"]);}
}


function lastname(){
  if(isset($_SESSION["lastName"])){
    echo "value=".$_SESSION["lastName"];
    unset($_SESSION["lastName"]);}
  }


  function email(){
    if(isset($_SESSION["email"])){
      echo "value=".$_SESSION["email"];
      unset($_SESSION["email"]);}
    }

    function number(){
      if(isset($_SESSION["number"])){
        echo "value=".$_SESSION["number"];
        unset($_SESSION["number"]);}
      }
  
function git(){
      if(isset($_SESSION["git"])){
        echo "value=".$_SESSION["git"];
        unset($_SESSION["git"]);}
      }

function gender(){
    if(isset($_SESSION["gender"]) && $_SESSION["gender"] == "male" ){
      echo ("selected");
      unset($_SESSION["gender"]);}
    }
function gender1(){
    if(isset($_SESSION["gender"]) && $_SESSION["gender"] == "female"){
      echo ("selected");
      unset($_SESSION["gender"]);}
    }


    function error(){
      if(isset($_SESSION["error"])){
        echo "<span  class='alert alert-danger' role='alert'>".$_SESSION["error"]."</span><br>";

        unset($_SESSION["error"]);
        }    
    }
  
    function alert(){
      if(isset($_SESSION["alert"])){
        echo "<span style='color:red;'>".$_SESSION["alert"]."</span>";

        unset($_SESSION["alert"]);
        }
    }