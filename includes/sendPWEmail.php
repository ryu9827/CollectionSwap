<?php

if (isset($_POST['submit'])) {
include_once 'sendemail.inc.php';
include_once 'dbh.inc.php';

global $conn;

//$email = mysqli_real_escape_string($conn, $_POST['uid']);
$email = $_POST['uid'];

$sql = "SELECT * FROM users WHERE user_email = '$email'";
$res = mysqli_query($conn, $sql);
$num = mysqli_num_rows($res);
$result = mysqli_fetch_array($res);
$user_uid = $result['user_uid'];

$token = md5($user_uid); 

if($num > 0){
    $sql = "UPDATE users SET token= '$token' WHERE user_uid = '$user_uid'";
    mysqli_query($conn, $sql);
    
    $mail = new sendemail();
    $subject = "Password Reset";
    $body = "Dear ".$user_uid."：<br/>please click below link to reset your password<br/>
     <a href='http://mysites/CS/pwdReset.php?verify=".$token."' target= '_blank'>http://mysites/CS/pwdReset.php?verify=".$token."</a>";
   
     $mail->sendEmail($email,$subject,$body);
    // header("Location: ../forgetPwd.php?sendemail=error");
}
else{
   // header("Location: ../index.php?login=user not exist");
    exit();
   }
}
