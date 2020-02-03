<?php
	
	if(isset($_POST['login_submit']))
	{
		$email=$_POST["emailid"];
		$pass=$_POST["password"];

		$f=0;

		
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
					// session_start();
					$_SESSION["name"]=$row['Name'];
					$_SESSION["id"]=$row['SlNo'];
					$_SESSION["email"]=$row['EmailID'];
					$_SESSION["phno"]=$row['PhoneNo'];

					?>
						<script>window.location.href = 'index.php';</script>
					<?php
					// header("Location: index.php");
					exit();
				}
				else
				{
					array_push($errors, "Wrong credentials");
				}
			}
			else
			{
				array_push($errors, "You are not registered with us");
			}
		}
		
	}
?>
