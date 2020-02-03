<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			echo $_SESSION["name"];		
		?>
	</title>
</head>
<body>
	<center>
	<table cellpadding="5px" width="auto" border="2px">
		<?php

			$sl=$_SESSION["Id"];

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
				$sql="SELECT Score,HarryPotterScore,MarvelScore,DCScore,FIFAScore FROM info WHERE SlNo LIKE $sl";

				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					$row=mysqli_fetch_assoc($result);
					$score=$row['Score'];
					$harrypotterscore=$row['HarryPotterScore'];
					$marvelscore=$row['MarvelScore'];
					$dcscore=$row['DCScore'];
					$fifascore=$row['FIFAScore'];

				}
			
				echo '<tr>
						<td><b>Name</b></td>
						<td>'.$_SESSION["name"].'</td>
					</tr>
					<tr>
						<td><b>Email Id</b></td>
						<td>'.$_SESSION["email"].'</td>
					</tr>
					<tr>
						<td><b>Phone Number</b></td>
						<td>'.$_SESSION["phno"].'</td>
					</tr>
					<tr>
						<td><b>Total Score</b></td>
						<td>'.$score.'</td>
					</tr>
					<tr>
						<td><b>Harry Potter Score</b></td>
						<td>'.$harrypotterscore.'</td>
					</tr>
					<tr>
						<td><b>Marvel Score</b></td>
						<td>'.$marvelscore.'</td>
					</tr>
					<tr>
						<td><b>DC Score</b></td>
						<td>'.$dcscore.'</td>
					</tr>
					<tr>
						<td><b>FIFA Score</b></td>
						<td>'.$fifascore.'</td>
					</tr>';
				}
	    ?>
    </table>
	</center>
	<h2>
	  	<center>
			<a href="ChangePassword.html">
				<button type="submit" style="color: green; font-color: black; border-radius: 2px; border-color: red;">
					Change Password
				</button>
			</a>  	
			<br>
			<br>
			<a href="LogOut.php">
				<button type="submit" style="color: black; border-color: yellow; border-radius: 3px;">
					Log Out
				</button>
			</a>
	  	</center>
  	</h2>
  	<style>
  		table
  		{
  			border: 2px;
  			border-spacing: 5px;
  			border-style: solid;
  			margin-top: 50px;
  			border-color: orange;

  		}
  		tr
  		{
  			border-style: solid transparent;
  			border: 2px;
  			border-color: red;


  		}
  	</style>
</body>
</html>