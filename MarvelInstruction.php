<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Instructions
		</title>
	</head>
	<body>
		<h2 style="float: right;"><a href="Profile.php" style="color: black;">WELCOME,

			<?php
				echo $_SESSION["name"];
			?>	
		</a>
		</h2>
		
		<center>
			<h1>
				<u>Instruction</u>
				
			</h1>
		
		</center>
		<h4>
			<ul>
				<li class="abc">
					You have to answer 10 questions given from your chosen topic.<br>
				</li>
				<li class="def">
					Each question has four options out of which only one is the correct one.<br>
				</li>
				<li class="ghi">
					Correct response will fetch you 1 mark.<br>
				</li>
				<li class="jkl">	
					You will have 2 minutes to answer all the 10 questions<br>
				</li>
				<li class="mno">
					Click on the <u>Submit</u> button once you finish<br>
				</li>
			</ul>
		</h4>	
		<center>
			<h2>	
				ALL THE BEST!!
			</h2>
			<h3>
				<a href="MarvelQuiz1.php"><button type="submit" class="btn">
					Go For Test
				
				</button></a>
			</h3>
		</center>

		<style>
			body
			{
				height:100%;
				width: auto;
				
			}
			h1
			{
				padding-top: 20px;
				font-size: 50px;
				color: seagreen;
			}

			ul
			{
				list-style-type: circle;

			}
			li
			{
				margin-left: 100px;
				float: center;
				font-size: 30px;

			}
			li.abc
			{
				color: red;
			}
			li.def
			{
				color: blue;
			}
			li.ghi
			{
				color:green;
			}
			li.jkl
			{
				color:violet;
			}
			li.mno
			{
				color: orange;
			}
			button.btn
			{
				background-color: pink;
				border-style: solid;
				border-color: turquoise;
				border-radius: 25px;
			}
		</style>

	</body>
</html>