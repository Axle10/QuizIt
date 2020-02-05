<?php
	include './config/session.php';
	if($flag==0)
	{
		?>
		<script>window.location.href = 'index.php';</script>
		<?php
	}
	else
	{
		include './layout/instructions.php';
	}
	echo $_SERVER['PHP_SELF'];

?>

