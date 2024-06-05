<?php
	include('conn.php');
	
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	
	mysqli_query($conn,"insert into user1 (user_name, user_email) values ('$user_name', '$user_email')");
	header('location:user.php');

?>
