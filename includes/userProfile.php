<?php
include_once 'dbh.inc.php';
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
        
global $conn;

$email = $_POST['email'];
$user_uid = $_SESSION['u_id'];  

$email = mysqli_real_escape_string($conn, $_POST['email']);

//$sql =  "UPDATE users SET user_email = '$email' AND user_address = '$ads' AND user_postcode = 'postCode' WHERE user_uid = '$user_uid'";
//mysqli_query($conn, $sql);
 $token = md5($user_uid.$email); 
 $token_exptime = time()+60*60*24;
 
 $sql = "UPDATE users SET token = '$token' AND token_time = '$token_exptime' WHERE user_uid = '$user_uid'";
 mysqli_query($conn, $sql);
 
$mail = new sendemail();
$subject = "verify new email";
$body = "Dear ".$user_uid."：<br/>please click below link to verify your new email<br/>
     <a href='http://mysites/CS/pwdReset.php?verify=".$token."' target= '_blank'>http://mysites/CS/pwdReset.php?verify=".$token."</a>";
   
$mail->sendEmail($email,$subject,$body);