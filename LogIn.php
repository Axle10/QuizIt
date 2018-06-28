<?php
	
	$email=$_POST["emailid"];
	$pass=$_POST["password"];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="quizapp";

	$f=0;

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed".mysqli_connect_error());
	}
	else
	{
		$sql="SELECT SlNo,Name,EmailID,PhoneNo,Password FROM info";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['EmailID']==$email)
				{
					$id=$row['SlNo'];
					$checkpass=$row['Password'];
					$f=1;
					break;
				}
			}
			if($f==1)
			{
				if($pass==$checkpass)
				{
					//start session
					session_start();
					$_SESSION["name"]=$row['Name'];
					$_SESSION["Id"]=$row['SlNo'];
					$_SESSION["email"]=$row['EmailID'];
					$_SESSION["phno"]=$row['PhoneNo'];

					
					include 'QuizItHome.php';
						

				}
				else
				{
					echo '<center style="margin-top: 20px;">Wrong password<br>
							<a href="LogIn.html"><button type="submit">Try Again</button></a>';
				}
			}
			else
			{
				echo '<center style="margin: 20px;">You are not registered with us<br>
						<a href="SignUp.html"><button type="submit">SignUp Here</button></a></center>';
			}
		}
	}
?>
