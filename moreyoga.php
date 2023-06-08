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
    <title>Get Started with Yoga</title>

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
                    <h2>Starting Yoga for the first time </h2>
                </div>
            <div class="container3">   
                <div class="words">
                <table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none;" width="120px"><img src="./assets/Y1.jpg" width="270px" height="120px"></td>
			<td style="border:none;" width="490px"> <h2 style="color:#084E26;"><center>1. What you need for your first yoga routine?</center></h2> </td>
			</tr>
			</table>
			<p style=" text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			The great thing about yoga is that it can be done anytime, anywhere, with very few accessories. All you need is to wear comfortable, loose-fitting clothes. A non-slip yoga mat is also recommended.
			</p>
			<p style=" text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			More than anything, though, yoga beginners need patience and an open mind. With a little determination, you'll feel the results in no time.
			</p>

			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/Y2.jpg" width="270px" height="120px"></td>
			<td style="border:none" width="490px"> <h2 style="color:#084E26;"><center>2. Beginners Yoga - Class or DVD ?</center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;background-color:#D6FEE8;">
			For a yoga first-timer, a little expert advice will always come in handy. It's hard to beat face-to-face teaching in a class or gym, but, if there’s nothing available in your area, a top-quality beginners yoga DVD can be just as good. The best yoga for beginners DVD for you will be uniquely tailored to your wants and needs. Rodney Yee and Colleen Saidman have put together a Smart Start Yoga program that teaches you a range of seated and standing poses to be practiced anywhere.
			</p>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			For a beginner with a hectic schedule, AM/PM Yoga for Beginners offers a sequence of gentle workouts designed to fit perfectly into the rhythms of your busy day. Yee's Yoga for Beginners includes both a shorter morning workout and a more intensive yoga routine centered entirely around accessible beginner yoga poses.
			</p>
			
			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/Y3.jpg" width="270px" height="120px"></td>
			<td style="border:none" width="490px"> <h2 style="color:#084E26;"><center> 3. Your first Yoga poses </center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			Don't forget that the key to successfully practicing yoga is your breath control, or pranayama. Remember to always take deep breaths through your nose, filling out your belly. Sit on the floor in a relaxed Easy Pose – seated with your legs  crossed and your back and neck straight. Concentrate on your breathing, and feel your body balanced and controlled.
			</p>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			Although it might sound easy, mastering your breathing and back muscle control in this way is an essential part of beginning your yoga routine. Once you feel relaxed, stand up straight and stretch your arms slowly up above your head as you breathe in, then exhale as you reach down toward the ground. Go as far as you can without straining.
			</p>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			Once you feel comfortable with these simple beginner yoga poses, you can incorporate them into a sequence for a more advanced workout.
			</p>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			Yoga might seem like a daunting task. You walk into a gym or download a yoga video and some flexible yogi is sitting on her head in a pretzel-like position and you think, “I’ll never be able to do this." Here are two easy beginner yoga poses that can produce results without sending you to the emergency room.
			</p>
			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/Y4.jpg" width="270px" height="120px"></td>
			<td style="border:none" width="490px"> <h2 style="color:#084E26;"><center> 4. Cat-Cow </center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;background-color:#D6FEE8;">
			A very basic stretch to start with is Cat-Cow Pose, which is a great stretch for your back and abdomen.
			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li>Start on your hands and knees, aligning your wrists underneath your shoulders and your knees <br>with your hips.</li> 
			<li>Keep your spine flat like a table; this is called neutral spine.</li> <br><br>
			<li>Keep your neck in line with your spine. Don’t lift it up or drop it down.</li> <br>
			<li>As you inhale, drop your belly toward the floor and look up. Curl your toes under if this helps you reach the stretch.</li> <br>
			<li>As you exhale, pull your spine toward the ceiling, rounding your back. Your head will drop down and you can focus on your navel. The tops of your feet will lay flat against the floor.</li> <br>
			<li>Repeat this action as you continue inhaling and exhaling, working on your breath.</li> 
		
			</ul>
			</p>

			<br><br>

			<table border="3" width="760px" height="100px" style="padding:20px;">
			<tr>
			<td style="border:none" width="120px"><img src="./assets/Y5.jpg" width="270px" height="120px"></td>
			<td style="border:none; " width="490px"> <h2 style="color:#084E26;"><center> 5. Downward-Facing Dog </center></h2> </td>
			</tr>
			</table>
			<p style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">Another easy beginning yoga pose to try is Downward-Facing Dog.
			<ul style="text-align:justify; font-size:20px; padding:10px;margin-right:36px;width:760px;">
			<li>Begin on your knees the same way you did with Cat-Cow pose, with your wrists under your shoulders and knees under your hips.</li><br>
			<li>As you inhale, push your hips toward the ceiling, straighten your legs and place your feet flat on the ground.</li><br>
			<li>Once your legs are straight, spread your fingers out, and let your head hang between your arms. Engage your quadriceps to take pressure off your arms.</li><br>
			<li>Once you are in position, continue working on your breath.</li>
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
                        <h3>Yoga as exercise</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://en.wikipedia.org/wiki/Yoga_as_exercise" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Science of yoga</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://en.wikipedia.org/wiki/Science_of_yoga" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Modern yoga</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://en.wikipedia.org/wiki/Modern_yoga" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="section-2">
        <h1>Hire Your Trainers Here</h1>
        <div class="row-1">
          <div class="colum-1">
            <div class="card">
              <div>
                <img src="./assets/Y-1.jpg">
            
                <h3>Jagath Gunaratne</h3>
                <h3>Yoga Trainer</h3>
                <p>Jagath is a certified teacher of Hatha Yoga as well as of Meditation practices. Through his teaching style, his intention is to offer a relaxing yet energizing yoga experience.</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy1">
                <input type="text"  class ="id" name="id" value="yoga001" readonly style="display: none;">
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
                <input type="text"  class ="id" name="id" value="yoga002" readonly style="display: none;">
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
                <img src="./assets/Y-3.jpg">
            
                <h3>Shaunagh Aluwihare</h3>
                  <h3>Yoga Trainer</h3>
                <p>Shaunagh is originally from England and has been teaching for the last 15 years in both England and Sri Lanka. Currently teaching full time in Colombo. She has a passion for life and is full of fun and laughter. </p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy3">
                <input type="text"  class ="id" name="id" value="yoga003" readonly style="display: none;">
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