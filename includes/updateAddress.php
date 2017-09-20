<?php


include_once 'dbh.inc.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid'];    

$ads = $_POST['address'];
$sql = "UPDATE users SET address = '$ads' WHERE user_uid = '$user_uid'";
mysqli_query($conn, $sql);
header("Location: ../profile.php");