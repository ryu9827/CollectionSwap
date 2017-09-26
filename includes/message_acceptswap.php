<?php

include_once 'match.php';
include_once 'dbh.inc.php';
include_once 'sendemail.inc.php';
//include_once 'sendMatchRequest.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid'];   
 $msg_id = $_POST['message_id'];
// $user_uid = amy;
// $msg_id = 62;

 function getaddress($uname){
 $sql = "SELECT * FROM users WHERE user_uid = '$uname'";
 $res = mysqli_query($conn, $sql); 
 $row = mysqli_fetch_assoc($res);
 $address = $row['address'];
 return $address;
 }
 
 function getemail2($user_uid){ 
       global $conn;  
       $sql = "SELECT * FROM users WHERE user_uid = '$user_uid'";
       $res = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($res);
       $email = $row['user_email'];
       return $email;
   }

 
 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 $ruid = $row['swap_uid'];
 
 $address = getaddress($user_uid);
 $raddress = getaddress($ruid);
 
 $sql = "UPDATE messages SET status = '4' WHERE token = '$token'";
 mysqli_query($conn, $sql);
 
 $email = getemail2($ruid);
 $email = getemail2($user_uid);
 
 $mail = new sendemail();
 $subject = "Your swap request has been Accepted!";
 $body = "Dear ".$ruid."：<br/> Congratulations!<br/>Your swap request has been successfully accepted!<br/>Collection Set Name: "
         .$set_name."<br/>Offer: ".$missname."<br/>Demand: ".$offername."<br/>Applicant Username or Acceptant Username: ".$ruid.
         "<br/>Offer: ".$remails."<br/>Shipping details:<br/>Delivery address:  ".$address."<br/>";
 $mail->sendEmail($email,$subject,$body);
 
 $subject = "Swaping Details";
 $body = "Dear ".$user_uid."：<br/> Your already accept the swap request from user: ".$ruid."<br/>Collection Set Name: "
         .$set_name."<br/>Offer: ".$offername."<br/>Demand: ".$missname."<br/>Applicant Username or Acceptant Username: ".$ruid.
         "<br/>Offer: ".$remails."<br/>Shipping details:<br/>Delivery address:  ".$raddress."<br/>";
 $mail->sendEmail($email,$subject,$body);

 header('location:../setsManagement_messages.php');
