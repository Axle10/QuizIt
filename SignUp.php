<?php

	$name=$_POST["Name"];
	$email=$_POST["EmailId"];
	$phone=$_POST["Phone"];
	$pass=$_POST["Pass"];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="quizapp";

	

	$f=0;

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed". mysqli_connect_error());
	}
	else
	{
		$sql1="SELECT Name,EmailID,PhoneNo,Password FROM info";
		$result=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['EmailID']==$email)
				{
					$f=1;
					break;
				}
			}
			if($f==1)
			{
				echo '
					<center style="margin-top: 20px;">
						<h2>Email Id is already registered</h2>
						<a href="LogIn.html"><h3><button type="submit">LogIn Here</button></h3></a>';
			}
			else
			{
				$sql="INSERT INTO info(Name,EmailID,PhoneNo,Password) VALUES('$name','$email','$phone','$pass')";
				if($conn->query($sql)=="TRUE")
				{
					echo '
							<center style="margin-top: 20px;">
								<h2>WELCOME TO QUIZIT</h2>
								<a href="LogIn.html"><h3><button type="submit">LogIn Please</button></h3></a>
							</center>';
				}
				else
				{
					echo "Data not inserted";
				}
			}
		}
	}
?>	
