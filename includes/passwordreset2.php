<?php

include_once 'dbh.inc.php';
global $conn;

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid']; 

// $uid = mysqli_real_escape_string($conn, $_POST['uid']);
 $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
 $newpwd = mysqli_real_escape_string($conn, $_POST['newpwd']);
 $cpwd = mysqli_real_escape_string($conn, $_POST['pwd2']);
 
 $sql = "SELECT * FROM users WHERE user_uid = '$user_uid'";
  $row = mysqli_fetch_assoc($result);
  
 $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
	if ($hashedPwdCheck == false) {
                     echo 'wrong password';
					// header("Location: ../index.php?login=error");
        exit();}
        else{
            if(!($newpwd == $cpwd)){
                 echo 'wrong password';
                 // header("Location: ../index.php?login=error");
                 exit();
            }
            else{
             $hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);
             $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_uid = '$user_uid'";
              mysqli_query($conn, $sql);   
            }
        }

 