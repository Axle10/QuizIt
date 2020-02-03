<?php
	include './config/db.php';
	include './config/session.php';
	include './config/error.php';
	include './config/success.php';
	include './layout/header.php';
	include './controllers/signup.php';
	include './controllers/login.php';
	if($flag==0)
	{

?>

<section id="signup-content">
	<div>
		<img src="./assets/images/page_signup/Harry2.jpg">
	</div>
	
	<div class="container">
		<div>
			<ul class="tab-group">
				<li class="tab active" id="logintab" onclick="activateLoginForm()">Log In</li>
				<li class="tab" id="signuptab" onclick="activateSignupForm()">Sign Up</li>
			</ul>
		</div>

		<div class="card login-card active" id="logincard">
			<div class="card-body">
				<ul>
					<?php
						if(count($success_message) > 0)
						{
							foreach($success_message as $message)
							{
							?>
								<li class="success-message"><?php echo $message; ?></li>
							<?php
							}
						}
					?>
				</ul>

				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="frm">
			
					<div class="form-group">
						<label for="login-email">EmailId</label>
						<input class="form-control" id="login-email" type="email" name="emailid">
					</div>
						
					<div class="form-group">
						<label for="login-password">Password</label>
						<input class="form-control" id="login-password" type="password" name="password"></td>
					</div>		
					
					<?php
						if(count($errors) > 0)
						{ ?>
							<ul>
								<?php
								foreach($errors as $error)
								{ ?>
									<li class="error-message"><?php echo $error; ?></li>
								<?php 
								}
								?>
							</ul>
						<?php
						}
					?>
					<div>
						<button class="btn btn-primary form-btn" type="submit" name="login_submit" type="submit">LOG IN</button>
					</div>
				
				</form>
			</div>
		</div>


		<div class="card signup-card" id="signupcard">
			<div class="card-body">
				<ul>
				<?php
					if(count($success_message) > 0)
					{
						foreach($success_message as $message)
						{
						?>
							<li class="success-message"><?php echo $message; ?></li>
						<?php
						}
					}
				?>
				</ul>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class='frm'>
					
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" type="text" placeholder=" " name="Name" id="name">
					</div>
					<div class="form-group">
						<label for="email">EmailId</label>
						<input class="form-control" type="email" placeholder=" " name="EmailId" id="email">
					</div>

					<div class="form-group">
						<label for="phone">Phone Number</label>
						<input class="form-control" type="integer" placeholder=" " name="Phone" id="phone">
					</div>	

					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" placeholder=" " name="Pass" id="password">
					</div>
					<?php
						if(count($errors) > 0)
						{ ?>
							<ul>
								<?php
								foreach($errors as $error)
								{ ?>
									<li class="error-message"><?php echo $error; ?></li>
								<?php 
								}
								?>
							</ul>
						<?php
						}
					?>
					<div>
						<button class="btn btn-primary form-btn" type="submit" name="signup_submit">SIGN UP</button>
					</div>
				</form>
			</div>
		</div>

		
	</div>
</section>

<?php
	}
	else
	{
		?>
			<script>window.location.href = 'index.php';</script>
		<?php
	}
	include './layout/footer.php';
?>