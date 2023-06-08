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
    <title>Yoga</title>

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
                    <h2>Yoga for Depression Free Mind</h2>
                </div>
            <div class="container1">   
                <div class="words">
                    <p>
                        Few minutes of yoga can change your Mood for sure. As exercise, yoga is a natural way to increase serotonin production. According to the Journal of Psychiatry and Neuroscience,
                        serotonin production plays a role in the treatment of depression. Serotonin is believed to play a major role in happiness. 
                        One studyTrusted Source also suggests people with depression have lower serotonin levels.

                    </p>
                    <p>
                        Yoga is also especially helpful because of its gentle, calming, and fluid nature. Each pose is flexible, so people of all levels can practice. 
                        Your instructor will emphasize breathing, concentration, and smooth movement.Dr. Mason Turner of the Kaiser Permanente Medical Group says yoga therapy “can be very powerful in the treatment of depression.” 
                        Even if yoga isn’t your forte, the combination of meditation and physical movement provide two important elements for relieving depression.
                    </p>
                    <p>
                        Anyone who has been diagnosed with depression will meet diagnostic criteria, sharing commonalities with others who suffer with this mental health issue. 
                        But despite this, it is still a deeply personal illness – and yoga can be part of a personalised response, which takes into account both mind and body. 
                        Within the context of pharmaceutical and other therapeutic remedies, 
                        yoga therapy can assist people in symptom management and recovery – and in cases of mild depression, it can be their primary self-help tool which prevents their symptoms from worsening.  
                    </p>
					<p>
						The benefits of yoga for mental and physical health are known to one and all. Results of a recently-conducted study have found that yoga can improve symptoms of generalised anxiety disorder. 
						This is a condition which is characterised by chronic nervousness and worry. Published in the journal JAMA Psychiatry, the study found that yoga can be more effective in managing generalised 
						anxiety disorder, as compared to standard education on stress management, reports IANS. Breathing exercises, meditation and relaxation exercises can be helpful in improving symptoms of the condition.
					</p>
                    <p>
                        Yoga will Help you by this maner
                    </p>
                    <ul>
                        <li>Reduce the impact of stress</li>
                        <li>Help with anxiety and depression</li>
                        <li>Be a self-soothing technique similar to meditation, relaxation, and exercise</li>
                        <li>Improve energy</li>
                        <li><b>Cope in a healthy way.</b>Doing something positive to manage depression or anxiety is a healthy coping strategy. Trying to feel better by drinking alcohol, dwelling on how you feel, or hoping depression or anxiety will go away on its own can lead to worsening symptoms.</li>
                    </ul>
                    <p>
                        Lets try</p>
                        <h2>Click here to know more about yoga</h2>
                        <?php
                            if (empty($name)){
                                echo '<a href="./login.php"><button>Click</button></a>';
                            }
                            else{
                                echo '<a href="./moreyoga.php"><button>Click</button></a>';
                            }
                            
                        ?> 
                        
                    


                </div>
            <aside class="side">
                <div class="img1"><img src="./assets/yoga1.jpg"></div>
                <div class="img2"><img src="./assets/yoga2.jpg"></div>
                <div class="img3"><img src="./assets/yoga3.jpg"></div>
            </aside>
            </div> 
            <hr>
        </section>

        
        <section class="contain section2">
            <div class="heading">
                <h1>Video that can help you know more TRY THEM OUT</h1>
            </div>
            <div class="container2">
                <div class="videos">
                    <div class="vidname">
                        <h3>5 Yoga poses for Depression</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/gHLF-EdDLzI" title="YouTube video player" frameborder="0" allow="accelerometer; 
                            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Yoga To Treat Anxiety & Stress</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/iqcAWup2aCE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                             clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Releasing Stress and Anxiety</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/I7CNTxPq1d4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
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