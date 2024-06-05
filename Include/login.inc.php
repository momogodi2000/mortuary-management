<?php

if(isset($_POST['submit'])) {
    require 'dbcon.inc.php';
    $password = $_POST['password'];
    $email = $_POST['email'];
    if(empty($password) || empty($email)) {
        header("Location: ../login.php?loginerror=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM user WHERE name=? OR email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?loginerror-sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss",  $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            if($row) {
                $dbpass = $row['pwd'];
                $pwdcheck = password_verify($password, $dbpass);
                if($pwdcheck = false) {
                    header("Location: ../login.php?error=wrongpassword".$pwdcheck);
                    exit();
                }
                else if($pwdcheck = true) {
                    session_start();
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['name'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_pwd'] = $row['pwd'];
                    $u_id = $_SESSION['u_id'];
                    header("Location: ../index.php?Login=success");
                    exit();
                }
            }
            else {
                header("Location: ../login.php?error=User Not Found!");
                exit();
            }
        }
    }
}
else {
    header("Location: ../login.php");
    exit();
}
?>