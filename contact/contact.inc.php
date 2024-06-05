<?php
session_start();
// connection to the database
require 'dbconn.php';

$name = $_POST['name'];
$email = $_POST['email'];

if (empty($name) || empty($email)) {
		// code...
		header("Location: ../contact us.php?error=emptyfeilds&name=".$name."&email=".$email);
		exit();
	}
	
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// code...
		header("Location: ../contact us.php?error=invalid_email=".$email);
		exit();
	}


$pdo = new PDO('mysql:host=localhost; port=3306; dbname=crud_db', 'root');
// see the "error" folders for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $sql = "INSERT INTO contact_us (name, email, comment) VALUES (:name, :email, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
    	':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':message' => $_POST['message']
    ));
    header("Location: ../contact us.php?message_send=success");
                exit();
}
?>


