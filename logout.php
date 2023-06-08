<?php
    session_start();
    include('config.php');
    $_SESSION["name"]="";
    $_SESSION["error"]="";
    
    $_SESSION["req"]="";
    header("location: index.php");


?>