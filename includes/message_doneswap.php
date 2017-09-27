<?php

include_once 'match.php';
include_once 'dbh.inc.php';
include_once 'match.php';

global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
// $user_uid = $_SESSION['u_uid'];   
// $msg_id = $_POST['message_id'];
 $user_uid = 'amy';
 $msg_id = '57';
 
  function swapdone($list = array(), $userid, $set_id){
   global $conn;   
     
  foreach($list as $values){    
    
     $sql = "DELETE FROM cards_status WHERE user_uid = '$userid' AND card_id = '$values' AND set_id = '$set_id'";
     mysqli_query($conn, $sql);
   }
  
 }
 
 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 $set_id = $row['set_id'];
 $ruid = $row['swap_uid'];
 $offerlist2 = explode(",",$row['offer_id']);
 $misslist2 = explode(",",$row['miss_id']);

 swapdone($offerlist2, $user_uid, $set_id);
 swapdone($misslist2, $user_uid, $set_id);
 swapdone($misslist2, $ruid, $set_id );
 swapdone($offerlist2, $ruid, $set_id );
 
 $sql = "UPDATE cards_status SET islocked = '0' WHERE user_uid IN ('$user_uid','$ruid' ) AND set_id = '$set_id'";
 mysqli_query($conn, $sql);
 
 $sql = "UPDATE messages SET status = '5' WHERE token = '$token'";
 mysqli_query($conn, $sql);
 


 
 //header('location:../setsManagement_messages.php'); 
