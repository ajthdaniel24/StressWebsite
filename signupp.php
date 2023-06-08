<?php
session_start();

if (isset($_SESSION["username"]) && $_SESSION["username"] === true){
    header("location: index.php");
    exit;
}
$error='';
$error1='';
if(isset($_SESSION["error"])){
$error = $_SESSION['error'];
}
if(isset($_SESSION["errors"])){
$error1=$_SESSION["errors"];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    
<!----navigation------->
<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="./index.php" class="text-gray">Clear Minds</a>
            </div>
            
            <div class="toggle-collapse">
                <div class="toggle-icon"><?php echo "<h3 style='color:var(--light-green); margin-right:1rem; margin-bottom:1rem;' class='usrname'> $name </h3>"   ?>
                    <i class="fas fa-bars"></i>
            </div>
            </div>
            <div class="menu">
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="nav-link">
                        <?php
                            if (empty($name)){
                                echo '<a href="./login.php">Our Programs</a>';
                            }
                            else{
                                echo '<a href="./LetsRelax.php">Our Programs</a>';
                            }
                            
                        ?> 
                    </li>
                    <li class="nav-link">
                        <a href="./signupp.php">Sign Up</a>
                    </li>
                    <li class="nav-link">
                        <?php
                            if (empty($name)){
                                echo '<a href="./login.php">Log In</a>';
                            }
                            else{
                                echo '<a href="./logout.php">Log Out</a>';
                            }
                            
                        ?>                   
                    </li>
                    <li class="nav-link">
                        <a href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<!-----------x--------->  

<!---------main--------->
<main>

 <div class="container1" id="container1">
     <div class="form-container sign-up-container">
             <form action="signup.php" method="POST" class="sign-up-form" id="form2">
                <h2>Create Account</h2>
                <?php echo $error1; ?>
                <input type="text" name="fullname" placeholder="Full Name" />
                <input type="text" name="username" placeholder="Username" />
                <input type="email" name="email" placeholder="Email" />
                <input type="text" name="age" placeholder="Age" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" id="signupo" form="form2" name="submit1" value="Submit">Sign Up</button>
             </form>
     </div> 

    <div class="form-container sign-in-container">
         <form action="loginp.php" method="POST" class="sign-in-form" id="forml">
            <h2 class="title">Sign In</h2>
            
            <?php echo $error; ?>
            <input type="text" name="username" placeholder="Username" />
            
            <input type="password" name="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>
            <button type="submit" id="signino" form="forml" name="submit" value="Submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h2>Hello Friend!</h2>
                <p>
                    Tell us about you we can help you little more
                    
                </p>
                <button class="ghost" id="signIn">Sign Up</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h2>Welcome Back!</h2>
                <p>
                    To keep connected with us please log in
                </p>
                <button class="ghost" id="signUp">Sign In</button>
            </div>
        </div>
    </div>
 </div>

</main>

<!-------------------------------->
    
<!----footer----->

<footer class="footer">
    <div class="container">
        <div class="about-us">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita labore tenetur, atque quis 
                dolorum quasi aspernatur tempora sequi at.</p>
        </div>
        <div class="newsletter">
            <h2>News Letter</h2>
            <p>Stay Update with Us</p>
            <div class="form-element">
                <form action="newsletter.php" method="post" id="forme">
                <input type="text"  class ="newsemail" name="newsemail" placeholder="Email">
                <button type="submit" name="submit" form="forme" value="Submit" class="btn email-btn"> Send</button>
                </form>
            </div>
        </div>
        <div class="follow">
            <h2>Contact Us</h2>
            <p>Feel free to get in touch with us</p>
            <div>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="rights flex-row">
        <h4 class="text-grey">
            Copyright ©2021 All rights reserved | made by Lazy Coders
        </h4>
    </div>
</footer>

<!------------------->

    <script src="js/Jquery3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/login.js"></script>

</body>
</html>