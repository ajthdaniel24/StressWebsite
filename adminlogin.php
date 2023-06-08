<?php
session_start();

$admin='';
if (isset($_SESSION["admin"])){
$admin = $_SESSION["admin"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h3{
            text-align: center;
        }

        .container{
            margin: auto;
            width: 50%;
            padding: 10px;
            margin-top: 10rem;
            border-radius: 10px;
  	        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
        	position: relative;
	        overflow: hidden;
	        width: 400px;
	        max-width: 100%;
	        min-height: 200px;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
	        padding: 0 50px;
	        height: 100%;
	        text-align: center;
        }

        .container input {
	        background-color: #eee;
	        border: none;
    	    padding: 12px 15px;
	        margin: 8px 0;
	        width: 100%;
        }

        .container button {
	        border-radius: 20px;
            background-color: #eee;
	        border: 1px solid #ff4b2b;
	        color: black;
	        font-size: 12px;
	        font-weight: bold;
	        padding: 12px 45px;
	        letter-spacing: 1px;
	        text-transform: uppercase;
	        transition: transform 80ms ease-in;
        }
    </style>    


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <h3>Log In</h3>
            <form id="frm" method="POST" action="adlogp.php">
                <input type="text" name="username" class="form1" placeholder="username">
                <input type="password" name="password" class="form1" placeholder="password">
                <button type="submit" id="login" form="frm" name="submit" value="Submit">Log In</button>

            </form>
        </div>
    </div>
</body>
</html>