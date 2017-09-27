<?php

include_once 'match.php';
include_once 'dbh.inc.php';
include_once 'sendemail.inc.php';
include_once 'match.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
 date_default_timezone_set('NZ');
 
 $user_uid = $_SESSION['u_uid'];   
 $msg_id = $_POST['message_id'];



 $newtime = date('d/m/Y H:i:s');
 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 $ruid = $row['swap_uid'];
 $offername2 = $row['offer_name'];
 $getname2 = $row['get_name'];
 $set_id = $row['set_id'];
 $swap_email = $row['swap_email'];
 
 $//offerlist3 = explode(",", $offerlist2);
 $//getlist3 = explode(",",$getlist2);
 
 $set_name = getsetname($set_id);
 
 
 $address = getaddress($user_uid);
 $raddress = getaddress($ruid);
 
 $sql = "UPDATE messages SET status = '4',time = '$newtime' WHERE token = '$token'";
 mysqli_query($conn, $sql);
 
 $remail = getemail2($ruid);
 $email = getemail2($user_uid);
 
 $mail = new sendemail();
 $subject = "Your swap request has been Accepted!";
 $body = "Dear ".$ruid."：<br/> Congratulations!<br/>Your swap request has been successfully accepted!<br/>Collection Set Name: "
         .$set_name."<br/>Offer: ".$getname2."<br/>Demand: ".$offername2."<br/>Applicant Username or Acceptant Username: ".$ruid.
         "<br/>Email: ".$email."<br/>Shipping details:<br/>Delivery address:  ".$address."<br/>";
 $mail->sendEmail($swap_email,$subject,$body);
 
 $subject = "Swaping Details";
 $body = "Dear ".$user_uid."：<br/> Your already accept the swap request from user: ".$ruid."<br/>Collection Set Name: "
         .$set_name."<br/>Offer: ".$offername2."<br/>Demand: ".$getname2."<br/>Applicant Username or Acceptant Username: ".$ruid.
         "<br/>Email: ".$swap_email."<br/>Delivery address:  ".$raddress."<br/>";
 $mail->sendEmail($email,$subject,$body);

 header('location:../setsManagement_messages.php');