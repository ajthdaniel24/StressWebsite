<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear Minds</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/TestDepration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    
<!----navigation------->
<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="./index.php" class="text-gray">Clear Minds</a>
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
                        <a href="./aboutus.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-----------x--------->  
<!---->
<main>
        <selection class="site-title">
            <div class="site-background">
                <div class="one">
                    <h3>What is Wrong With Me? Am I Depressed? Take Our Depression Test</h3>
                </div>
                <div class="two">
                    <h1>Find out if you may have<br>
                        Borderline Personality Disorder
                        and<br> get the help that you need.</h1>
                </div>
                <div class="three">
                    <h2>Take this mental health test. It’s quick, free and you’ll get <br> confidential results instantly.</h2>
                </div>
                <div class="four">
                    <a href="./quiz.php"><button class="btn-1">Start Test</button></a>
                </div>
            </div>
        </selection>


        <section class="section-1">
            <div class="container text-center" data-aos="fade-left">
              <div class="row">
                <div class="letdep">
                  <div class="pray">
                    <img src="./assets/testback.jpg.png" alt="Pray" class="" />
                  </div>
                </div>
                <div class="letdep">
                  <div class="panel text-left">
                    <h1>What is Depression?</h1>
                    <div class="con">
                        <p>
                            Depression is a state of low mood and aversion to activity. It can affect a person's thoughts, behavior, motivation, feelings, and sense of well-being.
                            <br><br> core symptom of depression is said to be anhedonia, which refers to loss of interest or a loss of feeling of pleasure in certain activities that usually bring joy to people.
                            <br><br>it is a normal temporary reaction to life events, such as the loss of a loved one; and it is also a symptom of some physical diseases and a side effect of some drugs and medical treatments. It may feature sadness, difficulty in thinking and concentration and a significant increase or decrease in appetite and time spent sleeping. People experiencing depression may have feelings of dejection, hopelessness and, sometimes, suicidal thoughts. It can either be short term or long term.
                        </p>
                        <a href="./quiz.php">><button class="btn-2">Start Test</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    
</main>

<!-------x--------->

<!----footer----->

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

<!------------------->
    

    
    <script src="js/Jquery3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>