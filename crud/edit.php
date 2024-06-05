<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$user_name=$_POST['user_name'];
	$address=$_POST['user_email'];

	
	mysqli_query($conn,"update user1 set user_name='$user_name', user_email='$user_email' where user_id='$id'");
	header('location:index.php');

?>