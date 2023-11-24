<!DOCTYPE html>
<?php 
	//starting the session
	session_start();
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<title>Dm Gebäudereinigung</title>
		<meta content="Home and Office Cleaning Services" name="description">
		<meta content="Home and Office Cleaning Services" name="keywords">
		<link rel="stylesheet" type="text/css" href="./adminpages/css/bootstrap.css"/>
		<!-- Favicons -->
		<link href="./assets/img/logo.png" rel="icon">
		<link href="./assets/img/logo.png" rel="apple-touch-icon">

	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="./index.html">DM Building Cleaning</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Login</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting page to Registration page -->
		<!-- <a href="./adminpages/user_creation.php">Not a member yet? Register here...</a> -->
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Login Form Starts -->
			<form method="POST" action="./adminpages/login_query.php">	
				<div class="alert alert-info">Login</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				<?php
					//checking if the session 'error' is set. Erro session is the message if the 'email' and 'Password' is not valid.
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Display Login Error message -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
					//Unsetting the 'error' session after displaying the message. 
					session_unset($_SESSION['error']);
					}
				?>
				<button class="btn btn-primary btn-block" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
			</form>	
			<!-- Login Form Ends -->
		</div>
	</div>
</body>
</html>