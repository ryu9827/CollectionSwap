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
        
$user_uid = $_SESSION['u_uid'];   
$msg_id = $_POST['message_id'];
//$user_uid = 'amy';
//$msg_id = 57;
 
 function swapreject($userid, $set_id){
    global $conn; 
//  foreach($list as $values){    
//     $sql = "UPDATE cards_status SET status = '$status' WHERE user_uid = '$userid' AND card_id = '$values' AND set_id = '$set_id'";
//     mysqli_query($conn, $sql);
//   }
  $sql = "UPDATE cards_status SET islocked = '0' WHERE user_uid = '$userid' AND set_id = '$set_id'";
  mysqli_query($conn, $sql);
 }
  
 
 
 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 $ruid = $row['swap_uid'];
 $set_id = $row['set_id'];
 echo $ruid;
 
 $sql = "UPDATE messages SET status = '2' WHERE token = '$token' AND user_uid = '$ruid'";
 mysqli_query($conn, $sql);
 $sql = "UPDATE messages SET status = '3' WHERE id = '$msg_id'";
 mysqli_query($conn, $sql);
 //$offerlist2 = explode(",",$row['offer_id']);
 //$misslist2 = explode(",",$row['miss_id']);
 
 swapreject( $user_uid, $set_id);
 swapreject($ruid, $set_id);

 $email = getemail2($ruid);
 
 $mail = new sendemail();
 $subject = "Your swap request has been REJECTED!";
 $body = "Dear ".$ruid."：<br/>Unfortunately, your previous swap request has been rejected by".$ruid.
         "We encourage you to try next match up that you are also interested.<br/>Good Luck!";
       
 $mail->sendEmail($email,$subject,$body);
 
 header('location:../setsManagement_messages.php');
