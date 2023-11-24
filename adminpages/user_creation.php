<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Dm Gebäudereinigung</title>
		<meta content="Home and Office Cleaning Services" name="description">
		<meta content="Home and Office Cleaning Services" name="keywords">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<!-- Favicons -->
		<link href="../assets/img/logo.png" rel="icon">
		<link href="../assets/img/logo.png" rel="apple-touch-icon">
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="../index.html" target="_balnk">DM Building Cleaning</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Register</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting to Login Page -->
		<a href="../login.php">Already a member? Log in here...</a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Registration Form start -->
			<form method="POST" action="save_member.php">	
				<div class="alert alert-info">Registration</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname" class="form-control" required="required"/>
				</div>
				<?php
					//checking if the session 'success' is set. Success session is the message that the credetials are successfully saved.
					if(ISSET($_SESSION['success'])){
				?>
				<!-- Display registration success message -->
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php
					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
					}
				?>
				<button class="btn btn-primary btn-block" name="register"><span class="glyphicon glyphicon-save"></span> Register</button>
			</form>	
			<!-- Registration Form end -->
		</div>
	</div>
</body>
</html>