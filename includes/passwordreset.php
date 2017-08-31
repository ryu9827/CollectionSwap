<?php

$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

 if($pwd != $cpwd){
     exit();
 }
 else{
     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
     $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_uid = '$user_uid'";
     mysqli_query($conn, $sql);
 }