<?php
session_start();
include "conn.php";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['login-submit'])) {
    
    $mailuid = test_input($_POST['uid']);
    $userType = test_input($_POST['userType']);
    $password = test_input($_POST['pwd']);

if(empty($mailuid) || empty($password)) {
    header("Location:login?error=emptyFields");
    exit();
} else {
    $sqlnew ="SELECT * FROM users WHERE emailSmsUsers=? OR uidSmsUsers=? AND confirmation=1;";
     $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sqlnew)) {
        header("Location:login?error=sqlerror");
        exit();
    } else {
        $sql ="SELECT * FROM users WHERE emailSmsUsers=? OR phone=? OR uidSmsUsers=? AND userType=? AND confirmation=1";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:login?error=Email_and_Username_not_thesame"); 
            exit();
        } else {
       
        mysqli_stmt_bind_param($stmt, "ssss", $mailuid, $mailuid, $mailuid, $userType);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row =  mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row["pwdSmsUsers"]);
            if($pwdCheck === false) {
                header("Location:login?passworderror=wrongPassword");
                exit();
            } elseif($pwdCheck === true) {
                $_SESSION["userSmsId"] = $row["idSmsUsers"];
                $_SESSION["userSmsUid"] = $row["uidSmsUsers"];
                $_SESSION["userType"] = $row["userType"];
                $_SESSION["request_id"] = $row["request_id"];
               // $_SESSION['timestamp'] = time();
                $_SESSION["emailSmsUid"] = $row["emailSmsUsers"];
                $_SESSION["phone"] = $row["phone"];
                $_SESSION["walletAmount"] = $row["wallet"];
                $_SESSION["confirmation"] = $row["confirmation"];
                // $_SESSION["userType"] = $row["userType"];
          
          
             header("Location: iconsms/dashboard?login=success");
             exit();
            } else {
                header("Location:login?newpassworderror=wrongnewPassword");
                exit();
            }
        } else {
            header("Location:login?error=NouserFound");
            exit();
        }
    }
}
}
}
 else {
    header("Location: ../index?notlogin");
    exit();
}