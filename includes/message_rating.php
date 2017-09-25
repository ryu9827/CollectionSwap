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
        
 $user_uid = $_SESSION['u_uid'];  

 $sql = "SELECT * FROM messages WHERE id = '$msg_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $swapuid = $row['swapuid'];
 
 rating($swapuid, $mark);
