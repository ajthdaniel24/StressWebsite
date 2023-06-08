<?php
session_start();
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

$news = trim($_POST['newsemail']);

$error='';
$insertquery = $db->prepare("INSERT INTO newsletter (email) VALUES (?);");
        $insertquery->bind_param("s", $news);
        $result = $insertquery->execute();
        if($result){
            header("location: index.php");
            $error .=  '<p class="error">success</error>';
        } else {
            header("location: index.php");
            $error .= '<p class="error">wrong</error>';
        }
        $insertquery->close();
        mysqli_close($db);
    }

?>