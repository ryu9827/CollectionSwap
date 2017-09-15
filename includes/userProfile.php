<?php
include_once 'dbh.inc.php';
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
        
global $conn;

$user_uid = $_SESSION['u_id'];        
$email = mysqli_real_escape_string($conn, $_POST['email']);
$ads = mysqli_real_escape_string($conn, $_POST['address']);

$sql =  "UPDATE users SET user_email = '$email' AND user_address = '$ads' WHERE user_uid = '$user_uid'";
mysqli_query($conn, $sql);