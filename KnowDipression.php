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
    <title>Clear Minds</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/KnowDipretion.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

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
 
<!------main title opening-------->




<!------------------------->
<main>
    <selection class="site-title">
        <div class="site-background">
            <p>Lets Know About Dipression</p>
        </div>
    </selection>

<!-------x--------->

<!----body---->

    <section class="body">
        
        <div class="what">
            <p>What is Depression</p>
            <div class="backG">
                <img src="./assets/letback.png" width="700px" height="650px">
            </div>
        </div>
        <div class="def">
            <p>Depression is a state of low mood and aversion to activity.It can affect a person's thoughts, behavior, motivation, feelings, and sense of well-being. The core symptom of depression is said to be anhedonia, which refers to loss of interest or a loss of feeling of pleasure in certain activities that usually bring joy to people. Depressed mood is a symptom of some mood disorders such as major depressive disorder or dysthymia. it is a normal temporary reaction to life events, such as the loss of a loved one; and it is also a symptom of some physical diseases and a side effect of some drugs and medical treatments.
            </p>
        </div>
        <a href="https://en.wikipedia.org/wiki/Depression_(mood)"><button class="wht_LM">Learn More &nbsp;</button></a>
    </section>

    <!---wht is dep is finished-->

    <!--about dep -->

    <main class="cont">
        <section class="ani"    data-aos="fade-left">
            <img src="./assets/2697.jpg" width="80%" height="80%" >
            <div class="about">
            <p>
                “Every man has his secret sorrows which the world knows not; and often times we call a man cold when he is only sad.”
              </p>
              <h4>--Henry Wadsworth Longfellow</h4>
          </div>
        </section>

        <section class="ani" data-aos="fade-right">
            <img src="./assets/4370.jpg" width="80%" height="95%">
            <div class="about">
            <p>
                “That's the thing about depression: A human being can survive almost anything, as long as she sees the end in sight. But depression is so insidious, and it compounds daily, that it's impossible to ever see the end.”
              </p>
              <h4>--Elizabeth Wurtzel, Prozac Nation</h4>
          </div>
        </section>

        <section class="ani" data-aos="fade-left">
            <img src="./assets/1069006.jpg" width="80%" height="75%">
            <div class="about">
            <p>
                “Mental pain is less dramatic than physical pain, but it is more common and also more hard to bear. The frequent attempt to conceal mental pain increases the burden: it is easier to say “My tooth is aching” than to say “My heart is broken.”
              </p>
              <h4>--C.S. Lewis, The Problem of Pain</h4>
          </div>
        </section>
    </main>
    <!--about dep finished-->


    <section>
        <div class="blog">
            <div class="container">
                <div class="owl-carousel owl-theme blog-post">
                    <div class="content">
                         <img src="./assets/book1.jpg" alt="mindfullness">
                         <div class="blog-title">
                             <h3>The Noonday Demon: An Atlas of Depression</h3>
                             <a href="https://www.amazon.com/dp/1501123882?ots=1&linkCode=ogi&tag=goodhousekeeping_auto-append-20&ascsubtag=[artid|10055.g.32475528[src|[ch|[lt|sale"><button class="btn btn-blog ">Buy Now</button></a>
                         </div>
                    </div>
                    <div class="content">
                        <img src="./assets/book2.jpg" alt="mindfullness">
                        <div class="blog-title">
                            <h3>Happy, Okay?</h3>
                            <a href="https://www.amazon.com/dp/1642501360?ots=1&linkCode=ogi&tag=goodhousekeeping_auto-append-20&ascsubtag=[artid|10055.g.32475528[src|[ch|[lt|"><button class="btn btn-blog ">Buy Now</button></a>
                        </div>
                   </div>
                   <div class="content">
                        <img src="./assets/book3.jpg" alt="mindfullness">
                        <div class="blog-title">
                            <h3>Reasons to Stay Alive</h3>
                            <a href="https://www.amazon.com/dp/0143128728?ots=1&linkCode=ogi&tag=goodhousekeeping_auto-append-20&ascsubtag=[artid|10055.g.32475528[src|[ch|[lt|sale"><button class="btn btn-blog ">Buy Now</button></a>
                        </div>
                    </div>
                    <div class="content">
                        <img src="./assets/book4.jpg" alt="mindfullness">
                        <div class="blog-title">
                            <h3>Depression Hates a Moving Target</h3>
                            <a href="https://www.amazon.com/dp/1642500135?ots=1&linkCode=ogi&tag=goodhousekeeping_auto-append-20&ascsubtag=[artid|10055.g.32475528[src|[ch|[lt|sale"><button class="btn btn-blog ">Buy Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
      });
</script>
    <script src="js/Jquery3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    </script>
</body>
</html>