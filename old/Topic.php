<?php
			
		session_start();
		//session is active
		if(!isset($_SESSION["name"]))
		{
			echo 'Session expired<br>
				<a href="LogIn.html"><button type="submit">LogIn to continue</button></a>';
		}
		else
		{
			echo '

			



<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>		
		<title>Topics</title>

	</head>

	<body>


		
				
				<header>
								
					<ul class="pqr">
						<h2><li style="float: left;"><a class="active" href="QuizItHome.php">QuizIt</a></li></h2>
						<li ><a class="active" href="Leaderboard.php">Leaderboard</a></li>
						<li style="float: right; color: white;"><a href="Profile.php">
							WELCOME, '.	$_SESSION["name"].'
					
					
								
						</a>
						</li>
					
					</ul>

						
				</header>

				<div class="container">
					<div class="items">
						<a href="HarryPotterInstruction.php">
							<img src="images1.jpg" class="thumbnails">
								<div class="captions">
									<u><h2 class="Title"><center>HARRY POTTER</center></h2></u>
									<h4 class="Description1"><center>The Boy Who Lived Big Screen Adventures</center></h4>
								</div>
						</a>
					</div>
					<div class="items">
						<a href="MarvelInstruction.php">
							<img src="Marvel4.jpg" class="thumbnails">
								<div class="captions">
									<u><h2 class="Title"><center>MARVEL UNIVERSE</center></h2></u>
									<h4 class="Description1"><center>This topic is Marvel-ous</center></h4>
								</div>
						</a>
					</div>
					<div class="items">
						<a href="DCInstruction.php">
							<img src="DC2.jpg" class="thumbnails">
								<div class="captions">
									<u><h2 class="Title"><center>DC COMICS</center></h2></u>
									<h4 class="Description1"><center>Find Out Who is under that Mask</center></h4>
								</div>
						</a>
					</div>
					<div class="items">
						<a href="FIFAInstruction.php">
							<img src="FIFA4.jpg" class="thumbnails">
								<div class="captions">
									<u><h2 class="Title"><center>FIFA WORLD CUP</center></h2></u>
									<h4 class="Description1"><center>The Beautiful Game</center></h4>
								</div>
						</a>
					</div>
				</div>
				<h2 style="color: skyblue;"><center>Test Your Knowledge</center></h2>
				<h3 style="color: lightgreen;"><center> More topics are coming soon</center></h3>

				<footer>
					<div class="container">
						<p>Copyright@QuizUp. All Rights Reserved | Contact Us: +91-9000000000</p>
					</div>
				</footer>
				<style>
					body
					{
						width: 100%;
						height: 100%;
						margin: 0;
						background-color: white;
					}
					header
					{

						width: 100%;
						color: #333;
						background-color: #333;
						min-height: 20px;
					}

					ul 
					{
					    list-style-type: none;
					    margin: 0;
					    padding: 0;
					    overflow: hidden;
					    background-color: #333;

					    
					 }

					li {
					    display: inline-block;
					     position: sticky;
					    
					}

					li a {
					    display: block;
					    color: white;
					    text-align: center;
					    padding: 14px 16px;
					    text-decoration: none;
					}

					/* Change the link color to #111 (black) on hover */
					li a:hover {
					    background-color: #111;
					}
					li a:active
					{
						background-color: green;
					}
					div.container
					{
						width: 90%;
						margin: auto;
						overflow: hidden;
					}
					div.items
					{
						width:30%;
						display: block;
						padding: 4px;
						margin-bottom: 20px;
						line-height: 1.43;
						background-color: #fff;
						border: 1px solid #ddd;
						border-radius: 4px;
						float: left;
						margin-left: 1%;
						height: 300px;
					}
					img.thumbnails
					{
						display: block;
						width: 100%;
						height: 60%;
					}
					div.caption
					{
						color: #000;
						padding: 0px 10px 10px;
						font-weight: bold;
						text-align: center;
					}
					h2.Title
					{
						color: red;
						font-weight: bold;
					}
					h4.Description
					{
						color: turquoise;
					}
					footer
					{
						background-color: #000;
						color: yellow;
						font-size: 14px;
						text-align: center;
					}
				</style>

			
	</body>
</html>

			';

		}	
?>		