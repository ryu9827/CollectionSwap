<?php


include_once 'match.php';
include_once 'dbh.inc.php';
include_once 'rating.php';

global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
 date_default_timezone_set('NZ');
 
 $user_uid = $_SESSION['u_uid'];  
 $msg_id = $_POST['message_id'];
 $option = $_POST['options'];
// $user_uid = 'amy';
// $msg_id = 57;
// $option = '3';

 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $ruid = $row['swap_uid'];
 
 rating($ruid, $option);
 
 $newtime = date('d/m/Y H:i:s');

 $sql = "UPDATE messages SET status = '6',time = '$newtime' WHERE id = '$msg_id'";
 mysqli_query($conn, $sql);
 
//  header('location:../setsManagement_messages.php');