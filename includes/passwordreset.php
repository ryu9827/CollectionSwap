<?php
if (isset($_POST['submit'])) {
    
include_once 'dbh.inc.php';
global $conn;

$verify = $_POST['verify'];

$sql = "SELECT * FROM users WHERE token = '$verify'";

$res= mysqli_query($conn, $sql); 

$row = mysqli_fetch_array($res); 

$user_uid = $row['user_uid'];

$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];

 if($pwd != $cpwd){
     header("Location: ../login.php?login=error");
    // exit();
      
 }
 else{
     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
     $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_uid = '$user_uid'";
     mysqli_query($conn, $sql);
     header("Location: ../login.php?login=reset successful");
 }
}
