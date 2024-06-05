<?php


if(isset($_GET['submit'])){
	require 'dbcon.inc.php';
	$name=$_GET['name'];
	$email=$_GET['email'];
	$message=$_GET['message'];


	if(empty($name) || empty($email) || empty($message)){
		header("Location: ../index.php?error=emptyfieldname=" . $name . "&email=" . $email."&message=".$message);
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: ../index.php?error=invalidemail");
        exit();
    	}
    	else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
    	header("Location: ../index.php?error=invalidename".$name);
    	exit();
  		}
  		else{
  			$sql="INSERT INTO news_letter(`sender_name`,`sender_email`,`sender_message`) VALUES(?,?,?)";
  			$stmt = mysqli_stmt_init($conn);
  			mysqli_stmt_prepare($stmt, $sql);
  			 mysqli_stmt_bind_param($stmt,"sss", $name, $email,$message);
             mysqli_stmt_execute($stmt);
             header("Location: ../index.php?message_send");
             exit();

  		}

	}
	mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>