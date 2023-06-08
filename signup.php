<?php
session_start();
require_once "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit1'])){

    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    $password = trim($_POST['password']);

    $error ='';

    if($query = $db->prepare("SELECT * FROM users WHERE username = ?")){
        

        $query->bind_param('s',$username);
        $query->execute();
        $query->store_result();
            if ($query->num_rows > 0){
                header("location: login.php");
                $error .= '<p class="error">already in</error>';
                
            } else {
                if (strlen($password) < 6){
                    header("location: login.php");
                    $error .= '<p class="error">6 chars in</error>';

                }

            }
            $query->close();
    }

    
        $insertquery = $db->prepare("INSERT INTO users (fullname, username, email, age, password) VALUES (?, ?, ?, ?, ?);");
        $insertquery->bind_param("sssss", $fullname, $username, $email, $age, $password);
        $result = $insertquery->execute();
        if($result){
            header("location: login.php");
            $error .=  '<p class="error">success</error>';
        } else {
            header("location: login.php");
            $error .= '<p class="error">wrong</error>';
        }
        $insertquery->close();
        mysqli_close($db);
    
            
            
    
    $_SESSION["errors"]=$error;
}





?>