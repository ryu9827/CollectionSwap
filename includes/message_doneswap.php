<?php

include_once 'match.php';
include_once 'dbh.inc.php';
include_once 'sendMatchRequest.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid'];   
 $msg_id = $_POST['message_id'];
 
 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $token = $row['token'];
 //$ruid = $row['swap_uid'];
 
 $sql = "UPDATE messages SET status = '5' WHERE token = '$token'";
 mysqli_query($conn, $sql);

 header('location:../setsManagement_messages.php'); 
