<?php
	//starting the session
	session_start();
	
	if(!isset($_SESSION['user'])){
		header('location: ../login.php');
	}
?>
<?php
	//include our connection
	include 'dbconfig.php';

	//delete the row of selected id
	$sql = "DELETE FROM reviews WHERE review_id = '".$_GET['id']."'";
	$db->query($sql);

	header('location: index.php');
?>