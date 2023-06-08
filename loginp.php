<?php
session_start();
require_once "config.php";

$_SESSION["name"]='';


$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($error)){
        if($query = $db->prepare("SELECT * FROM users WHERE username = ?")) {
            $query->bind_param('s', $username);
            $query->execute();
            $row_result = $query->get_result();
            $row = $row_result->fetch_assoc();
            if ($row) {
                
                if ($password === $row['password']) {
                    
                    $_SESSION["userid"] = 1;
                    $_SESSION["username"] = $row['username'];
                    
                    $_SESSION["name"] = $row['fullname'];

                    $error .= '0';
                    header("location: index.php");

                    
                    exit;

                    
                } else {
                    header("location: login.php");
                    $error .= '<p class="error"> password not valid .</p>'
                    ;
                }
            } else {
                header("location: login.php");
                $error .= '<p class="error"> No user found</p>';
            }

        }
        $query->close();
    }
    mysqli_close($db);
}
$_SESSION["error"]=$error;
?>