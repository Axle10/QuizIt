<?php

	if(isset($_POST['signup_submit']))
	{
		$name=$_POST["Name"];
		$email=$_POST["EmailId"];
		$phone=$_POST["Phone"];
		$pass=$_POST["Pass"];
	
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="quizapp";
	
		
	
		$f=0;
	
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
				array_push($errors, 'You are already registered with this email id');
			}
			else
			{
				$sql="INSERT INTO info(Name,EmailID,PhoneNo,Password) VALUES('$name','$email','$phone','$pass')";
				if($conn->query($sql)=="TRUE")
				{
					array_push($success_message, 'You are successfully registered');
				}
				else
				{
					echo "Data not inserted";
				}
			}
		}
	}
	
?>	
