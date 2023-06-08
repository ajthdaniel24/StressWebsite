


<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>
	<meta charset=UTF-8" />
	
	<title>Qiuz Result</title>
	
	<link rel="stylesheet" type="text/css" href="css/quiz.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
</head>

<body>
  <div class="rst">
	  <div id="page-wrap">

		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
             //QUESTION1
            if ($answer1 == "A") { $totalCorrect = $totalCorrect+ 10;}
            if ($answer1 == "B") { $totalCorrect = $totalCorrect+ 5; }
            if ($answer1 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer1 == "D") { $totalCorrect = $totalCorrect+ 1; }
            //QUESTION2
            if ($answer2 == "A") { $totalCorrect = $totalCorrect+ 10;}
            if ($answer2 == "B") { $totalCorrect = $totalCorrect+ 7;}
            if ($answer2 == "C") { $totalCorrect = $totalCorrect+ 3;}
            if ($answer2 == "D") { $totalCorrect = $totalCorrect+ 1;}
            //QUESTION3
            if ($answer3 == "A") { $totalCorrect = $totalCorrect+ 10; }
            if ($answer3 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer3 == "C") { $totalCorrect = $totalCorrect+ 3 ;}
            if ($answer3 == "D") { $totalCorrect = $totalCorrect+ 1; }
            //QUESTION4s
            if ($answer4 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer4 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer4 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer4 == "D") { $totalCorrect = $totalCorrect+ 1; }
            //QUESTION5
            if ($answer5 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer5 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer5 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer5 == "D") { $totalCorrect = $totalCorrect+ 1; }

            //QUESTION6
            if ($answer6 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer6 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer6 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer6 == "D") { $totalCorrect = $totalCorrect+ 1; }

            //QUESTION7
            if ($answer7 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer7 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer7 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer7 == "D") { $totalCorrect = $totalCorrect+ 1; }

            //QUESTION8
            if ($answer8 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer8 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer8 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer8 == "D") { $totalCorrect = $totalCorrect+ 1; }

            //QUESTION9
            if ($answer9 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer9 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer9 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer9 == "D") { $totalCorrect = $totalCorrect+ 1; }

            //QUESTION10
            if ($answer10 == "A") { $totalCorrect = $totalCorrect+ 10 ;}
            if ($answer10 == "B") { $totalCorrect = $totalCorrect+ 7; }
            if ($answer10 == "C") { $totalCorrect = $totalCorrect+ 3; }
            if ($answer10 == "D") { $totalCorrect = $totalCorrect+ 1; }
            
            if($totalCorrect>84){
              echo "<div id='results'>Your Depression level Is <div id='num'>$totalCorrect%</div> </div>";
              echo "<div id='abt1'>You are not deprest</div>";
            }

            else if($totalCorrect>49){
              echo "<div id='results'>Your Depression level Is <div id='num'>$totalCorrect%</div></div>";
              echo "<div id='abt1'>You are middle stage of Depression Make a Solution with Clear Minds </div>";
            }

            else{
              echo "<div id='results'>Your Depression level Is <div id='num'>$totalCorrect%</div></div>";
              echo "<div id='abt1'>You are at dangerous situation. Make a Solution with Clear Minds </div>";
            }
            
        ?>

	
	  </div>
  </div>

<div class="btn-1">
  <?php
    if (empty($name)){
        echo '<a href="./login.php"><button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a>';
        }
    else {
        echo '<a href="./LetsRelax.php"><button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a>';
      }
    ?>
</div>

</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearmind";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO totalcorrect (total)
VALUES ('$totalCorrect')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</html>