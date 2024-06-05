<?php

if(isset($_POST['submit'])) {
    require 'dbcon.inc.php';
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $confirmPass = $_POST['pwd'];
  if(empty($name) || empty($pass) || empty($email) || empty($confirmPass)) {
        header("Location: ../signup.php?error=emptyfieldname=" . $name . "&email=" . $email);
  }      
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=token_name(token)=".$name);
        exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
    header("Location: ../signup.php?error=invalidename".$name);
    exit();
  }
  else if($pass !== $confirmPass) {
        header("Location: ../signup.php?error-incompatiblepasswordcheck&name=" . $name . "&email" . $email);
        exit();
  }
  else {
        $sql = "SELECT name FROM user WHERE name=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result>0) {
                header("Location: ../signup.php?error=usertaken&email=" . $email);
                exit();
            }
            else {
                $sql = "INSERT INTO user(`name`,`pwd`,`email`) VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=usertaken");
                    exit();
                }
                else {
                    $hashed = password_hash($pass, PASSWORD_BCRYPT);
                    mysqli_stmt_bind_param($stmt,"sss", $name, $hashed, $email);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
            }
        }
  }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../signup.php");
    exit();
}



?>