<?php
	session_start();
	$sl=$_SESSION["Id"];

	$oldpass=$_POST["oldpassword"];
	$newpass=$_POST["newpassword"];
	$cnfnewpass=$_POST["cnfnewpassword"];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="quizapp";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	echo '<div style="height: 100%;">
			<center>';
	if(!$conn)
	{
		die("Error in connection".mysqli_connect_error());
	}
	else
	{
		$sql="SELECT Password FROM info WHERE SlNo LIKE $sl";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			if($oldpass==$row['Password'])
			{
				if($newpass==$cnfnewpass)
				{
					$sql="UPDATE info SET Password='$cnfnewpass' WHERE SlNo=$sl";
					
					echo '
						<div style="height:50%; width: 50%; margin: 200px;">
							Password updated successfully<br><br>
							<a href="QuizItHome.php"><button type="submit">OK</button></a>
						</div>';

				}
				else
				{
					echo '
					<div style="height:50%; width: 50%; margin: 200px;">
						New password does not match with confirm password<br><br>
						<a href="ChangePassword.html"><button type="submit">Try again</button></a>
					</div>';
				}
			}
			else
			{
				echo '
						<div style="height:50%; width: 50%; margin: 200px;">
							Old password does not match<br><br>
							<a href="ChangePassword.html"><button type="submit">Try again</button></a>
						</div>';
			}		
		}
	}
	echo '</div>
		</center>';
	mysqli_close($conn);
?>