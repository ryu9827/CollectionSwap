<?php
if (isset($_POST['submit'])) {
    
include_once 'dbh.inc.php';
global $conn;

$verify = stripslashes(trim($_GET['verify'])); 

$sql = "SELECT * FROM users WHERE token = '$verify'";

$res= mysqli_query($conn, $sql); 

$row = mysqli_fetch_array($res); 

$user_uid = $row['user_uid'];

echo $user_uid;
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

 if($pwd != $cpwd){
     exit();
 }
 else{
     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
     $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_uid = '$user_uid'";
     mysqli_query($conn, $sql);
     header("Location: ../login.php?login=reset successful");
 }
}
