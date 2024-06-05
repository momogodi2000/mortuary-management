<?php
session_start();
// connection to the database
require 'dbconn.php';

$C_name = $_POST['C_name'];
$Religion = $_POST['Religion'];
$Marital_Status = $_POST['Marital_status'];
$Gender = $_POST['Gender'];
$Profession = $_POST['Profession'];
$A_date = $_POST['A_date'];
$D_name = $_POST['D_name'];
$email = $_POST['email'];
$CNI_Number = $_POST['CNI_number'];
$Retrievement_date = $_POST['Retrievement_date'];
$Relationship_with_deceased = $_POST['Relationship_with_deceased'];
$Telephone = $_POST['Telephone'];
$msg = 'Please check date entry and retry'; 
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // code...
        header("Location: ../contact us.php?error=invalid_email=".$email);
        exit();
    }

$pdo = new PDO('mysql:host=localhost; port=3306; dbname=crud_db', 'root');
// see the "error" folders for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['C_name']) && isset($_POST['Religion']) && isset($_POST['Marital_status']) && isset($_POST['Gender']) && isset($_POST['Profession']) && isset($_POST['A_date']) && isset($_POST['D_name']) && isset($_POST['email']) && isset($_POST['CNI_number']) && isset($_POST['Retrievement_date']) && isset($_POST['Relationship_with_deceased']) && isset($_POST['Telephone'])) {

    $sql = "INSERT INTO c_booking (C_name, Religion, Marital_status, Gender, profession, Arr_date, D_name, Email, CNI_Number, Retrievement_date, Relationship_with_deceased, Telephone)
    VALUES (:C_name, :Religion, :Marital_status, :Gender, :Profession, :A_date, :D_name, :Email, :CNI_number, :Retrievement_date, :Relationship_with_deceased, :Telephone)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
    	':C_name' => $_POST['C_name'],
        ':Religion' => $_POST['Religion'],
        ':Marital_status' => $_POST['Marital_status'],
        ':Gender' => $_POST['Gender'],
        ':Profession' => $_POST['Profession'],
        ':A_date' => $_POST['A_date'],
        ':D_name' => $_POST['D_name'],
        ':Email' => $_POST['email'],
        ':CNI_number' => $_POST['CNI_number'],
        ':Retrievement_date' => $_POST['Retrievement_date'],
        ':Relationship_with_deceased' => $_POST['Relationship_with_deceased'],
        ':Telephone' => $_POST['Telephone'] 
    ));
    header("Location: ../corps entrance.php?message_send=success");
                exit();
}
?>


