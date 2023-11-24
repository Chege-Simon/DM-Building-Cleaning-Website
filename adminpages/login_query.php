<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query = "SELECT COUNT(*) as count FROM `member` WHERE `email` = :email AND `password` = :password";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$row = $stmt->fetch();
		
		$count = $row['count'];
		
		if($count > 0){
			$_SESSION['user'] = $email;
			header('location:../reviews/index.php');
		}else{
			$_SESSION['error'] = "Invalid email or password";
			header('location: ../login.php');
		}
	}
?>