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
    <title>Diets</title>

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
                    <h2>A healthy diet</h2>
                </div>
            <div class="container1">   
                <div class="words">
                    <p>
                        Eating a healthy diet is not about strict limitations, staying unrealistically thin, or depriving yourself of the foods you love. Rather, it’s about feeling great, having more energy, improving your health, and boosting your mood.
						Healthy eating doesn’t have to be overly complicated. If you feel overwhelmed by all the conflicting nutrition and diet advice out there, you’re not alone. It seems that for every expert who tells you a certain food is good for you, 
						you’ll find another saying exactly the opposite. The truth is that while some specific foods or nutrients have been shown to have a beneficial effect on mood, it’s your overall dietary pattern that is most important. The cornerstone 
						of a healthy diet should be to replace processed food with real food whenever possible. Eating food that is as close as possible to the way nature made it can make a huge difference to the way you think, look, and feel.
                    </p>
                    <p>
                        Fruit and vegetables are low in calories and nutrient dense, which means they are packed with vitamins, minerals, antioxidants, and fiber. Focus on eating the recommended daily amount of at least five servings of fruit and vegetables 
						and it will naturally fill you up and help you cut back on unhealthy foods. A serving is half a cup of raw fruit or veg or a small apple or banana, for example. Most of us need to double the amount we currently eat.
                    </p>
                    <p>
                        A better approach is to make a few small changes at a time. Keeping your goals modest can help you achieve more in the long term without feeling deprived or overwhelmed by a major diet overhaul. Think of planning a healthy diet as a number 
						of small, manageable steps—like adding a salad to your diet once a day. As your small changes become habit, you can continue to add more healthy choices.</p>
                    <p>
                        To set yourself up for success, try to keep things simple. Eating a healthier diet doesn’t have to be complicated. Instead of being overly concerned with counting calories, for example, think of your diet in terms of color, variety, and freshness. 
						Focus on avoiding packaged and processed foods and opting for more fresh ingredients whenever possible.
                    </p>
                    <ul>
                        <li><b><u>Prepare more of your own meals.</u></b> Cooking more meals at home can help you take charge of what you’re eating and better monitor exactly what goes into your food. You’ll eat fewer calories and avoid the chemical additives, added sugar, and unhealthy fats of packaged and takeout foods that can leave you feeling tired, bloated, and irritable, and exacerbate symptoms of depression, stress, and anxiety.
						<li><b><u>Make the right changes.</u></b>When cutting back on unhealthy foods in your diet, it’s important to replace them with healthy alternatives. Replacing dangerous trans fats with healthy fats (such as switching fried chicken for grilled salmon) will make a positive difference to your health. Switching animal fats for refined carbohydrates, though (such as switching your breakfast bacon for a donut), won’t lower your risk for heart disease or improve your mood.
						<li><b><u>Read the labels.</u></b>It’s important to be aware of what’s in your food as manufacturers often hide large amounts of sugar or unhealthy fats in packaged food, even food claiming to be healthy.
						<li><b><u>Focus on how you feel after eating.</u></b>This will help foster healthy new habits and tastes. The healthier the food you eat, the better you’ll feel after a meal. The more junk food you eat, the more likely you are to feel uncomfortable, nauseous, or drained of energy.                    
						<li><b><u>Drink plenty of water.</u></b> Water helps flush our systems of waste products and toxins, yet many of us go through life dehydrated—causing tiredness, low energy, and headaches. It’s common to mistake thirst for hunger, so staying well hydrated will also help you make healthier food choices.                
						</ul>
                    <p>
                        So Now you how these things help you have a good diet. why dont u give it a try....</p>
                        <h2>Click Here to Know about Nutritions</h2>
                        <?php
                            if (empty($name)){
                                echo '<a href="./login.php"><button>more</button></a>';
                            }
                            else{
                                echo '<a href="./nutrition.php"><button>Click</button></a> ';
                            }
                            
                        ?> 
                        
                


                </div>
            <aside class="side">
                <div class="img1"><img src="./assets/Diet1.jpg"></div>
                <div class="img2"><img src="./assets/Diet2.jpg"></div>
                <div class="img3"><img src="./assets/Diet3.jpg"></div>
            </aside>
            </div> 
            <hr>
        </section>
        
        <section class="contain section2">
            <div class="heading">
                <h2>Videos that can help you know more TRY THEM OUT</h2>
            </div>
            <div class="container2">
                <div class="videos">
                    <div class="vidname">
                        <h3>Foods Treats Depression</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/Y1HI1aZ58RY" title="YouTube video player" frameborder="0" allow="accelerometer; 
                            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>Your Diet and Depression</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/wuMp-C_zoog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                             clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="videos">
                    <div class="vidname">
                        <h3>The anti-depression diet</h3>
                    </div>
                    <div class="wrap">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/Msmz32CGanw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
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