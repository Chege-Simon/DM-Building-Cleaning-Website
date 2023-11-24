<?php
	//starting the session
	session_start();

	//including the database connection
	require_once 'conn.php';
	
	if(ISSET($_POST['register'])){
		// Setting variables
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		// Insertion Query
		$query = "INSERT INTO `member` (email, password, firstname, lastname) VALUES(:email, :password, :firstname, :lastname)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
		
		// Check if the execution of query is success
		if($stmt->execute()){
			//setting a 'success' session to save our insertion success message.
			$_SESSION['success'] = "Successfully created an account";

			//redirecting to the index.php 
			header('location: login.php');
		}

	}
?>