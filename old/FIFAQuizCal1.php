<?php
	session_start();
	$sl=$_SESSION["Id"];

	$count=0;

	if(isset($_POST["answer1"]))
	{
		$ans1=$_POST["answer1"];	
	}
	else
	{
		$ans1="no answer";
	}
	if(isset($_POST["answer2"]))
	{
		$ans2=$_POST["answer2"];	
	}
	else
	{
		$ans2="no answer";
	}
	if(isset($_POST["answer3"]))
	{
		$ans3=$_POST["answer3"];	
	}
	else
	{
		$ans3="no answer";
	}
	if(isset($_POST["answer4"]))
	{
		$ans4=$_POST["answer4"];	
	}
	else
	{
		$ans4="no answer";
	}	
	if(isset($_POST["answer5"]))
	{
		$ans5=$_POST["answer5"];	
	}
	else
	{
		$ans5="no answer";
	}
	if(isset($_POST["answer6"]))
	{
		$ans6=$_POST["answer6"];	
	}
	else
	{
		$ans6="no answer";
	}
	if(isset($_POST["answer7"]))
	{
		$ans7=$_POST["answer7"];	
	}
	else
	{
		$ans7="no answer";
	}
	if(isset($_POST["answer8"]))
	{
		$ans8=$_POST["answer8"];	
	}
	else
	{
		$ans8="no answer";	
	}
	if(isset($_POST["answer9"]))
	{
		$ans9=$_POST["answer9"];	
	}
	else
	{
		$ans9="no answer";
	}
	if(isset($_POST["answer10"]))
	{
		$ans10=$_POST["answer10"];	
	}
	else
	{
		$ans10="no answer";
	}

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="quizapp";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}

	//Checking of ans and calculation of marks and displaying of answers

	echo '
		<center>
			<table style="border: 20px; padding: 5px; text-align: center; border-spacing: 20px;">
				<tr>
					<th>Sl No</th>
					<th>Your Answer</th>
					<th>Correct Answer</th>
				<tr>';

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 1";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans1)
    	{
    		$count++;
    	}
    	elseif($ans1=='')
    	{}
    	echo '
    		<tr>
    			<td>1</td>
    			<td>'.$ans1.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
    	
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 2";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans2)
    	{
    		$count++;
		}
		echo '
    		<tr>
    			<td>2</td>
    			<td>'.$ans2.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 3";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans3)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>3</td>
    			<td>'.$ans3.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}


	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 4";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans4)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>4</td>
    			<td>'.$ans4.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 5";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans5)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>5</td>
    			<td>'.$ans5.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 6";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans6)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>6</td>
    			<td>'.$ans6.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 7";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans7)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>7</td>
    			<td>'.$ans7.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 8";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans8)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>8</td>
    			<td>'.$ans8.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 9";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans9)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>9</td>
    			<td>'.$ans9.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
 	}

	$sql1= "SELECT CorrectAnswer1 FROM fifa WHERE SlNo like 10";
	$result = mysqli_query($conn, $sql1);
	

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);//fetch result or get data from the columns
	    if($row['CorrectAnswer1']==$ans10)
    	{
    		$count++;
    	}
    	echo '
    		<tr>
    			<td>10</td>
    			<td>'.$ans10.'</td>
    			<td>'.$row['CorrectAnswer1'].'</td>
			</tr>';
 	}
 	echo '</table>
 		</center>';

	echo "<center>Your score in this quiz=".$count."</center>";

	$sql2="SELECT Score,fifaScore FROM info WHERE SlNo LIKE $sl";
	$result=mysqli_query($conn,$sql2);

	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$mark=$row['Score'];
		$mark=$mark+$count;
		$fifascore=$row['fifaScore'];
		$fifascore=$fifascore+$count;
	}
	$sql="UPDATE info SET Score=$mark,fifaScore=$fifascore WHERE SlNo=$sl";
	//$sql="INSERT INTO info(Score) VALUES ('$mark') WHERE SlNo LIKE $sl";
	if($conn->query($sql)===TRUE)
	{
		
	}
	else
	{
		
	}
	
	$conn->close();
?>
<!DOCTYPE html>
<html>
<body>
	<center>
		<a href="QuizItHome.php">
		<h2><button type="submit" style="color: green; font-color: black; border-radius: 2px; border-color: red;">
			Thanks for being here!!

		</button></h2></a>
	</center>
</body>
</html>