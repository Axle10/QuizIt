<?php
	session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>		
	</head>
	<body>

		<header>
	
		
			<ul class="pqr">
				<h2><li style="float: left;"><a class="active" href="QuizItHome.php">QuizIt</a></li></h2>
				<li ><a class="active" href="Topic.php">Topics</a></li>
				<li style="float: right;color: white;">
					<a href="Profile.php">
						WELCOME, 

				<?php
					echo $_SESSION["name"];

				?>
					</a>
				</li>;
			
			</ul>
		
		</header>
		<style>
			header
			{

				width: 100%
				color: #333;
				background-color: #333;
				height: 50px;
			}

			ul {
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
		</style>
	</body>
</html>

<?php
	
	$i=0;

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="quizapp";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	//Check Connection
	if(!$conn)
	{
		die("Connection failed".mysqli_connect_error());
	}

	else
	{
		$sql="SELECT Name,Score,HarryPotterScore,MarvelScore,DCScore,FIFAScore FROM info";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$mark[$i]=$row['Score'];
				$name[$i]=$row['Name'];
				$harryscore[$i]=$row['HarryPotterScore'];
				$marvelscore[$i]=$row['MarvelScore'];
				$dcscore[$i]=$row['DCScore'];
				$fifascore[$i]=$row['FIFAScore'];
				$i++;
			}
		}
		for($j=0;$j<$i;$j++)
		{
			for($k=0;$k<$i-$j-1;$k++)
			{
				if($mark[$k]<$mark[$k+1])
				{
					//swap the values of k and k+1
					list($mark[$k],$mark[$k+1])=array($mark[$k+1],$mark[$k]);
					list($name[$k],$name[$k+1])=array($name[$k+1],$name[$k]);
					list($harryscore[$k],$harryscore[$k+1])=array($harryscore[$k+1],$harryscore[$k]);
					list($marvelscore[$k],$marvelscore[$k+1])=array($marvelscore[$k+1],$marvelscore[$k]);
					list($dcscore[$k],$dcscore[$k+1])=array($dcscore[$k+1],$dcscore[$k]);
					list($fifascore[$k],$fifascore[$k+1])=array($fifascore[$k+1],$fifascore[$k]);
				}
			}
		}
		echo '
		<center>
			<table style="border: 20px; border-style: 5px solid transparent; margin-top: 60px; padding: 15px; text-align: center; border-spacing: 20px;" cellspacing="10px" cellpadding="15px">
				<tr>
					<th>Rank</th>
					<th>Name</th>
					<th>Total Points</th>
					<th>Harry Potter Score</th>
					<th>Marvel Score</th>
					<th>DC Comics Score</th>
					<th>FIFA World Cup Score</th>
				</tr>';
		for($j=0;$j<$i;$j++)
		{
			echo '<tr>
					<td>'.($j+1).'</td>
					<td>'.$name[$j].'</td>
					<td>'.$mark[$j].'</td>
					<td>'.$harryscore[$j].'</td>
					<td>'.$marvelscore[$j].'</td>
					<td>'.$dcscore[$j].'</td>
					<td>'.$fifascore[$j].'</td>
				</tr>';
		}
		echo'</table>
				</center>';
	}

?>
