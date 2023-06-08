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
    <title>Mindfullness</title>

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
                    <h2>Integrate Mindfulness Into Your Daily Life</h2>
                </div>
            <div class="container1">   
                <div class="words">
                    <p>
                       Mindfulness is often defined as “paying attention, on purpose, without judgment.” Mindfulness is the act of paying attention to the present moment, and your associated senses at that moment. The act of practicing mindfulness pays off in multiple areas and ways. 
					   You can practice mindfulness while walking, doing chores or any other activity. You can also practice it while being still, or during meditation.
                    </p>
                    <p>
                        Our days easily fill up with things that we have to do, and self-care is usually at the bottom of the list. However, putting yourself last has consequences – there is a saying: You can’t pour from an empty cup! A daily meditation or mindfulness practice may reduce stress, 
						anxiety and depression while improving mood, resilience, focus and a sense of well-being. It can give you the fuel you need to accomplish the things you have to do, but most importantly, it is a gift you can easily give to yourself every day.</p>
                    <p>
                        Mindfulness is the act of paying attention to the present moment, and your associated senses at that moment. The act of practicing mindfulness pays off in multiple areas and in multiple ways. You can practice mindfulness while walking, doing chores or any other activity. 
						You can also practice it while being still, or during meditation.It’s easy to do, no matter where you are, for either brief or long periods of time. No previous experience is necessary!</p>
                    <p>
                        Fire up your five senses. One of the simplest ways of staying mindful is to bring your attention to the present moment.
                    </p>
                    <ul>
                        <li><b><u>Sit in the morning</u></b> The morning offers a great opportunity to practice your mindfulness. The day is just beginning, it is nice and quiet, and you may have a few moments to yourself. Instead of getting out of bed and rushing through a morning routine, I like to sit for a few minutes. I think about being thankful for the day and just let myself be in the present.</li>
                        <li><b><u>Eat mindfully</u></b> When was the last time you truly appreciated a meal? It’s understandable. Your life is busy, and as a result, eating has become something done in passing. We have fast food restaurants we can drive through and eat as we drive even. Instead, I encourage you to try slowing down, making food yourself, and eating purposefully. Choose live foods with a variety of different colors, textures, and flavors. Take the time to really chew and appreciate each bite. Doing so is better for your digestion and can be a very enjoyable and relaxing time.</li>
                        <li><b><u>Spend time outside</u></b> Spending a little time outdoors can be another way to achieve mindfulness, and you don’t need to go to a far-off retreat to get the desired results. All you have to do is take a walk around your neighborhood. If you have some nice trails, parks, or green spaces, they can make the perfect environment for getting in touch with nature and for connecting with the present moment. Observe what you see on your walk, how the weather feels, what you hear, and what you smell.</li>
                        <li><b><u>Focus on one task at a time</u></b> Take one task at a time and put your focus on the task at hand. When you are done, take a short break and then tackle the next task. It is a more relaxed and mindful way to get things done, and it will likely improve your performance.</li>
                        <li><b><u>Meditate</u></b> In a sense, meditation is the art of mindfulness. In meditating, you are taking the time to connect with your mind. It does take some time to practice controlled breathing and to shutout all of the distractions, but it can be beneficial in so many ways. Along with it being a time for mindfulness, it can also be great for relaxation and stress relief.</li>
                    </ul>
                    <p>
                        So Now you how these things help you relax why dont u give it a try 
                    </p>


                </div>
            <aside class="side">
                <div class="img1"><img src="./assets/mindfulness1.png"></div>
                <div class="img2"><img src="./assets/mindfulness2.jpg"></div>
                <div class="img3"><img src="./assets/mindfulness3.png"></div>
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
                        <h3>Mindfulness For Depression</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/6SAFvliImdU" title="YouTube video player" frameborder="0" allow="accelerometer; 
                            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Mindfulness Online Therapy for Anxiety and Depression</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/ynrcF44LEgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                             clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Mindfulness Meditation for Depression</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/NEMUDaLMWJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
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