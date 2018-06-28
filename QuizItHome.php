<?php
	if(session_id()=='')
	{
		session_start();	
	}
	if(!isset($_SESSION["name"]))
	{
		echo 'Session Expired<br>
		<a href="LogIn.html"><button type="submit"> LogIn to continue</button></a>';
	}
	else
	{
		
		echo '

<html>
	<head>

	
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<title>QuizIt</title>


	</head>
	<body>

		<header>
			
				
			<ul class="pqr">
				<h2><li style="float: left;"><a class="active" href="QuizItHome.php">QuizIt</a></li></h2>
				<li ><a class="active" href="Topic.php">Topics</a></li>
				<li ><a class="active" href="Leaderboard.php">Leaderboard</a></li>
				<li style="margin-left: 300px;float: center; text-align: center; color: yellow;">Test Your Knowledge Here</li>
				<li style="float: right; padding-right: 30px; padding-top: 5px; color: white;">
					<a href="Profile.php">
					WELCOME,' 

						
						.$_SESSION["name"].'

					</a>
				</li>;
			
			</ul>
		
		</header>
		<div id="demo" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				    <li data-target="#demo" data-slide-to="3"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="FIFA1.jpg" alt="Los Angeles" width="1300" height="700">
				    </div>
				    <div class="carousel-item">
				      <img src="HarryPotter.jpg" alt="Chicago" width="1300" height="700">
				    </div>
				    <div class="carousel-item">
				      <img src="DC1.jpg" alt="New York" width="1300" height="700">
				    </div>
				    <div class="carousel-item">
				      <img src="Marvel2.jpg" alt="New York" width="1300" height="700">
				    </div>
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
		</div>

			


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

				width: 100%
				color: #333;
				background-color: #333;
				min-height: 50px;
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
			li a:active{
				background-color: green;
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