<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where userid='$id'");
	header('location:index.php');

?>

<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from corp_db where corp_id='$id'");
	header('location:corp.php');

?>
<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from booking where booking_id='$id'");
	header('location:booking.php');

?>