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

//$user_uid = 'amy';
//$msg_id = 57;
 

 

  
 
 $newtime = date('d/m/Y H:i:s');
 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 $ruid = $row['swap_uid'];
 $set_id = $row['set_id'];
 $offerlist_reject = $row['offer_id'];
 //$getlist_reject = $row['get_id'];
 
 $offerlist_reject2 = explode(",", $offerlist_reject);
 //$getlist_reject2 = explode(",", $getlist_reject);
 
 $set_name = getsetname($set_id);
 
 
 
  foreach($rejectlist as $values){    
     $sql = "UPDATE charity_card SET status = '4' WHERE user_uid = '$user_uid' AND card_id = '$values' AND set_id = '$set_id'";
     mysqli_query($conn, $sql);
   }
 //echo $ruid;
 
 $sql = "UPDATE messages SET status = '11', time = '$newtime' WHERE token = '$token' AND user_uid = '$ruid'";
 mysqli_query($conn, $sql);
 $sql = "UPDATE messages SET status = '10',  time = '$newtime' WHERE id = '$msg_id'";
 mysqli_query($conn, $sql);
 //$offerlist2 = explode(",",$row['offer_id']);
 //$misslist2 = explode(",",$row['miss_id']);
 
 
 $sql = "SELECT * FROM users WHERE user_uid = '$ruid'";
 $res3 = mysqli_query($conn, $sql);
 $row3 = mysqli_fetch_assoc($res3);
 $rid = $row3['user_id'];
 

 $email = getemail2($ruid);
 
 $mail = new sendemail();
 $subject = "Your swap request has been REJECTED!";
 $body = "Dear ".$ruid."：<br/>Unfortunately, your previous swap request has been rejected by".$ruid."<br/>setname: ".$set_name.
         "<br/>We encourage you to try next match up that you are also interested.<br/>Good Luck!";
       
 $mail->sendEmail($email,$subject,$body);
 
 header('location:../setsManagement_messages.php');
