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
        if(mins<=0 && seconds<=0)
        {
            window.location ='quiz1.php';
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
	<form action="DCQuizCal1.php" method="post">
		<p>Q.1.What is the real name of Penguin? </p>
		<input type="radio" name="answer1" value="a">(A) Waylon Jones<br>
		<input type="radio" name="answer1" value="b">(B) Ra'as Al Ghul<br>
		<input type="radio" name="answer1" value="c">(C) Ostwald Chesterfield Cabblepot<br>
		<input type="radio" name="answer1" value="d">(D) Edmond Dantes<br>
		
		<p>Q.2.What is the name of the Police Commissioner in Gotham?</p>
		<input type="radio" name="answer2" value="a">(A) Bruce Wayne<br>
		<input type="radio" name="answer2" value="b">(B) James Gordon<br>
		<input type="radio" name="answer2" value="c">(C) Donald Peak<br>
		<input type="radio" name="answer2" value="d">(D) Carlos Alvarez<br>


		<p>Q.3.What planet is Superman from? </p>
		<input type="radio" name="answer3" value="a">(A) Starlag<br>
		<input type="radio" name="answer3" value="b">(B) Krypton<br>
		<input type="radio" name="answer3" value="c">(C) Portworld<br>
		<input type="radio" name="answer3" value="d">(D) Ranx<br>
	

		<p>Q.4.Which hero has never been in Justice League?</p>
		<input type="radio" name="answer4" value="a">(A) Green Arrow<br>
		<input type="radio" name="answer4" value="b">(B) Martian Manhunter<br>
		<input type="radio" name="answer4" value="c">(C) Constantine<br>
		<input type="radio" name="answer4" value="d">(D) Cyborg<br>
	

		<p>Q.5.What is the nationality of Wonder Woman?</p> 
		<input type="radio" name="answer5" value="a">(A) Amazonian<br>
		<input type="radio" name="answer5" value="b">(B) French<br>
		<input type="radio" name="answer5" value="c">(C) Libanese<br>
		<input type="radio" name="answer5" value="d">(D) Kryptonian<br>


		<p>Q.6. Who is not a member of The Suicide Squad?</p>
		<input type="radio" name="answer6" value="a">(A) Deadshot<br>
		<input type="radio" name="answer6" value="b">(B) Harley Quinn<br>
		<input type="radio" name="answer6" value="c">(C) Joker<br>
		<input type="radio" name="answer6" value="d">(D) Slipknot<br>

		<p>Q.7.What is Lobo's Job?</p>
		<input type="radio" name="answer7" value="a">(A) Taxi Driver<br>
		<input type="radio" name="answer7" value="b">(B) Soldier<br>
		<input type="radio" name="answer7" value="c">(C) Bounty Hunter<br>
		<input type="radio" name="answer7" value="d">(D) Opthalmologist<br>

		<p>Q.8.Who killed Superman? </p>
		<input type="radio" name="answer8" value="a">(A) Lex Luthor<br>
		<input type="radio" name="answer8" value="b">(B) Darkseid<br>
		<input type="radio" name="answer8" value="c">(C) Parasite<br>
		<input type="radio" name="answer8" value="d">(D) Doomsday<br>

		<p>Q.9.What was the name of the first Green Lantern?</p>
		<input type="radio" name="answer9" value="a">(A) Alan Scott<br>
		<input type="radio" name="answer9" value="b">(B) Hal Jordan<br>
		<input type="radio" name="answer9" value="c">(C) Guy Gardner<br>
		<input type="radio" name="answer9" value="d">(D) John Stewart<br>

		<p>Q.10.What kind of terrorist is Catwoman?</p>
		<input type="radio" name="answer10" value="a">(A) Blackmailer<br>
		<input type="radio" name="answer10" value="b">(B) Terrorist<br>
		<input type="radio" name="answer10" value="c">(C) Thief<br>
		<input type="radio" name="answer10" value="d">(D) Assassin<br>
		
		<center><input type="submit" id="btn"></center>
	</form>
	
	
</body>
</html>
