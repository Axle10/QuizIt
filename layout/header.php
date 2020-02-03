<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<style>
			<?php include './assets/css/main.css'; ?>
		</style>
		<title>QuizIt</title>

	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php"><h2>QuizIt</h2></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse navbar-menu" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item-float-center nav-item ">
							<span class="nav-item-text">Test Your Knowledge Here</span>
						</li>

						<?php 
							if($flag==0)
							{
								?>
								<li class ="nav-item nav-item-float-right" style="float: right;">
									<a class="nav-link" href="signup.php">LogIn</a>
								</li>
								<?php
							}
							else if($flag==1)
							{
								?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Welcome,<?php echo $_SESSION["name"]; ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="dashboard.php">Dashboard</a>
										<a class="dropdown-item" href="logout.php">Logout</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"></a> 
								</li>
								<?php
							}
						?>
					</ul>
				</div>
			</nav>
		</header>
