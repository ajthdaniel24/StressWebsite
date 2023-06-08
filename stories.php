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
    <title>Sucess Stories</title>

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
                        <a href="./aboutus.php">About Us</a>
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
                    <h2>Success Stories</h2>
                </div>
            <div class="container3">   
                <div class="words">
					
			<table style="margin-right:95px;">
				<tr style="background-color:#BCE954;">
					<td style="padding:20px;">
						<h1>Harry's story: overcoming severe depression</h1>
						<p>
						Sitting at my desk as I try to start this story, I'm struggling to decide where to begin and I can feel it coming on. Shivers up my arms and into my neck, a heavy chest, now my legs start, I'm not sure if I'm hot or cold, my chest gets heavier as my body decides whether to fight or take flight.
						</p>
						<span id="dots"></span><span id="more">
						
			
								
								
								<p>
								Luckily, I'm aware of what's going on; my head remains calm as I write these words. Letting myself become overcome with the anxiety that is taking hold of my body, the natural response I feel when confronted with difficult tasks or stress, is not going to happen. I'd like to show that if they're spotted early enough, mental health problems can be managed and even prevented.

Dea								ling with depression is an everyday struggle. It's definitely true that some days are worse than others, but I've learned to manage it, to become aware of my symptoms, my triggers, and to remain in control.

How								ever, this has not always been the case. It's only of late that I have come to understand what's going on inside and the relationship between my body and mind. Awareness is the key to prevention and that is why I'd like to share with you my story of battling depression. I don't want anyone else to feel the way I have done, to feel trapped and isolated by mental health problems and to not be able to see a light at the end of the tunnel.
								</p>
							
								<h2>My depression</h2>
								<p>
									You might have seen my name before, at the bottom of emails from the Foundation's Events Team. You may have even spoken to me on the phone or maybe we've exchanged emails. 

									I'm Harry, currently working at the Mental Health Foundation as the Events and Community Officer and much of the work done on launching our Curry & Chaat fundraiser, including two of the recipes, is of my doing.

									Although I'm working at the Mental Health Foundation, I am still a student, currently on a period of temporary withdrawal from my studies due to my mental health problems. Looking back, I can see that I have battled with depression for a long time, but it was not until university that it took an uncontrollable hold of my life.

									Everybody has bad days but depression can make every day a bad day. I would spend days on end in bed, unwilling, or even unable to move, for depression can be so debilitating that it becomes physically disabling.

									I would hardly eat or drink, refuse to socialise, want to escape but not be able to as there was nowhere for me to go, knowing that I would always have to return to my room at the end of the day.

									It's a vicious cycle that, without help, is almost impossible to break.
								</p>
								<h2> Recognising that I needed help </h2>
								<p>
									The first big step for me was accepting, or as is often more difficult, realising that I was mentally unwell. It took me a long time to do this. The days I spent lying in my bedroom on my year abroad, telling myself I was 'just bored', was me refusing to accept the reality that was my mental ill health. 

									Likewise, in my final year, when my depression reached its peak, I would progressively miss more and more lectures and seminars, leave social outings early or skip them altogether, spend more and more time alone in self-imposed isolation, and tell myself that it was just because I'm introverted, or that I was 'tired'. And I was tired, but not for lack of sleep; this was actually a symptom of my depression.
								</p>
								<h2>Therapy has changed me as a person</h2>
								<p>
									I self-referred for cognitive behavioural therapy (CBT) soon after leaving university. This was such an important step for me. Simply by removing myself from my university studies, I began to see a slight improvement in my mental health, but without CBT, I would not be where I am today.

									CBT helped me understand what was causing my depression and that withdrawing from society and wallowing in self-pity was only making me feel worse. Changing my attitude and adopting a positive outlook for the future, seeing myself in a position where I understood my depression and where it did not have an uncontrollable impact on my day-to-day life, was life-changing. 

									Actively seeking to get mentally healthier and focusing on rebuilding a sense of routine in my life (which is possibly the most important aspect in allowing yourself to maintain good mental health) allowed me to get into a position where I was looking for part-time work whilst on leave from university; work that I found at the Mental Health Foundation.
								</p>
								<h2>No one should struggle alone</h2>
								<p>
									There are so many other people just like me who struggle with depression and that is why it is so important to raise awareness in order to prevent others from reaching the same horrible depths that I did. The work the Mental Health Foundation does in this regard is vital.

									No one should face mental health problems alone and this is why I believe that Curry & Chaat is such an amazing thing. If we all talk about our mental health, we'll break down the stigma and help others to become more aware of the onset of mental health problems and as a result people will feel more inclined to seek help when they start to experience the symptoms.

									I want to help create a world with good mental health for all and I hope my story has been helpful or even inspiring.
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
				<tr style="background-color:#48D1CC;">
					<td style="padding:20px;">
						<h1>Kelly's story: Overcoming depression</h1>
						<p>
						I have suffered from depression and anxiety since I was a teenager. As a teenager I had no idea that I had depression. I kept my feelings of deep sadness, loneliness and the feeling of being worthless to myself for many years. I coped with these feelings by cutting my arms and by keeping a diary of my thoughts.
						</p>

						<span id="dot1"></span><span id="more1">
								
								<p>
								By the time I had reached the end of University I had taken an overdose of tablets which was a cry of desperation. I was hospitalised for the night but chose to discharge myself. It was only at this time that my family and friends began to learn of my illness. Still, I chose to try and hide it from everyone. I felt that there was something wrong with me and I was ashamed of the way I was.
								</p>
								
								
								<p>
								After losing my job and a good friend I made through university I hit rock bottom again. I managed to pick myself up again by volunteering in an orphanage in Romania. This gave me a sense of self worth again and allowed me to see that I was wasting so many opportunities in life.
								</p>
								
								
								<p>
								Eventually I managed to get a job again as a teacher and was given anti-depressants by the doctor which I felt helped me for a short time. For the next 10 years or so I tried various anti-depressants and seemed to be on countless waiting lists to see a counsellor. Still ashamed of the way I was I kept all this hidden from my family as best I could.
								</p>
								
								
								<p>
								I began to suffer from panic attacks at work and when I went out and it was impossible to hide my illness from everyone. After what I consider to be a mental breakdown I knew things had to change. In the last couple of years I have found the courage to talk to my friends about my depression and I have been so fortunate to have such amazing friends that have seen me through the difficult times, never judged me and encouraged me to seek help.
								</p>
								
								
								<p>
								After feeling let down from the NHS I decided to pay privately and saw a psychiatrist who has diagnosed me with moderate depression and anxiety. I am on two different anti-depressants and see a private counsellor each week. I still get scared of having depression as I know it will always be there but I am finally beginning to accept it and no longer feel ashamed of the illness.
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
				<tr style="background-color:#BCE954;">
					<td style="padding:20px;">
						<h1>Living With Depression: Allen's Success Story</h1>
						<p>
							Depression can be an isolating illness, but there are things you can do to feel better. Find out how one man successfully manages his depression and lives a full and happy life.
						</p>
						
						<span id="dot2"></span><span id="more2">
						
							
							<p>
							Allen Doederlein was diagnosed with major depressive disorder when he was 21. After four years of depression symptoms, the diagnosis helped explain his persistent feelings of hopelessness, agitation, and anxiety, as well as his sleep difficulties.
							</p>
							
							<p>
							Doederlein, who now works as the executive director for external affairs at the Depression and Bipolar Support Alliance in Chicago, was in denial that he was depressed for many years.
							</p>
							
							<p>
							"I think I might have been diagnosed sooner, but I found it difficult to be completely honest with psychiatrists and even with myself in the first several years I was in need of help," he says. "I believed I could 'shake it off’ or ‘snap out of it.’"
							</p>
							
							<p>
							When Doederlein was finally diagnosed, he was fortunate to have a supportive and understanding family. Other family members had been diagnosed with major depressive disorder, so Doederlein's family had some experience with dealing with a depression diagnosis.
							</p>
							
							<h2>Living With Depression</h2>
							
							<p>Doederlein is coping with depression through a combination of medication, talk therapy, and lifestyle changes, but living with this disorder is not without its challenges.
							<br><br>
							Over the years, Doederlein has learned to rely on the following strategies to help manage his depression:
							<br><br>
							<b>Medication.</b> Doederlein takes antidepressant medications, which are among the most common depression treatments. "I see my psychiatrist at least once a year to deal with medication management," he says.
							<br><br>
							<b>Talk therapy.</b> When Doederlein is experiencing trouble with depression, he participates in talk therapy, which can help people understand what triggers their depression and learn new ways to deal with it. "I may see a doctor or therapist for talk therapy as [often] as once a week," he says.
							<br><br>
							<b>Support.</b> "My family and friends have been especially important in helping me avoid isolation, which is one of my tendencies when I am experiencing a depressive episode," says Doederlein. He says that when he shows signs of feeling isolated, his support network will urge him to get out of the house just to take a walk, get coffee, or go to the grocery store. "Those small things, believe it or not, are the first steps to taking action and feeling better," says Doederlein.
							<br><br>
							<b>Structure.</b> Doederlein says that having structured plans to get out and be with people helps him manage his depression by avoiding isolation and inactivity. He schedules regular coffee dates, attends weight-loss meetings, takes classes, and signs up to volunteer so that he has an obligation to deal with others.
							<br><br>
							<b>Exercise.</b> Body movement is one of the best medicines for depression, according to Doederlein. "It doesn't have to be a trip to the gym or even a brisk walk," he says. "Just a walk around the block can start the positive changes." At one low period when he was struggling with depression, Doederlein and a friend at work began taking their meetings outside. "[That] really helped me — my mood improved after a little activity and a little sunshine."
							<br><br>
							Doederlein wants people to understand that depression is an illness, and it does not define who a person is.
							<br><br>
							"I, like many people who live with a mood disorder such as depression, am one of the most joyous, happy people you could find," he says. "I have an illness that can blur or distort my feelings, but ultimately, when I am well, I am full of happiness."
							<br><br>
							Doederlein's advice for others with depression is to learn to accept that you have an illness, and then strive to take steps to help you manage it.
							<br><br>
							"You have to watch certain things, like getting enough sleep and avoiding situations that you know will create undue stress," he says. "But with the right balance of medication, talk therapy, peer support, and a wellness plan, most people with depression can feel very well and lead normal, productive, happy lives.”

							<br><br>
							</P>
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
				<tr style="background-color:#48D1CC;">
					<td style="padding:20px;">
						<h1>Bianca's story:Overcoming depression</h1>
						<p>
							 Anxiety for me came out of nowhere and hit me like a ton of bricks. 
						</p>
						
						<span id="dot3"></span><span id="more3">
						
						<p>
							It's a long story but it does have a happy ending. I've never shared it before but I'm ready to now. 
							<br><br>
							Anxiety for me came out of nowhere and hit me like a ton of bricks. It just started with a jitteriness and loss of appetite, constantly sweaty palms and an elevated heart rate I could feel. I started throwing up in the morning at the thought of going to work. I didn't know about anxiety then and when I tried to explain it I would say I was a bit sick. My work was a pretty high pressure sales job and sick days weren't really a thing so I just got on with it.  
							<br><br>
							I was losing weight fast too, but I had some weight to lose so I wasn't worried. 
							<br><br>
							Then the panic attacks started. For me everything centred around my heart. It would beat super-fast without any trigger and that alone would scare me into a nasty cycle. 
							<br><br>
							The second time it happened I was scared and I called an ambulance. They took me to the ER as my heart was at 180bpm resting and that was the first time I encountered something I think is a massive problem...  I don't even know with what, society, body image, medical attitude whatever. I saw the ER doctor who dismissed my concerns and I was sent home. 
							<br><br>
							The anxiety got worse, now I was terrified of another panic attack. Within a week I quit my job, too scared I'd have another attack while driving. (This was to be the only period I was unemployed since I was old enough to work until I went into labour with my little boy) so I lost the independence driving allows too. I lost another 10kg. My family were whispering about eating disorders. I overheard my husband telling them "she's throwing up again" my parents neighbour approached me to tell me I was worrying them and they'd told him they "just couldn't get me to eat." 
							<br><br>
							I went to my GP. The first thing he told me was how great I looked. I was by this point underweight. I told him what had been happening and how I felt and he said "but you look so good, you look like a supermodel" again I was apparently being ungrateful for the ‘gift’ I'd been given. 
							<br><br>
							After some pressure from my husband he took some blood and sent me on my way. He later called to tell me I didn't seem dangerously malnourished and my thyroid function was fine and I should take some vitamins. Still nobody had mentioned anxiety, I felt like some kind of fraud because I wasn't malnourished must mean I was exaggerating not being able to eat. I was broken. I thought that was it. I was just going to feel like this forever.  
							<br><br>
							My uncle said he knew a doctor that would at least "give me something for it" and he took me there. He was right. The doctor didn't say much, it was pretty clear he thought I was drug seeking but he was OK with that so he gave me medication and sent me on my way. They didn't do very much. I never remember feeling normal again while I took them. 
							<br><br>
							I lost more weight and people were making comments about how my bones stuck out and I'd gone too far. People would stare and make comments to each other if I was ever out and I get why. I looked like a junky. My hair was thin, my bones stuck out through my clothes, I had dark stressed eyes and I was jittery. This had been going on for around six months now and by now it had taken my independence, my career, my health and a lot of my friendships. 
							<br><br>
							Then one night I decided to drink some wine and I got a bit drunk and for the first time I actually felt relaxed. It was so good that the next day I had some more and it worked again and again and again. What followed was a downward spiral that would last about three years. During that time my marriage ended and so did most of my relationships. No one had signed up for this. I was an absolute mess making one bad choice after another. 
							<br><br>
							I finally went to a walk-in GP to try and get help for my drinking problem and was finally put into therapy. That is where I learnt about anxiety and panic attacks and managed to break my dependence on alcohol. I also got the coping techniques to get my anxiety under control naturally. 
							<br><br>
							That all happened almost 10 years ago and my life now is blessed with a very good man and a beautiful boy. I got some of my old friendships back on track and I made some new ones. For where I am now I'm thankful my life took me here but no one should have to go through all that. Most of it didn't need to happen and I still don't trust doctors even now. 
							<br><br>
							Anyway if you've made it this far thank you for taking the time to let me tell you my story. I'm sure it's not unique but it is mine and I've never told it before so thank you. 
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
				<tr style="background-color:#BCE954;">
					<td style="padding:20px;">
						<h1>Chris's story:Overcoming depression</h1>
						<p>
							I hope that by sharing my story, I can show that there is hope and that it is possible to achieve amazing things, even when living with depression. 
						</p>
						
						<span id="dot4"></span><span id="more4">
						
						<p>
						I am a 54 year old male and I have suffered from depression since my teens and was in active alcohol addiction from the age of 15 until I was 51. I have now been sober for over 31 months. I was a civil engineer for over 30 years, but lost my job on medical grounds in 2014 whilst I was in rehab. In addition to the clinical depression, upon completing the rehab programme, I learnt that I needed both of my hips replaced due to osteoarthritis.
						<br><br>
						The surgeries were carried out last year. On the weekend of 5-6 March 2016, I completed the CBR100 Challenge (a 100km walk around Canberra) in 27 hours 26 min. This was the first of a series of events that I am planning to do this year to raise funds for Beyond Blue, which may include the Canberra Times 10km run in September and the Sydney to the Gong Bike a Ride in November.
						<br><br>
						I have created a group which is aimed at getting persons with lived experience (or their carers) involved in exercise. I have found that exercise has been my default recovery mechanism since my teens and was important during my time in rehab.
						<br><br>
						I am a consumer representative on three committees and involved in a local Health Consumer Network. I have recently completed a Cert IV in Mental Health/Drug & Alcohol studies. I am currently studying for a Cert IV in Fitness and hope to take personal training into rehab centres to help facilitate recovery. I intend to then study for a Diploma in either Drug & Alcohol or Mental Health Studies and (hopefully) a degree in psychology, but I need a job first! I currently receive salary continuance insurance but I am very fearful of returning to the workforce and suffering a relapse and losing all income! My hope is to get work in a rehab facility and to use my fitness training experience to facilitate recovery. I recently completed workplace experience in a mental health service and exercise played a major role in their programme.
						<br><br>
						I hope that by sharing my story, I can show that there is hope and that it is possible to achieve amazing things, even when living with depression.
						<br><br>
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
			
				<tr style="background-color:#48D1CC;">
					<td style="padding:20px;">
						<h1>Gervase's story:Overcoming depression</h1>
						<p>
						Gervase struggled with depression twice in her life — both dealt with life and death.
						</p>
						
						<span id="dot7"></span><span id="more7">
						
						<p>
						The first time was after her brother died, and the second was after she gave birth to a child, who is now 14 months old. Her brother’s death resonated with her entire family, but it really hit her hard. It was a sign that everything doesn’t last forever, she said.
						<br><br>
						“The death of my brother changed how I prioritized people and events moving forward," Gervase wrote in a blog post. "I skimmed the fat from my life and made peace with my own demons."
						<br><br>
						Then, she met Kevin, and the two had a child in 2013 — Aria Rose. Her daughter's birth also spawned depression for Gervase. It wasn’t so much having a daughter that made her depressed, but rather her having to re-evaluate who she was as a person. She could no longer be the partier she once was. She had to be responsible.
						<br><br>
						</p>
						
						</span>
						<button onclick="myFunction7()" id="myBtn7"style="margin-left:310px;font-size:20px;" >View All</button>
						<script>
						function myFunction7() {
							var dot7 = document.getElementById("dot7");
							var moreText = document.getElementById("more7");
							var btnText = document.getElementById("myBtn7");

						if (dot7.style.display === "none") {
							dot7.style.display = "inline";
							btnText.innerHTML = "View All"; 
							moreText.style.display = "none";
						} 
						else {
							dot7.style.display = "none";
							btnText.innerHTML = "View less"; 
							moreText.style.display = "inline";
						}
						}
						</script>		
					</td>
				</tr>
				<tr style="background-color:#BCE954;">
					<td style="padding:20px;">
						<h1>My Success Story with overcoming Depression/Bipolar Disorder</h1>
						<p>
							Hi Everyone, I am Nancy from Ontario Canada. I am 33 years old. I am new to the forum. My only reason of becoming a member is to share my success story and encourage you if you are suffering from Bipolar or other mental illness. My bipolar disorder was/is really really severe, but if I am doing so well right now, I think anyone is potentially treatable.
						</p>
						
						<span id="dot8"></span><span id="more8">
						
						<p>
						When I was an infant, I was one of those babies that cry all the time. When I was a kid, I was described as very shy and introverted. I had a lot of phobias. My mental health got worse by the time I was a teenager. I was very sensitive and neurotic. It would take me forever to get over a negative encounter. Between 16 to 18, for countless nights, I would stay awake for the entire night for no major reason. I always had this enormous amount of mental energy. The pace of my thoughts was always very fast. When I turned 18, I started to date someone for the first time in my life. At the time, it was very special; I was happy, excited and extremely obsessed. When the relationship ended after just 4 weeks, the clinical symptoms of depression began to unfold. The very first symptom was insomnia. No matter what I did, how I tried, I could not fall asleep. Part of my brain was really tired and exhausted and I was yearning all the time, but the rest of my brain was wild awake. The pace of my thoughts was firing like a machine gun. Even taking 5 sleeping pills before bedtime, I couldn’t even get a nap. There were a lot of physical symptoms, I felt like my heart was beating fast, I had this huge headache 24/7, and a strong phobic feeling over nothing. Two weeks without any sleep, I started to have suicidal desires. Four weeks of not getting any sleep, the nature changed. Every car that drove towards me, I had this strong impulse of jumping in front of it. Every time using the subway or walking across the highway bridge, I would fantasize about jumping off. People described it as a “suicidal ideologies, or suicidal thoughts”, but it was more like a need to die, a biological need. It was even more powerful than the needs for food and water.
						<br><br>

						At the time, I was in grade 12, many people in my school heard about what happened to me. Prior to my depression, I was a very negative and judgemental person. I really despised people who resorted to suicide. Ironically, that was the exact reaction I received from people in my life. No one understood why I would kill myself for someone whom I dated for only 4 weeks. My parents tried everything to help me or talk me out of my depression. But when I saw that they were down on their knees begging me not to hurt myself, I told them that I hated them because they brought me into this world and I was not supposed to be born in the first place. At that time, I felt like I had lost the ability to love and sympathize. I was devoid of any types of human emotions. I was a psychopath. I even thought about killing my parents because they were protective, they were watching my every move. Now that I hear stories of mentally ill people committing horrible crimes, I can relate to their mentality.

						<br><br>
						The morning of June 20th, 2003, I got up and headed straight to the balcony. The door handle was wrapped by layers of wires, my parents had already done everything they could to prevent things from happening. I tricked my dad by telling him that I wanted to get some fresh air outside. Later on he said that for some reason, his mind was a blur at that moment and he had no idea why he would believe me whole-heartedly. So he went to the storage room to take out a pair of pliers and he started to cut the wires loose. After the door was open, I saw a chair and I hopped onto a chair and crossed over to the other side of the fence without any hesitation. He was able to catch a small part of my pants, but he wasn’t strong enough to pull me up. Thankfully, he changed my position in the air, so instead of landing on my head or my neck, I landed on my back and broke my spinal cord at the T12, L1 and L2 level. I was conscious and I remember the exact second when all the sensations and movement were gone from my waist below. I knew I was paralyzed for good but I was surprised that I was nowhere near death after falling from the 8th floor! It was a pure miracle that I didn’t sustain a brain injury or any internal traumas.

						<br><br>
						Three days later, I was seen by my psychiatrist for the first time. He began to put me on a whole bunch of medications. The amazing thing was, I started to feel sleepy and drowsy after 2 weeks being on these medications. I was able to fall asleep on the third week. As the pattern of my sleep was gradually restored, my symptoms of depression were dramatically improved and by the time I was discharged from the rehab hospital, I realized that my depression was treatable. If I had been medicated in time, I would never have jumped. I asked myself, how would I be able to live with this regret for the rest of my life? By the time I was out of rehab, I was already 60 lbs heavier. My mom took me to a barber and got me a really short haircut, I could barely recognize myself in the mirror. Prior to being in a wheelchair, when I saw someone with a disability, I just thought their legs don’t work. But in reality, there are so many other medical complications. A spinal cord injury would also affect a person’s bladder and bowel function, there is also the risk of osteoporosis, blood clots, pressure sore, and what bothered me the most was nerve pain. I had to take strong pain killers at night to fall asleep.
						<br><br>
						As expected, for the following four years of my life, I was living in hell. I had no self-esteem and no hope for the future. I was filled with regrets, resentment and hate. I eventually went back to school, but it was really hard being one of the few people with a physical disability. On top of that, I had to face people from my high school, who knew about my past. I was jealous of my classmates who had friends, who were invited to parties. I was just a lonely loser. This time, I had a legit reason to be depressed. In 2006, I was once again admitted into a psychiatric facility after not sleeping for 7 days straight. I was hallucinating, delusional and insane while I was in the hospital. After observing my behaviors and symptoms I was then formally diagnosed with bipolar disorder. When I first got injured in 2003, the doctor thought I had depression, but they didn't know that I was actually manic before my depression (during my 4 weeks romance, I was extremely manic and obsessed). During the three years post injured I was placed on anti-depressant, which was the trigger of my second episode of bipolar disorder.
						<br><br>
						I later on learned that, for people with bipolar disorder, we are born up to 20 percent more neurons in our brain compared to an average person, and those neural activities are particularly excitable, which explains why I was always overflowing with mental energy even when I was a child. In 2007, my psychiatrist switched me to a new medication for my condition. It was Lithium Carbonate, a predominate treatment for bipolar patients. This medication was like poison to me. My acnes were so bad that my face was literally disfigured. Kids in public would get scared when they saw my face! I had sores breaking out everywhere. To cope with all my stress, I turned to eating and I was really overweight at that time. I was really depressed to a point where I wanted to give up again. But what really prevented me from ending my life this time was seeing the suffering I had caused on my parents. Also, I had become a Christian at that point. Though my faith was so small, I believed that God would intervene eventually.

						<br><br>
						In 2007, my doctor switched me to a medication Epival, it was actually a predominant treatment for Epilepsy. After a month being on Epival, I woke up one day and felt like a completely different person. I was just happier. At first I was confused and I didn’t know why. As I continued to take that medication, my mental health was getting better and better, and for the first time in 22 years, I realized what it was like to be a “normal” human being. The way I experienced my inner state, the experience of being a human, was completely different compared to ever before! That was the major turning point in my life.
						<br><br>

						It's been 11 years, I have not had another psychological breakdown since (no matter how tough life gets). More amazingly, my personality changed. I am now a very outgoing and positive person, the quality of my sleep is superb, I don’t have phobias anymore, and my creativities, artistic and musical abilities have also been enhanced. I am able to reach my potential as a human being because of the right medication. My life now is beautiful. Though I have to use a manual wheelchair to get around, I am a very happy and productive person. I love my job, I love speaking to raise awareness about mental health among high school kids. I am so grateful that I am not meant to die on that day and I was given this second chance. I praise God each day for His ultimate salvation.
						<br><br>

						I am still taking Epival (500mg) and an anti-psychotic medication called Seroquel (125mg) everyday, unconditionally everyday, most likely for the rest of my life. But I have no problems with it, I do not experience any side effects, aside from the fact that I cannot bear my biological child. If you are going through Bipolar or any other mental illness, there is hope! if I can recover from the severity of my condition, I believe that anyone is treatable! Be patient!
						<br><br>
						</p>
						
						</span>
						<button onclick="myFunction8()" id="myBtn8"style="margin-left:310px;font-size:20px;" >View All</button>
						<script>
						function myFunction8() {
							var dot8 = document.getElementById("dot8");
							var moreText = document.getElementById("more8");
							var btnText = document.getElementById("myBtn8");

						if (dot8.style.display === "none") {
							dot8.style.display = "inline";
							btnText.innerHTML = "View All"; 
							moreText.style.display = "none";
						} 
						else {
							dot8.style.display = "none";
							btnText.innerHTML = "View less"; 
							moreText.style.display = "inline";
						}
						}
						</script>		
						
					</td>
				</tr>
				<tr style="background-color:#48D1CC;">
					<td style="padding:20px;">
						<h1>Kate MacHugh's story</h1>
						<p>
						Kate MacHugh is now 25. She’s an author and clinician.But she only got to where she is now by overcoming depression as a teenager.
						</p>
						
						<span id="dot9"></span><span id="more9">
						
						<p>
						MacHugh said she was “harassed, humiliated and cyberbullied,” during her teenage years, leading her to go from being a happy and vibrant youngster to someone more angry and “sullen.” Once she became a different person, she slowly slipped into the murky waters of depression.

						“It was the lowest I have ever felt in my life," she said to the National.But everything changed once she went to college. The peers who had put her down and bullied her within the walls of high school were long gone, and she could finally start focusing on what made her unique and special. Instilling confidence in herself was what got her past depression and on a path to success, she said.
						</p>
						<p>
						“I worked really hard to change the messages in my head,” MacHugh said. “I was led to believe that I was ugly, worthless, and disgusting. I internalized these messages and they became part of my identity. I began to tell myself that I was smart, loved and beautiful."
						</p>
						
						</span>
						<button onclick="myFunction9()" id="myBtn9"style="margin-left:310px;font-size:20px;" >View All</button>
						<script>
						function myFunction9() {
							var dot9 = document.getElementById("dot9");
							var moreText = document.getElementById("more9");
							var btnText = document.getElementById("myBtn9");

						if (dot9.style.display === "none") {
							dot9.style.display = "inline";
							btnText.innerHTML = "View All"; 
							moreText.style.display = "none";
						} 
						else {
							dot9.style.display = "none";
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
        
       

    </main>

    <!------------------main------------------->

    <!---------------footer---------------->

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

    <!----------------footer--------------------->

    <script src="js/Jquery3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/fitness.js"></script>


</body>
</html>