<?php

include_once 'dbh.inc.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid'];    

$postcode = $_POST['postCode'];
$sql = "UPDATE users SET user_postcode = '$postcode' WHERE user_uid = '$user_uid'";
mysqli_query($conn, $sql);
echo "update successfully";

//header("Location: ../profile.php");

