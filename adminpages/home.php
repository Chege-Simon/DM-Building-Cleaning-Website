<!DOCTYPE html>
<?php
	//starting the session
	session_start();
	
	if(!isset($_SESSION['user'])){
		header('location: login.php');
	}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com" target="_blank">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Login And Registration To Sqlite Using PDO</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="login.php">Logout</a>
		<h1>Welcome User!</h1>

		<?php 
		//starting the session
		session_start();
		var_dump($_SESSION);
		?>
	</div>
</body>
</html>