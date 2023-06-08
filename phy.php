<?php
session_start();
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

$username= $_SESSION["username"];
$pid = trim($_POST['id']);

$error='';
$insertquery = $db->prepare("INSERT INTO request (username, splid) VALUES (?, ?);");
        $insertquery->bind_param("ss", $username, $pid);
        $result = $insertquery->execute();
        if($result){
            
            header("location: LetsRelax.php");
            $error .=  '<p class="submited">success</error>';
        } else {
            
            header("location: LetsRelax.php");
            $error .= '<p class="error">success</error>';
        }
        $insertquery->close();
        mysqli_close($db);
    }
$_SESSION['req']=$error;
?>