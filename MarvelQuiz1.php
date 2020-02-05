<?php
	session_start();
?>

<DOCTYPE html>
<html>
<head>
	
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
        //window.location='quiz1.php';

        
    }

      setTimeout(function()
      	{
      		document.getElementById("btn").click()
  		},120000);   

countdown(2);
		</script>		
		</span>


	</h3>
	<form action="MarvelQuizCal1.php" method="post">
		<p>Q.1.What actor voiced Thanos in 'Guardians of the Galaxy'?</p>
		<input type="radio" name="answer1" value="a">(A) Javier Bardem<br>
		<input type="radio" name="answer1" value="b">(B) Josh Brolin<br>
		<input type="radio" name="answer1" value="c">(C) Benicio Del Toro<br>
		<input type="radio" name="answer1" value="d">(D) Vin Diesel<br>
		
		<p>Q.2.Who was Bruce Banner's love interest in 'The Incredible Hulk'?</p>
		<input type="radio" name="answer2" value="a">(A) Eleanor Ross<br>
		<input type="radio" name="answer2" value="b">(B) Peggy Carter<br>
		<input type="radio" name="answer2" value="c">(C) June Carter<br>
		<input type="radio" name="answer2" value="d">(D) Betty Ross<br>


		<p>Q.3."The world will be his. The universe yours. And the humans, what can they do but burn?"-Who said this?</p>
		<input type="radio" name="answer3" value="a">(A) Algrimt<br>
		<input type="radio" name="answer3" value="b">(B) Nebula<br>
		<input type="radio" name="answer3" value="c">(C) The Other<br>
		<input type="radio" name="answer3" value="d">(D) Loki<br>
	

		<p>Q.4.What's Hawkeye's real name?</p>
		<input type="radio" name="answer4" value="a">(A) Barton Carter<br>
		<input type="radio" name="answer4" value="b">(B) Clint Coulson<br>
		<input type="radio" name="answer4" value="c">(C) Clint Barton<br>
		<input type="radio" name="answer4" value="d">(D) Bart Clinton<br>
	

		<p>Q.5.Who killed Frigga in 'Thor: The Dark World'?</p> 
		<input type="radio" name="answer5" value="a">(A) Kurse/Algrim<br>
		<input type="radio" name="answer5" value="b">(B) Malekith<br>
		<input type="radio" name="answer5" value="c">(C) Jane Foster<br>
		<input type="radio" name="answer5" value="d">(D) Loki<br>


		<p>Q.6.The Fantastic Four have the headquarters in what building?</p>
		<input type="radio" name="answer6" value="a">(A) Stark Tower<br>
		<input type="radio" name="answer6" value="b">(B) Fantastic Headquarters<br>
		<input type="radio" name="answer6" value="c">(C) Baxter Building<br>
		<input type="radio" name="answer6" value="d">(D) Xavier Institute<br>

		<p>Q.7.Thor has two war goats to pull his chariot. They are named:</p>
		<input type="radio" name="answer7" value="a">(A) Bolder and Hermod<br>
		<input type="radio" name="answer7" value="b">(B) Thunder and Lightning<br>
		<input type="radio" name="answer7" value="c">(C) Ask and Embla<br>
		<input type="radio" name="answer7" value="d">(D) Toothgrinder and Toothgnasher<br>

		<p>Q.8.What vehicle is the Avengers primary mode of transport?</p>
		<input type="radio" name="answer8" value="a">(A) A Bus<br>
		<input type="radio" name="answer8" value="b">(B) The Queenjet<br>
		<input type="radio" name="answer8" value="c">(C) The Blackbird<br>
		<input type="radio" name="answer8" value="d">(D) The Blackhawk<br>

		<p>Q.9.Which Super Hero is romantically interested in Sue Storm?</p>
		<input type="radio" name="answer9" value="a">(A) Ironman<br>
		<input type="radio" name="answer9" value="b">(B) Spiderman<br>
		<input type="radio" name="answer9" value="c">(C) Namor<br>
		<input type="radio" name="answer9" value="d">(D) Black Panther<br>

		<p>Q.10.In college, Mr. Fantastic roomed with:</p>
		<input type="radio" name="answer10" value="a">(A) Ben Grimn<br>
		<input type="radio" name="answer10" value="b">(B) Tony Stark<br>
		<input type="radio" name="answer10" value="c">(C) Johny Storm<br>
		<input type="radio" name="answer10" value="d">(D) Susan Storm<br>
		
		<center><input type="submit" id="btn"></center>
	</form>
	
	
</body>
</html>
