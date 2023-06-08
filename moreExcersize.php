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
    <title>Get Started</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/fitness.css">

</head>
<body>
    
    <!--------nav----------->

    <<nav class="nav">
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
                    <h2>Get started with Fitness</h2>
                </div>
            <div class="container3">   
                <div class="words">
                <table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none;" width="120px"><img src="./assets/G1.jpg" width="270px" height="120px"></td>
			<td style="border:none;" width="490px"> <h2 style="color:#084E26;"><center>1. Assess your fitness level</center></h2> </td>
			</tr>
			</table>
			<p style=" text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">You probably have some idea of how fit you are. But assessing and recording baseline fitness scores can give you benchmarks against which to measure your progress. To assess your aerobic and muscular fitness, flexibility, and body composition, consider recording:
			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li>Your pulse rate before and immediately after walking 1 mile (1.6 kilometers)</li>
			<li>How long it takes to walk 1 mile, or how long it takes to run 1.5 miles (2.41 kilometers)</li>
			<li>How many standard or modified pushups you can do at a time</li>
			<li>How far you can reach forward while seated on the floor with your legs in front of you</li>
			<li>Your waist circumference, just above your hipbones</li>
			<li>Your body mass index</li>
			</ul>
			</p>

			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/G2.jpg" width="270px" height="120px"></td>
			<td style="border:none" width="490px"> <h2 style="color:#084E26;"><center>2. Design your fitness program</center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">It's easy to say that you'll exercise every day. But you'll need a plan. As you design your fitness program, keep these points in mind:

			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li><b>Consider your fitness goals.</b> Are you starting a fitness program to help lose weight? Or do you have another motivation, such as preparing for a marathon? Having clear goals can help you gauge your progress and stay motivated.
			</li><br>
			<li><b>Create a balanced routine.</b> For most healthy adults, the Department of Health and Human Services recommends getting at least 150 minutes of moderate aerobic activity or 75 minutes of vigorous aerobic activity a week, or a combination of moderate and vigorous activity. The guidelines suggest that you spread out this exercise during the course of a week. Greater amounts of exercise will provide even greater health benefits.
			<br><br>But even small amounts of physical activity are helpful. Being active for short periods of time throughout the day can add up to provide health benefits.
			<br><br>Do strength training exercises for all major muscle groups at least two times a week. Aim to do a single set of each exercise, using a weight or resistance level heavy enough to tire your muscles after about 12 to 15 repetitions.
			</li><br>
			<li><b>Start low and progress slowly.</b> If you're just beginning to exercise, start cautiously and progress slowly. If you have an injury or a medical condition, consult your doctor or an exercise therapist for help designing a fitness program that gradually improves your range of motion, strength and endurance.
			</li><br>
			<li><b>Build activity into your daily routine.</b> Finding time to exercise can be a challenge. To make it easier, schedule time to exercise as you would any other appointment. Plan to watch your favorite show while walking on the treadmill, read while riding a stationary bike, or take a break to go on a walk at work.
			</li><br>
			<li><b>Plan to include different activities. </b>Different activities (cross-training) can keep exercise boredom at bay. Cross-training using low-impact forms of activity, such as biking or water exercise, also reduces your chances of injuring or overusing one specific muscle or joint. Plan to alternate among activities that emphasize different parts of your body, such as walking, swimming and strength training.
			</li><br>
			<li><b>Try high-interval intensity training.</b> In high-interval intensity training, you perform short bursts of high-intensity activity separated by recovery periods of low-intensity activity.
			</li><br>
			<li><b>Allow time for recovery.</b> Many people start exercising with frenzied zeal — working out too long or too intensely — and give up when their muscles and joints become sore or injured. Plan time between sessions for your body to rest and recover.
			</li><br>
			<li><b>Put it on paper.</b> A written plan may encourage you to stay on track.
			</li><br>
			</ul>
			</p>

			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/G3.jpg" width="270px" height="120px"></td>
			<td style="border:none" width="490px"> <h2 style="color:#084E26;"><center> 3. Assemble your equipment </center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">You'll probably start with athletic shoes. Be sure to pick shoes designed for the activity you have in mind. For example, running shoes are lighter in weight than cross-training shoes, which are more supportive.

			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li>If you're planning to invest in exercise equipment, choose something that's practical, enjoyable and easy to use. You may want to try out certain types of equipment at a fitness center before investing in your own equipment.
			</li> <br>
			<li>You might consider using fitness apps for smart devices or other activity tracking devices, such as ones that can track your distance, track calories burned or monitor your heart rate.
			</li>
			</ul>
			</p>

			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/G4.jpg" width="270px" height="120px"></td>
			<td style="border:none" width="490px"> <h2 style="color:#084E26;"><center> 4. Get started </center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">Now you're ready for action. As you begin your fitness program, keep these tips in mind:

			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li><b>Start slowly and build up gradually.</b>Give yourself plenty of time to warm up and cool down with easy walking or gentle stretching. Then speed up to a pace you can continue for five to 10 minutes without getting overly tired. As your stamina improves, gradually increase the amount of time you exercise. Work your way up to 30 to 60 minutes of exercise most days of the week.
			</li> <br>
			<li><b>Break things up if you have to.</b> You don't have to do all your exercise at one time, so you can weave in activity throughout your day. Shorter but more-frequent sessions have aerobic benefits, too. Exercising in short sessions a few times a day may fit into your schedule better than a single 30-minute session. Any amount of activity is better than none at all.
			</li> <br>
			<li><b>Be creative.</b> Maybe your workout routine includes various activities, such as walking, bicycling or rowing. But don't stop there. Take a weekend hike with your family or spend an evening ballroom dancing. Find activities you enjoy to add to your fitness routine.
			</li> <br>
			<li><b>Listen to your body.</b> If you feel pain, shortness of breath, dizziness or nausea, take a break. You may be pushing yourself too hard.
			</li> <br>
			<li><b>Be flexible.</b> If you're not feeling good, give yourself permission to take a day or two off.
			</li> <br>

			</ul>
			</p>

			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/G5.jpg" width="270px" height="120px"></td>
			<td style="border:none; " width="490px"> <h2 style="color:#084E26;"><center> 5. Monitor your progress </center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px; background-color:#D6FEE8;">Retake your personal fitness assessment six weeks after you start your program and then again every few months. You may notice that you need to increase the amount of time you exercise in order to continue improving. Or you may be pleasantly surprised to find that you're exercising just the right amount to meet your fitness goals.

			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li>If you lose motivation, set new goals or try a new activity. Exercising with a friend or taking a class at a fitness center may help, too.
			</li><br>
			<li>Starting an exercise program is an important decision. But it doesn't have to be an overwhelming one. By planning carefully and pacing yourself, you can establish a healthy habit that lasts a lifetime.</li>

			</ul>
			</p>

			<br><br>
		


                </div>
            
            </div> 
            <hr>
        </section>
        
        <section class="contain section2">
            <div class="heading">
                <h2>Here are some more articles.....</h2>
            </div>
            <div class="container2">
                <div class="videos">
                    <div class="vidname">
                        <h3>Eating Disorder</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://en.wikipedia.org/wiki/Eating_disorder" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Antidepressant</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://en.wikipedia.org/wiki/Antidepressant" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Mental Health</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://en.wikipedia.org/wiki/Mental_health" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="section-2">
        <div class="row-1">
          <div class="colum-1">
            <div class="card">
              <div>
                <img src="./assets/F1.jpg">
            
                <h3>Dinuka Perera</h3>
                <h3>Personal Trainerr</h3>
                <p>JDinuka Perera was born in Sri Lanka and built in Japan. He became the First Sri Lankan to compete in Fitness America pageant and was given the unofficial title "the Most Shredded Sri Lankan on the Planet"</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy1">
                <input type="text"  class ="id" name="id" value="exe001" readonly style="display: none;">
                <button type="submit" name="submit" form="phy1" value="Submit" class="btn email-btn"> Hire Me</button>
                
              </form>
                
              </div>
            </div>
          </div>
        </div>

        <div class="row-1">
          <div class="colum-1">
            <div class="card">
              <div>
                <img src="./assets/Y-2.jpg" width="100px" height="100px">
            
                <h3>Eva Priyanka Wegener</h3>
                  <h3>Yoga Trainer</h3>
                <p>TYOGA TEACHER, CREATOR & CO FOUNDER SRI YOGA SHALA. she invites you to personalize your practice in a mindful way in order to transform yourself into the healthiest and happiest version of yourself.</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy2">
                <input type="text"  class ="id" name="id" value="exe002" readonly style="display: none;">
                <button type="submit" name="submit" form="phy2" value="Submit" class="btn email-btn"> Hire Me</button>
                
              </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row-1">
          <div class="colum-1">
            <div class="card">
              <div>
                <img src="./assets/F4.jpg">
            
                <h3>Daniel Thambyrajah</h3>
                  <h3>Personal Trainer</h3>
                <p>Daniel is a NESTA certified Group Exercise Instructor, a IYCA Resistance Band Instructor and is a SCW Fitness certified Boxing Instructor. He is also certifying himself as a Pound.Rockout. Workout Instructor. </p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy3">
                <input type="text"  class ="id" name="id" value="exe003" readonly style="display: none;">
                <button type="submit" name="submit" form="phy3" value="Submit" class="btn email-btn"> Hire Me</button>
                
              </form>
                
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