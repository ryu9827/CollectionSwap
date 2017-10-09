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
        
 $user_uid = $_SESSION['u_uid'];   
 $msg_id = $_POST['message_id'];
// $user_uid = 'amy';
// $msg_id = '57';

 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 $set_id = $row['set_id'];
 $ruid = $row['swap_uid'];
 $offerlist2 = explode(",",$row['offer_id']);
 $misslist2 = explode(",",$row['get_id']);

  foreach($list as $values){    
    
     $sql = "DELETE FROM charity_card WHERE user_uid = '$userid' AND card_id = '$values' AND set_id = '$set_id'";
     mysqli_query($conn, $sql);
   }

 
 $sql = "SELECT * FROM users WHERE user_uid = '$ruid'";
 $res3 = mysqli_query($conn, $sql);
 $row3 = mysqli_fetch_assoc($res3);
 $rid = $row3['user_id'];
 

// $sql = "UPDATE cards_status SET islocked = '0' WHERE user_uid IN ('$user_uid','$ruid' ) AND set_id = '$set_id'";
// mysqli_query($conn, $sql);
 
 $sql = "UPDATE messages SET status = '13' WHERE token = '$token' AND user_uid = '$user_uid'";
 mysqli_query($conn, $sql);
 
 $sql = "UPDATE messages SET status = '14' WHERE token = '$token' AND user_uid = '$ruid'";
 mysqli_query($conn, $sql);
 
 
 header('location:../setsManagement_messages.php'); 
