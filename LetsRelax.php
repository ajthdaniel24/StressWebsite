<?php
session_start();
$name='';
if (isset($_SESSION["name"])){
$name = $_SESSION["name"];
}
if (isset($_SESSION["req"])){
  $req = $_SESSION["req"];
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetsRelax</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/LetRelax.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Dosis:wght@200;400;500&family=Lobster&display=swap" rel="stylesheet">
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
                        <a href="./aboutus.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<!-----------x--------->   
 
<!------main title opening-------->
<main>
    <selection class="LR-title">
        <div class="LR-background">
            <h1>Lets Relax Your Mind</h3>
        </div>
    </selection>

    <!----------->

    <section class="section-1">
        <div class="container text-center" data-aos="fade-left">
          <div class="row">
            <div class="letdep">
              <div class="pray">
                <img src="./assets/yogak.jpg" alt="Pray" class="" />
              </div>
            </div>
            <div class="letdep">
              <div class="panel text-left">
                <h1>Yoga</h1>
                <h4>Union with the Divine</h4>
                <div class="con">
                    <h3 class="A">A Tool to Reveal the Self</h3>
                    <p>
                        The Sanskrit root yuj means to “yoke,” “bind,” or “join together.” It also indicates “union” or “Oneness.” At the deepest spiritual level, yoga allows us to reveal the Self, the True Essence of our Being. Ultimately, it is the means by which we realize that there is no separation between anyone or anything. Everything is One. According to the Yoga Shikha Upanishad: “Verily, there is no virtue greater than Yoga, no good greater than Yoga, and no subtlety greater than Yoga. There is nothing that is greater than Yoga.”
                    </p>
                    <a href="./yoga.php"><button class="btn-1">Read More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container text-center" data-aos="fade-right">
            <div class="row">
              <div class="letdep">
                <div class="pray">
                  <img src="./assets/fitness.jpg" alt="Pray" class="" />
                </div>
              </div>
              <div class="letdep">
                <div class="panel text-left">
                  <h1>Fitness</h1>
                  <h4>Being Physically Fit</h4>
                  <div class="con">
                      <h3 class="A">A Tool to Reveal the Self</h3>
                      <p>
                        Fitness is the condition of being physically fit and healthy and involves attributes that include, but are not limited to mental acuity, cardiorespiratory endurance, muscular strength, muscular endurance, body composition, and flexibility. Get our latest expert moves, pro-tips, and recommendations for who to follow
                      </p>
                      <a href="./excersize.php"><button class="btn-1">Read More</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container text-center" data-aos="fade-left">
            <div class="row">
              <div class="letdep">
                <div class="pray">
                  <img src="./assets/mindfullness 2.jpg" alt="Pray" class="" />
                </div>
              </div>
              <div class="letdep">
                <div class="panel text-left">
                  <h1>Mindfulness</h1>
                  <h4>A Mental Training Practice</h4>
                  <div class="con">
                      <h3 class="A">A Tool to Reveal the Self</h3>
                      <p>
                        Mindfulness meditation is a mental training practice that teaches you to slow down racing thoughts, let go of negativity, and calm both your mind and body. It combines meditation with the practice of mindfulness, which can be defined as a mental state that involves being fully focused on "the now" so you can acknowledge and accept your thoughts, feelings, and sensations without judgment.
                      </p>
                      <a href="./mindfullness.php"><button class="btn-1">Read More</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container text-center" data-aos="fade-right">
            <div class="row">
              <div class="letdep">
                <div class="pray">
                  <img src="./assets/dietk.jpg" alt="Pray" class="" />
                </div>
              </div>
              <div class="letdep">
                <div class="panel text-left">
                  <h1>Diet</h1>
                  <h4>Healthy diet</h4>
                  <div class="con">
                      <h3 class="A">A Tool to Reveal the Self</h3>
                      <p>
                        Consuming a healthy diet throughout the life-course helps to prevent malnutrition in all its forms as well as a range of noncommunicable diseases (NCDs) and conditions. However, increased production of processed foods, rapid urbanization and changing lifestyles have led to a shift in dietary patterns. People are now consuming more foods high in energy, fats, free sugars and salt/sodium, and many people do not eat enough fruit, vegetables and other dietary fibre such as whole grains.
                      </p>
                      <a href="./diets.php"><button class="btn-1">Read More</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      
  <section class="sectionmid">
      <div class="containerlast">
        <div class="post-content">
            <div class="post-img">
                <div>
                    <img src="./assets/paul.jpg" alt="img1" class="img">
                </div>
            </div>
            <aside class="post-title">
                <a href="#">Life After Depression</a>
                <p>
                  Paul Moravec didn’t think he’d ever recover, let alone thrive, when he was in the grips of a deep depression.
                </p>  
                <p>“He describes depression as a ‘howling tempest in the brain’ and people who don’t experience this can’t imagine it,” Moravec, 61, who lives in New York, told TODAY. “If it goes on untreated and if it goes on long enough, existence itself becomes unbearable.”
                 </p> 
                <p>Moravec was hospitalized twice for clinical depression, in 1982 and 1995, with the illness disrupting his work and family life.
                </p><p>
                  But in the years since, he has flourished: He won the 2004 Pulitzer Prize in Music for “Tempest Fantasy” and is a music professor at Adelphi University. Moravec credits electroconvulsive therapy (ECT), a procedure where brief electric currents are passed through the brain, for saving his life — “It’s like rebooting a computer,” he said. “It was pretty much immediate [improvement]” — and the support of his family and friends for helping him get better.

                    Today, the composer feels fine and productive, and is busy writing music and “trying to make beautiful things.” He’s not receiving any treatment for depression.

                  “I’ve been extraordinarily fortunate in my life and I feel that way every day. I take nothing for granted,” he said.
                </p>
                <a href="./stories.php"><button class="btn post-btn">Read MoreStories &nbsp; <i class="fas fa-arrow-right"></i></button></a>
            </aside>
        </div>
        <hr>
    </section>




      <section class="section-2">
        <div class="row-1">
          <div class="colum-1">
            <div class="card">
              <div>
                <img src="./assets/phyc1.jpg">
            
                <h3>Dr RD.(Psy.) Dh.C(Florida)</h3>
                <h3>Psychologist</h3>
                <p>A professional counselling psychologist, clinical hypnotherapist & master life coach .</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy1">
                <input type="text"  class ="id" name="id" value="phy001" readonly style="display: none;">
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
                <img src="./assets/phyc2.png">
            
                <h3>Ms Vinthiya Balachandran M.S.Ed.</h3>
                  <h3>Psychologist</h3>
                <p>An experienced and empathetic psychologist who specializes in special education, assessment and evaluation.</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy2">
                <input type="text"  class ="id" name="id" value="phy002" readonly style="display: none;">
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
                <img src="./assets/phyc3.jpg">
            
                <h3>Dr M.N.L.Hakeem Niyas PhD</h3>
                  <h3>Psychologist</h3>
                <p>Specialized in mental health & abnormal psych, family therapy, emotional intelligence, NLP, relationship counselling, couple & marital.</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy3">
                <input type="text"  class ="id" name="id" value="phy003" readonly style="display: none;">
                <button type="submit" name="submit" form="phy3" value="Submit" class="btn email-btn"> Hire Me</button>
                
              </form>
                
              </div>
            </div>
          </div>
        </div>
      </section>


<!--------------------------->
</main>

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

<!-------x--------->



<!------------------->
    

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 800 // values from 0 to 3000, with step 50ms
      });
</script>
    <script src="js/Jquery3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>