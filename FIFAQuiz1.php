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
	<form action="FIFAQuizCal1.php" method="post">
		<p>Q.1.Who was the winner of the inaugural World Cup in 1930?</p>
		<input type="radio" name="answer1" value="a">(A) Uruguay<br>
		<input type="radio" name="answer1" value="b">(B) Germany<br>
		<input type="radio" name="answer1" value="c">(C) Argentina<br>
		<input type="radio" name="answer1" value="d">(D) Brazil<br>
		
		<p>Q.2.Who scored the first world cup goal in history?</p>
		<input type="radio" name="answer2" value="a">(A) Pablo Dorado<br>
		<input type="radio" name="answer2" value="b">(B) Francisco Varallo<br>
		<input type="radio" name="answer2" value="c">(C) Lucien Laurent<br>
		<input type="radio" name="answer2" value="d">(D) Santos Iriarte<br>


		<p>Q.3.Which player has the highest total number of goals in FIFA World Cup? </p>
		<input type="radio" name="answer3" value="a">(A) Ronaldo<br>
		<input type="radio" name="answer3" value="b">(B) Miroslev Klose<br>
		<input type="radio" name="answer3" value="c">(C) Thomas Muller<br>
		<input type="radio" name="answer3" value="d">(D) Diego Maradona<br>
	

		<p>Q.4.Which player scores in FIFA World Cup 2014 final?</p>
		<input type="radio" name="answer4" value="a">(A) Thomas Muller<br>
		<input type="radio" name="answer4" value="b">(B) Lionel Messi<br>
		<input type="radio" name="answer4" value="c">(C) Andre Schurlle<br>
		<input type="radio" name="answer4" value="d">(D) Mario Gotze<br>
	

		<p>Q.5.Which nation wins the World Cup for the maximum number of times?</p> 
		<input type="radio" name="answer5" value="a">(A) Argentina<br>
		<input type="radio" name="answer5" value="b">(B) Brazil<br>
		<input type="radio" name="answer5" value="c">(C) Italy<br>
		<input type="radio" name="answer5" value="d">(D) Germany<br>


		<p>Q.6. Who was the coach of 2010 World Cup Winner Spain team?</p>
		<input type="radio" name="answer6" value="a">(A) Vicente Del Bosque<br>
		<input type="radio" name="answer6" value="b">(B) Fabio Capelo<br>
		<input type="radio" name="answer6" value="c">(C) Joakim Lo<br>
		<input type="radio" name="answer6" value="d">(D) Julen Lopetegui<br>

		<p>Q.7.In which stadium the final of World Cup 2018 will held?</p>
		<input type="radio" name="answer7" value="a">(A) Fisht Stadium, Sochi<br>
		<input type="radio" name="answer7" value="b">(B) St.Petersburg Stadium,St.Petersburg<br>
		<input type="radio" name="answer7" value="c">(C) Luzhniki Stadium, Moscow<br>
		<input type="radio" name="answer7" value="d">(D) Ekaterinburg Arena, Ekaterinburg<br>

		<p>Q.8.Which of the following team fails to qualify in FIFA World Cup 2018? </p>
		<input type="radio" name="answer8" value="a">(A) Italy<br>
		<input type="radio" name="answer8" value="b">(B) Argentina<br>
		<input type="radio" name="answer8" value="c">(C) England<br>
		<input type="radio" name="answer8" value="d">(D) France<br>

		<p>Q.9.What is the name of the Mascot of FIFA World Cup 2018?</p>
		<input type="radio" name="answer9" value="a">(A) Fuleco<br>
		<input type="radio" name="answer9" value="b">(B) Zabivaka<br>
		<input type="radio" name="answer9" value="c">(C) Zakumi<br>
		<input type="radio" name="answer9" value="d">(D) Paul<br>

		<p>Q.10.Who was the highest scorer in FIFA World Cup 2014?</p>
		<input type="radio" name="answer10" value="a">(A) Lionel Messi<br>
		<input type="radio" name="answer10" value="b">(B) Cristiano Ronaldo<br>
		<input type="radio" name="answer10" value="c">(C) Thomas Mulleer<br>
		<input type="radio" name="answer10" value="d">(D) James Rodriguez<br>
		
		<center><input type="submit" id="btn"></center>
	</form>
	
</body>
</html>
