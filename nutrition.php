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
    <title>Nutrition</title>

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
                    <h2>Nutrition</h2>
                </div>
            <div class="container3">   
                <div class="words">
					<table >
				<tr>
					<td style="padding:20px;text-align:justify;font-size:20px;margin-right:36px;width:835px;">
						<h2>DIET DILEMMA: SHOULD I TRY KETO TO DROP BODY FAT?</h2>
						<p>
						Here’s how to be smart about adopting a high-fat, low-carb eating plan.
						</p>
						<span id="dots"></span><span id="more">
					
								<p>
								Many people have a hard time wrapping their heads around ketogenic diets or simply known as keto diets. 
								We get it, it seems contradictory on the surface … I can eat all the fatty foods I want — even bacon — and drop tons of body fat? That makes no sense!
								</p>
								<p>
								Yet for many people, “going keto” has delivered rapid weight loss. Question is, is it healthy weight loss? And is keto the right dietary 
								path for the gym-goer looking to shed body fat without losing muscle and strength gains? Our resident nutrition expert tackles these issues to help you decide.
								Featured Expert: Susan Lopez, RD, CSSD, LD, is a tactical performance dietitian who specializes in working with athletes from the military, firefighter, police, and first responders. 
								Lopez is a military veteran and special operations spouse whose unique experience and knowledge help elite warfighters and community heroes stay fit and healthy. She is also the team dietitian for Bravo Sierra.
								</p>
								<p>
								If I eat more fat, will I burn more fat?	
								</p>
								<p>
								I get this question in so many forms , such as, “Will keto help me lose weight or will eating fat make me fat?”	
								</p>
								<p>
								The body is such a complex organism and amazing in its ability to adapt to whatever we humans like to throw at ourselves.
								The body has different metabolic pathways that can be used to supply energy to our cells. Each macronutrient (protein, fat, carbs) can be used to make energy, although the body’s preferred source of energy is carbohydrates. 
								The least preferred method of energy production in the body is through the breakdown of proteins into amino acids, which are then converted to glucose through the process of gluconeogenesis. If your body is having to break 
								down proteins for energy production, it’s likely that your nutrition needs some help.
								</p>
								<p>
								Fat can be oxidized in the body to produce energy, and in a rested state a healthy individual will do a fairly good job of utilizing fat for energy production. And yes, eating more fat in the absence of adequate carbohydrates 
								will increase fat metabolism. But, just because you’re metabolizing fat doesn’t mean that you aren’t still storing fat. And if your rate of fat storage is higher than your rate of fat burn, you will get fatter
								</p>
								<p>
								Just as calories taken in need to be lower than calories out in order to lose weight, so too does fat storage need to be lower than fat oxidation in order to lose fat. You’ll likely need to be in a calorie deficit to lose fat as well.
								</p>
						
								<p>
								In diets such as keto, the increased intake of nutrient dense foods and decreased intake of overprocessed or calorie dense foods can create a calorie deficit, even though calories from fat may be higher, and this often leads to fat and weight loss.
								There’s also no conclusive evidence that a low-carbohydrate diet is any more beneficial than a low-fat diet when calorie restriction is applied.
								So, how do I know if my rate of fat oxidation is greater than my rate of fat storage (or vice versa)? Is it just a matter of tracking my weight loss and/or my body fat levels?
								In a real-world setting, yes — there really is only the physical changes that can be tracked.
								</p>
						</span>
						<button onclick="myFunction()" id="myBtn"style="margin-left:310px;font-size:20px;" >View All</button>
			
							<script>
								function myFunction() {
									var dots = document.getElementById("dots");
									var moreText = document.getElementById("more");
									var btnText = document.getElementById("myBtn");

								if (dots.style.display === "none") {
									dots.style.display = "inline";
									btnText.innerHTML = "View All"; 
									moreText.style.display = "none";
								} 
								else {
									dots.style.display = "none";
									btnText.innerHTML = "View less"; 
									moreText.style.display = "inline";
								}
								}
							</script>
						
						
						
					</td>
				</tr>
				<tr>
					<td style="padding:20px;text-align:justify;font-size:20px;margin-right:36px;width:760px;"">
						<h2>5 WAYS TO LOSE WEIGHT AFTER THE HOLIDAYS</h2>
						<p>
						Don't let family feasts ruin your muscle gains.
						</p>

						<span id="dot1"></span><span id="more1">
								
								<p>
								During the holidays, all good intentions of trying to keep your health and nutrition on track is a lot easier said than done, especially when there is a feast of stuffing, gravy, and warm buttered rolls coming for you hot from the oven.

								The holidays are for merriment and only come once a year, but it’s important to realize the cost of delaying your daily exercise routine and enjoying an extra serving of mashed potatoes and small slice of pumpkin pie.

								Which is fine every once and a while—we’ve preached about enjoying yourself and having a few treats here and there. But there’s a limit on how much you should indulge.

								According to some estimates, Americans consume up to 4,500 calories during traditional holiday celebrations including Thanksgiving, office parties, Friendsgiving, and Christmas and Hanukkah festivities. If you’re a social butterfly and have a lot of commitments, those extra calories can add up and you’ll be going into the new year with a few extra pounds (and not the good type).

								We’re not telling you to not show up to the family potluck, but keep in mind that those extra servings come at a cost. Don’t let poor eating habits carry on into the colder months. The accumulation of these pounds unfortunately won’t melt as fast as the snow in the spring. But there are ways you can shed those extra pounds before you have to shed the puffy winter jacket.

								Here are my five ways to lose weight after holiday eating, that I even follow myself.
								</p>
								
								<h3>
								Cut Out the Sweet Stuff
								</h3>
								<p>
								Research shows that sugar intake can be addicting and can lead to an unhealthy cycle of cravings and binges. This is largely due to the insulin spikes that accompany foods with high sugar content. Insulin drops blood sugar and causes storage of extra calories as fat, and causes a sugar crash later, making you irritable, sleepy, and is responsible for “food coma”. The sugar crash also causes further sweet cravings in order to raise your blood sugar level, but inevitably results in another crash, causing a snowball phenomenon which can be hard to escape from.

								With those many holiday parties ending in sugar cookies and other sweets, ’tis the season of high levels of sugar and fat! After your last holiday dinner, make a vow to eliminate ALL desserts for four to ten days. Although it wont be easy, this amount of time will cause any cravings that your body has begun to experience to be relinquished. While cravings decrease, your body will begin to prefer naturally sweet foods, including fruit and vegetables. 
								</p>
								
								<h4>Shrink Your Stomach</h4>
								<p>
								Did you know that your stomach is “elastic”—meaning it can shrink or enlarge based on the amount of food you consume? This is one of the major reasons for failure of weight loss surgery, as even a surgically created tiny stomach can adapt over time to accomodate larger amounts of food. Scary, huh? Well, the opposite is also true.

								If you eat less, over time, your stomach will shrink to feel fuller on smaller amounts of food, making you eat less calories, and keep weight off. Try it. While eating at home or out at a local restaurant, take 1/3 off your plate. Reduce all temptation to finish your entire plate by putting some aside. Either put it in a container or ask your server for a bag to go and save it for lunch the following day. By doing this, you can shrink your stomach after a season of over-eating and subtract hundreds of calories from your daily caloric intake. 
								</p>
								
								<h3>Up Your Protein</h3>
								<p>
								Let’s do something we all love. Up the protein! Research suggests that protein prolongs the feeling of fullness. The reason: it is more difficult to digest, leading to less of an insulin spike, and protein containing foods are bulkier. Instead of eating carbohydrates, people who eat a high-protein breakfast or lunch are often less hungry at their next meal. Protein also requires your body to burn a few more calories to digest it.

								I suggest sticking to low-fat protein sources like chicken, salmon, greek yogurt or thinly sliced turkey breast. Opt for protein during all meals going forward and you will cut excessive eating that often happens when not feeling full. 
								</p>
								
						</span>
					<button onclick="myFunction1()" id="myBtn1"style="margin-left:310px;font-size:20px;" >View All</button>
					<script>
				function myFunction1() {
					var dot1 = document.getElementById("dot1");
					var moreText = document.getElementById("more1");
					var btnText = document.getElementById("myBtn1");

				if (dot1.style.display === "none") {
					dot1.style.display = "inline";
					btnText.innerHTML = "View All"; 
					moreText.style.display = "none";
				} 
				else {
					dot1.style.display = "none";
					btnText.innerHTML = "View less"; 
					moreText.style.display = "inline";
				}
				}
			</script>
						
					</td>
				</tr>
				<tr>
					<td style="padding:20px;text-align:justify;font-size:20px;margin-right:36px;width:760px;">
						<h2>EATING FOR THE BODYBUILDING PHYSIQUE OF THE 70S</h2>
						<p>
						Here's how you can benefit from some old-school eating habits.	
						</p>
						
						<span id="dot2"></span><span id="more2">
						
							<p>
							They say we are what we eat. Never a truer word has been spoken and you can look around and pretty much tell who eats right and who doesn’t. I look at today’s society and see obesity all around me starting with the kids right on up to the adults. TV reality shows are all popping up now with those like The Biggest Loser, Jillian Michael’s Losing It and specials on obesity and diabetes.

							I don’t remember seeing this much coverage on weight in the 70s as it wasn’t as big a problem then or at least it wasn’t in the media. Today more people are on the run and want to eat quick so they pick those items that are full of sugars and fats and don’t stop to analyze what’s in it and what it will do to them. Some gain 100 lbs in no time and don’t even realize it until it’s there. Then they’re on to their 2nd 100 lbs.

							When I was in school, we had cafeterias that took pride in their meals and were cooked by little old ladies in the back. Each meal was balanced and came with a lot of flavor as well. Today’s schools package meals and stick them in vending machines for the kids. It’s a no thought process.

							I started my bodybuilding physique diet for the 70s diet in the 60s so you might say I was ahead of my time. But, I got most my information out of reading muscle magazines, which the average person would never read and even laugh at me for doing it. These articles began my structure to eat right and get results in my body.

							The main diet for a bodybuilding physique in the 70s was high protein and low carb. It was Protein to build the muscle and less carb to reduce body fat. It made perfect sense to me and the others that trained. However when you would try to explain this to someone on the street, it would be an argument about how they liked to eat all the other foods. This wasn’t a case of like or dislike, but we would eat for results even if we didn’t like the food.

							This diet started way back maybe even beyond the 50s but I do remember in 1967 many of the bodybuilders on the beach drinking quart containers of extra rich milk or even cream. Some would go to restaurants and drink the cream right out of the containers on the tables. This was pretty extreme but they did it. The reason for this was of course the extra protein and the fat content for energy, which I’ll get into later in this article.

							Supplements were just breaking ground around then and the main things to take were liver pills that were extreme in building stomach gases and Soy protein, which really didn’t work that well. Some of us would add powdered milk to our regular milk just to get more protein. I would also see protein cans on the shelves in stores but the spelling was PROTEEN. I was never sure what was in that so I didn’t try it. But, I did use dehydrated fish powder as it was considered pure protein. I wasn’t easily digested and tasted like vomit but it did have its value.

							We depended most on ‘real’ foods such as the diet below and this was very basic.
							<br>
							<b>Breakfast </b>– Beef patty and 3 eggs, cottage cheese and vitamins.
							<br>
							<b>Lunch</b> – Chicken or Fish, or Beef patty, small salad, option eggs and cottage cheese. Or Tuna.
							<br>
							<b>Mid afternoon snack</b> – Can of Tuna or chicken breasts or protein drink.
							<br>
							<b>Dinner</b> -Steak, or Chicken with small salad, cottage cheese and sugar free jello and vegetables.
							<br>
							<b>Bedtime</b> – Cheese omelet
							</p>
							<p>
							This was considered high protein, low carbohydrate and the fats came from eggs and cheese and for some of the other people, extra rich milk or cream. In fact we were supposed to mix our protein with cream which was the Rheo H. Blair theory.

							Rheo had his own supplements which were expensive but were deemed to get results for bodybuilders like Larry Scott and Don Howarth to name a couple.

							</p>
				</span>
					<button onclick="myFunction2()" id="myBtn2"style="margin-left:310px;font-size:20px;" >View All</button>
					<script>
				function myFunction2() {
					var dot2 = document.getElementById("dot2");
					var moreText = document.getElementById("more2");
					var btnText = document.getElementById("myBtn2");

				if (dot2.style.display === "none") {
					dot2.style.display = "inline";
					btnText.innerHTML = "View All"; 
					moreText.style.display = "none";
				} 
				else {
					dot2.style.display = "none";
					btnText.innerHTML = "View less"; 
					moreText.style.display = "inline";
				}
				}
			</script>			
								
					</td>
				</tr>
				<tr>
					<td style="padding:20px;text-align:justify;font-size:20px;margin-right:36px;width:760px;">
						<h2>SIX EFFECTIVE HOME REMEDIES FOR NECK PAIN RELIEF</h2>
						<p>
						These home remedies may help you find effective neck pain relief.	
						</p>
						
						<span id="dot3"></span><span id="more3">
						
						<p>
						Nothing throws a wrench in your plans like waking up with a stiff neck. This unfortunate sensation is typically associated with trouble moving the head side to side, and can be accompanied by headache, shoulder, upper back, or arm pain. What’s worse, neck stiffness and soreness can come about as the result of many normal life activities.

						Read on to discover some common causes of a stiff neck, conventional, self-care remedies for mild neck pain, and how the CBDMEDIC™ line by Charlotte’s Web™ may help you find effective neck pain relief.
						</p>
						<h3>COMMON NECK PAIN CAUSES</h3>
						<p>
						Any number of common, day-to-day activities can leave your neck in pain. Below are some unfortunately common neck pain causes.
						</p>
						<ul>
						<li><b>Sleeping in an unusual position, as we all know,</b>
						can cause neck pain that lasts all day or longer.</li>
						<li><b>“Text Neck”</b> is far too common in our modern society. Individuals slouch in unhealthy postures while looking at their computer screens or smartphones.</li>
						<li><b>Driving </b>or long periods in the car can cause stiffness in your neck and back because of the prolonged seated position</li>
						<li><b>Stress and anxiety</b> can cause tension to build up in the neck and shoulders.</li>
						<li><b>Repeated motions </b> of the head can also cause neck stiffness. This can occur after activities like doing the crawl stroke in swimming or manual labor at work or home.
						</li>
						</ul>
						<h3>HOME REMEDIES FOR NECK PAIN</h3>
						<p>
						Remember that these options are not medical treatments. Please talk to your doctor to ensure there is no deeper condition if you experience persistent, debilitating pain.

						Here are a few simple methods for acute neck pain relief that can be done at home:
						</p>
						<h3>Cold and Heat Therapy</h3>
						<p>
						For new pain or injury, use cold therapy. Use an ice pack on a sore neck for the first 48 to 72 hours after pain starts in intervals of 15 minutes to 30 minutes, repeating several times a day.

						For chronic pain, use heat therapy. Mild stiffness and pain can often be relieved with around 15 to 20 minutes of heat therapy. For more intense pain, use longer sessions, like a warm bath or warm compress, lasting between 30 minutes and two hours.
						</p>
						<h3>Neck Pain Relief Exercise & Stretches</h3>
						<p>
						Your neck is made up of muscles and can benefit from stretching, just like many other areas of your body. Many helpful neck stretches can be done sitting or standing, making them easy to accomplish during even a busy day.
						</p>
						<h3>Over-the-Counter Medications</h3>
						<p>
						NSAIDs, Nonsteroidal anti-inflammatory drugs, which reduce inflammation, are common neck pain relief products recommended to treat neck stiffness and soreness. Types of NSAIDs include ibuprofen (brand names Advil, Motrin) and naproxen (brand name Naprosyn).

						Even though these drugs are widely used, they can still come with side effects or interactions with other medications. Always carefully read labels and consult a doctor before taking something new.
						</p>
												
												
						
						
					</span>
					<button onclick="myFunction3()" id="myBtn3"style="margin-left:310px;font-size:20px;" >View All</button>
					<script>
				function myFunction3() {
					var dot3 = document.getElementById("dot3");
					var moreText = document.getElementById("more3");
					var btnText = document.getElementById("myBtn3");

				if (dot3.style.display === "none") {
					dot3.style.display = "inline";
					btnText.innerHTML = "View All"; 
					moreText.style.display = "none";
				} 
				else {
					dot3.style.display = "none";
					btnText.innerHTML = "View less"; 
					moreText.style.display = "inline";
				}
				}
			</script>				
						
						
					</td>
				</tr>
				<tr>
					<td style="padding:20px;text-align:justify;font-size:20px;margin-right:36px;width:760px;">
						<h2>ARNOLD SCHWARZENEGGER’S ULTIMATE ARMS WORKOUT ROUTINES</h2>
						<p>This is the training regimen that 'The Oak' used in his prime.</p>
						<span id="dot4"></span><span id="more4">
						
						<p>
						Sure, Arnold Schwarzenegger’s arms routine helped create the physique that is still considered by many to be bodybuilding’s greatest ever, but knocking it out three days a week for the majority of us is a bit, well, excessive. Here’s some advice for making the routine more feasible: Arnold Schwarzenegger is a one-in-a-million kind of guy, if not a once-in-a-lifetime phenomenon.

						“No kidding,” you say. “Why are you telling us something we’ve known since we had muscles worth flexing?” By overstating the painfully obvious, we hope to make the point that as a uniquely gifted athlete, Arnold was capable of doing things in a gym that most mere mortals might find overtaxing if not damn near impossible.

						Even in advanced athletes, symptoms of overtraining, including chronic fatigue and injury, can result from trying to follow Arnold’s workouts to a tee.

						That being said, we believe that all bodybuilders—young and old, novice and pro—can benefit by following the principles presented by Arnold in this piece. Because bodybuilding is such an individual activity, it only makes sense that you should tailor every routine to your personal capabilities and goals anyway.

						Unless you’re at an advanced level, we advise you not to try to emulate the volume of work Arnold did for biceps. If you’re a beginner or an intermediate trainee, do two or three sets per exercise from his offseason routine and see how it goes. If you’re an advanced competitive bodybuilder, we recommend that you confine yourself to performing three of the five pre-contest sets.
						</p>
						<h3>ARNOLD’S OFF-SEASON ROUTINE</h3>
						<p>
						When bulking up, Schwarzenegger would follow a six-day split, hitting arms twice per week. Incredibly, each arm workout would take a full two hours: 45 minutes for triceps, 45 minutes for biceps and 30 minutes for forearms, in that order. “The severity of using absolute maximum poundage for each exercise of this super- bombing routine requires three to four days of rest between arm workouts so that full recuperation and maximum growth occur,” Schwarzenegger instructs. Breaking down curls into two main categories—mass building and isolation—Schwarzenegger chose two exercises from each group to ensure that he would build not just mass, but quality mass.
						</p>
						<h3>ARNOLD’S PRE-CONTEST ROUTINE</h3>
						<p>
						“Three months before a contest, I would change my arm routine completely,” says the Oak. “My goal now was to zoom in on chiseling in all the cuts and shape possible. I’d cut down on my sets and go to a superset style of training and try to get a maximum pump each workout.”

						During this period, Schwarzenegger would shift into overdrive, training each entire arm in superset fashion with little or no rest between the supersets. Being that he was now working on a six-day double split (two workouts per day, six days per week), he’d be blasting his arms with this grueling routine three times each week. And you thought his mass-building routine was a bear!

						But there’s more. “When I was zeroing in for a big contest, I’d stand in front of the mirror between sets for biceps and flex my arms, holding the flex for a minute, maybe two, even three minutes. I’d do that because contest posing is hard. Having muscle is one thing, but having control over it and endurance are two others.”
						</p>
						
						
						</span>
					<button onclick="myFunction4()" id="myBtn4"style="margin-left:310px;font-size:20px;" >View All</button>
					<script>
				function myFunction4() {
					var dot4 = document.getElementById("dot4");
					var moreText = document.getElementById("more4");
					var btnText = document.getElementById("myBtn4");

				if (dot4.style.display === "none") {
					dot4.style.display = "inline";
					btnText.innerHTML = "View All"; 
					moreText.style.display = "none";
				} 
				else {
					dot4.style.display = "none";
					btnText.innerHTML = "View less"; 
					moreText.style.display = "inline";
				}
				}
			</script>				
					</td>
				</tr>
				<tr>
					<td style="padding:20px;text-align:justify;font-size:20px;margin-right:36px;width:760px;">
						<h2>6 TWEAKS TO IMMEDIATELY TUNE UP YOUR PUSHUP TECHNIQUE</h2>
						<p>Still having problems with pushups? Here’s why and what to do about it.</p>
						<span id="dot5"></span><span id="more5">
						<p>
						Often, the simplest exercises seem the hardest. Calisthenic movements like the pushup and pullup are notoriously difficult, even for many people who can throw around a barbell like no one’s business. There’s just something about moving one’s own bodyweight that gets real tricky.

						That said, if you can’t do a proper push-up, you’re definitely not alone. Luckily, there’s no shortage of ways to fix pushup form — here are the six most common pushup mistakes and how to fix them.
						</p>
						<h3>Your Spine Hyperextends</h3>
						<p>If your spine hyperextends then your core isn’t strong enough for standard pushups.</p>
						<p>
						The goal in a push up is to maintain a rigid body with an imaginary line from your head to your toes, says Miriam Alicea, NASM CPT, NASM CES and MYXfitness coach.

						“When the spine collapses or hyperextends, it’s usually not a result of upper body strength,” she says. “Instead, it’s usually due to insufficient core strength and the ability to stabilize the lumbopelvic region and keep it neutral throughout the motion.”

						Tight hip flexors can also pull your hips into anterior pelvic tilt, which therefore makes proper glute training and engagement a key player in good push-up form, she says.
						</p>
						<b>Fix it:</b> When doing push-ups, cue yourself with “tuck the tailbone” and “close the rib cage.” These cues should remind you of proper alignment, Alicea says. If these cues don’t work, lengthening the hip flexors, along with strengthening the core and glute muscles, will help you establish proper core control and avoid hyperextension during push-ups.

						Try core-strengthening exercises such as planks, bird dogs, dead bugs and hollow body holds; glute-strengthening exercises such as single-leg deadlifts, hip thrusts and good mornings.
						</p>
						<h3>Your Hips Sink</h3>
						<p>
						If your hips sink then you should probably work on hip extension and core control.
						</p>
						<p>
						<b>Think:</b> “Tight gut, tight butt.” During every pushup, you should maintain complete control of your core and lumbar spine, and this means bracing the core and keeping your hips extended by engaging your glutes.

						Saggy-butt pushups make you look like you’re doing the worm. Let’s not do that — fix this not for your ego, but for your poor, beaten-up lower back.
						</p>
						<p>
						<b>Fix it:</b> Core exercises should help correct this pushup mistake, especially isometric ones. Yep, that means planks and hollow body holds. For your glutes, try any and all variations of hip thrusts and hip bridges, as well as squeezing a yoga block or towel in between your thighs when practicing push-ups.
						</p>
						
						</span>
					<button onclick="myFunction5()" id="myBtn5"style="margin-left:310px;font-size:20px;" >View All</button>
					<script>
					function myFunction5() {
						var dot5 = document.getElementById("dot5");
						var moreText = document.getElementById("more5");
						var btnText = document.getElementById("myBtn5");

					if (dot5.style.display === "none") {
						dot5.style.display = "inline";
						btnText.innerHTML = "View All"; 
						moreText.style.display = "none";
					} 
					else {
						dot5.style.display = "none";
						btnText.innerHTML = "View less"; 
						moreText.style.display = "inline";
					}
					}
					</script>				
							
					</td>
				</tr>

			</table>
			
			
		


                </div>
            
            </div> 
            <hr>
        </section>
        
        <section class="contain section2">
            <div class="heading">
                <h2>Need to explore more? Click on the numbers!</h2>
            </div>
            <div class="container2">
                <div class="videos">
                    <div class="vidname">
                       
			
                    <img src="./assets/N1.png"  style="margin-left:37px;" alt="Numbers" usemap="#num">

                    <map name="num">
                        <area shape="circle" coords="137,133,100" alt="One" href="https://en.wikipedia.org/wiki/Human_nutrition" target="_blank">
                        <area shape="circle" coords="671,133,100" alt="Two" href="https://en.wikipedia.org/wiki/Diet_(nutrition)" target="_blank">
                        <area shape="circle" coords="401,295,100" alt="Three" href="https://en.wikipedia.org/wiki/Nutritional_science" target="_blank">
                        <area shape="circle" coords="137,466,100" alt="Four" href="https://en.wikipedia.org/wiki/Ingestion" target="_blank">
                        <area shape="circle" coords="671,466,100" alt="Five" href="https://en.wikipedia.org/wiki/Diet_(nutrition)" target="_blank">
                    </map>

                


            </div>
        </section>
		<br><br><br>

	<section class="section-2">
        <div class="row-1">
          <div class="colum-1">
            <div class="card">
              <div>
                <img src="./assets/F3.jpg">
            
                <h3>Chethiya Wadugodapitiya</h3>
                <h3>Trainer and Nutritionist</h3>
                <p>Chethiya is the owner of CW Nutrition & Fitness where he provides workout routines geared to your fitness level. He also provides consultation for healthy and easy recipes.</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy1">
                <input type="text"  class ="id" name="id" value="dit001" readonly style="display: none;">
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
                <img src="./assets/F5.jpg" width="100px" height="100px">
            
                <h3>Tiron Wickramasinghe</h3>
                  <h3>Trainer and Nutritionist</h3>
                <p>Tiron is a Certified Fitness Trainer (International Sports Science Association - USA), has a certificate in bodybuilding from the Bodybuilding Federation and Fitness Sri Lanka</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy2">
                <input type="text"  class ="id" name="id" value="dit002" readonly style="display: none;">
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
            
                <h3>DDaniel Thambyrajah</h3>
                  <h3>Trainer and Nutritionist</h3>
                <p>Daniel is a NESTA certified Group Exercise Instructor, a IYCA Resistance Band Instructor and is a SCW Fitness certified Boxing Instructor.</p>
                <ul>
                  <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <form action="phy.php" method="post" id="phy3">
                <input type="text"  class ="id" name="id" value="dit003" readonly style="display: none;">
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