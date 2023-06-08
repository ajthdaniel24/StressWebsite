<?php
session_start();
$name='';
if (isset($_SESSION["name"])){
$name = $_SESSION["name"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excersizes</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/fitness.css">

</head>
<body>
    
    <!--------nav----------->

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

    <!-------------nav-------------------->

    <!----------main------------------->
    <main>
        <section class="contain section1">
            
                <div class="heading">
                    <h2>Excersize for Relaxation</h2>
                </div>
            <div class="container1">   
                <div class="words">
                    <p>
                        Why dont you try some excersizes to reduce your stress or depression? Its really worked for many people.
                        Not only you can feel better but also you will feel healthy. Once you start you can see some results and 
                        it will push you to move forward.The links between depression, anxiety and exercise aren't entirely clear — but working out and other forms of physical activity can definitely ease symptoms of depression or anxiety and make you feel better. 
                        Exercise may also help keep depression and anxiety from coming back once you're feeling better.
                    </p>
                    <p>
                        When you have depression or anxiety, exercise often seems like the last thing you want to do.
                        But once you get motivated, exercise can make a big difference.Exercise helps prevent and improve a number of health problems, including high blood pressure, diabetes and arthritis. 
                        Research on depression, anxiety and exercise shows that the psychological and physical benefits of exercise can also help improve mood and reduce anxiety.
                    </p>
                    <p>
                        Doing 30 minutes or more of exercise a day for three to five days a week may significantly improve depression or anxiety symptoms. But smaller amounts of physical activity — as little as 10 to 15 minutes at a time — may make a difference. 
                        It may take less time exercising to improve your mood when you do more-vigorous activities, such as running or bicycling.
                    </p>
                    <p>
                        You will womder how these excersize help you relex. We, show you how?
                    </p>
                    <ul>
                        <li><b>Releasing feel-good endorphins,</b> natural cannabis-like brain chemicals (endogenous cannabinoids) and other natural brain chemicals that can enhance your sense of well-being</li>
                        <li><b>Taking your mind off worries</b>so you can get away from the cycle of negative thoughts that feed depression and anxiety</li>
                        <li><b>Gain confidence.</b>Meeting exercise goals or challenges, even small ones, can boost your self-confidence. Getting in shape can also make you feel better about your appearance.</li>
                        <li><b>Get more social interaction.</b>Exercise and physical activity may give you the chance to meet or socialize with others. Just exchanging a friendly smile or greeting as you walk around your neighborhood can help your mood.</li>
                        <li><b>Cope in a healthy way.</b>Doing something positive to manage depression or anxiety is a healthy coping strategy. Trying to feel better by drinking alcohol, dwelling on how you feel, or hoping depression or anxiety will go away on its own can lead to worsening symptoms.</li>
                    </ul>
                    <p>
                        So Now you how these things help you relax why dont u give it a try </p>
                        <h2>Interested In Workouts??? Click Here to Know More</h2>
                        <?php
                            if (empty($name)){
                                echo '<a href="./login.php"><button>more</button></a>';
                            }
                            else{
                                echo '<a href="./moreExcersize.php"><button>more</button></a>';
                            }
                            
                        ?> 
                        
                    
                    
                </div>
            <aside class="side">
                <div class="img1"><img src="./assets/excersize1.jpg"></div>
                <div class="img2"><img src="./assets/excersize3.jpg"></div>
                <div class="img3"><img src="./assets/exceisize2.jpg"></div>
            </aside>
            </div> 
            <hr>
        </section>


        
        <section class="contain section2">
            <div class="heading">
                <h2>Video that can help you know more TRY THEM OUT</h2>
            </div>
            <div class="container2">
                <div class="videos">
                    <div class="vidname">
                        <h3>Simple Excersizes, Tips</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/I_AxR-aHKaQ" title="YouTube video player" frameborder="0" allow="accelerometer; 
                            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Feel Super Relax</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/TsExwl3QldU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                             clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Try Some Streches</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/6ijg6tpyxXg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                             clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </main>

    <!------------------main------------------->

    <!---------------footer---------------->

 <footer class="footer">
    <div class="container">
        <div class="about-us">
            <h2>About Us</h2>
            <p>Today, ClearMinds is the leading digital Depression Therapy company, linking millions of people who are suffering from depression. We’re incredibly grateful to reach this point. And we have more work to do.We’ll never stop making the people free from depression.</p>
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

    <!----------------footer--------------------->

    <script src="js/Jquery3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/fitness.js"></script>


</body>
</html>