<?php
	session_start();
?>

<DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<h2 style="float: right;">WELCOME

		<?php
			echo $_SESSION["name"];
		?>
		
	</h2>
	<h3 style="float: center;">Time left=
		<span id="timer">	
			<script type="text/javascript">
			var timeoutHandle;
    function countdown(minutes) 
    {
        var seconds = 60;
        var mins = minutes;
        function tick() 
        {
            var counter = document.getElementById("timer");
            var current_minutes = mins-1;
            seconds--;
            counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
            
            if( seconds > 0 ) 
            {
                timeoutHandle=setTimeout(tick, 1000);
            }
            else 
            {
                if(mins > 1)
                {

                   //countdown(mins-1);  // never reach “00″ issue solved:Contributed by Victor Streithorst
                   setTimeout(function () { countdown(mins - 1); }, 1000);

                }
            }
            
        }
       

        tick();
       

        
    }
  
     
      setTimeout(function()
      	{
      		document.getElementById("btn").click()
  		},120000);      
      countdown(2); 
		</script>		
		</span>


	</h3>
	<form action="HarryPotterQuizCal1.php" method="post">
		<p>Q.1.What is the name of Harry Potter's owl? </p>
		<input type="radio" name="answer1" value="a" onclick="entry1()">(A) Hedwig<br>
		<input type="radio" name="answer1" value="b" onclick="entry2()">(B) Errol<br>
		<input type="radio" name="answer1" value="c" onclick="entry3()">(C) Crookshanks<br>
		<input type="radio" name="answer1" value="d" onclick="entry4()">(D) Dobby<br>
		
		<p>Q.2.What is the street address of the Dursley home?</p>
		<input type="radio" name="answer2" value="a">(A) 12 Grimmauld Place<br>
		<input type="radio" name="answer2" value="b">(B) 4 Privet Drive<br>
		<input type="radio" name="answer2" value="c">(C) 3 Little Hangleton<br>
		<input type="radio" name="answer2" value="d">(D) 5 Godric's Hollow<br>


		<p>Q.3.What is the form of Hermione's patronus? </p>
		<input type="radio" name="answer3" value="a">(A) Rabbit<br>
		<input type="radio" name="answer3" value="b">(B) Otter<br>
		<input type="radio" name="answer3" value="c">(C) Stag<br>
		<input type="radio" name="answer3" value="d">(D) Doe<br>
	

		<p>Q.4.When is Harry's birthday? </p>
		<input type="radio" name="answer4" value="a">(A) June 30<br>
		<input type="radio" name="answer4" value="b">(B) July 15th<br>
		<input type="radio" name="answer4" value="c">(C) July 31<br>
		<input type="radio" name="answer4" value="d">(D) August 25<br>
	

		<p>Q.5.Which of these spells is used to unlock doors?</p> 
		<input type="radio" name="answer5" value="a">(A) Alohomora<br>
		<input type="radio" name="answer5" value="b">(B) Accio<br>
		<input type="radio" name="answer5" value="c">(C) Dissendium<br>
		<input type="radio" name="answer5" value="d">(D) Episkey<br>


		<p>Q.6. Which spell should you try to convert a Boggart into something funny?</p>
		<input type="radio" name="answer6" value="a">(A) Ridikulus<br>
		<input type="radio" name="answer6" value="b">(B) Expelliarmus<br>
		<input type="radio" name="answer6" value="c">(C) Accio<br>
		<input type="radio" name="answer6" value="d">(D) Stupify<br>

		<p>Q.7.When Ron drank a poisoned drink from Professor Slughorn, what did Harry give to Ron to revive him?</p>
		<input type="radio" name="answer7" value="a">(A) A borgin<br>
		<input type="radio" name="answer7" value="b">(B) A butterbeer<br>
		<input type="radio" name="answer7" value="c">(C) Pumpkin Juice<br>
		<input type="radio" name="answer7" value="d">(D) A bezoar<br>

		<p>Q.8.Who said: "Funny, the damage a silly little book can do, especially in the hands of a silly little girl"? </p>
		<input type="radio" name="answer8" value="a">(A) Professor Snape<br>
		<input type="radio" name="answer8" value="b">(B) Lucius Malfoy<br>
		<input type="radio" name="answer8" value="c">(C) Tom Marvolo Riddle<br>
		<input type="radio" name="answer8" value="d">(D) Draco Malfoy<br>

		<p>Q.9.The Possessor of all the Deathly Hallows can be called what?</p>
		<input type="radio" name="answer9" value="a">(A) Master of Death<br>
		<input type="radio" name="answer9" value="b">(B) King of Death<br>
		<input type="radio" name="answer9" value="c">(C) Lord of De,120000);th<br>
		<input type="radio" name="answer9" value="d">(D) Controller of Death<br>

		<p>Q.10.Which of the following is not an unforgivable curse</p>
		<input type="radio" name="answer10" value="a">(A) Avada Kedavra<br>
		<input type="radio" name="answer10" value="b">(B) Crucio<br>
		<input type="radio" name="answer10" value="c">(C) Expelliarmus<br>
		<input type="radio" name="answer10" value="d">(D) Imperio<br>
		
		<center><input type="submit" id="btn"></center>
	</form>
	
	
</body>
</html>
