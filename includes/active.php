<?php
include_once("dbh.inc.php");



$verify = stripslashes(trim($_GET['verify'])); 
$nowtime = time(); 
$sql = "SELECT * FROM users WHERE verify=0 AND token = '$verify'";

$res= mysqli_query($conn, $sql); 

$row = mysqli_fetch_array($res); 

//echo $row['user_uid'];

if($row){   
    if($nowtime>$row['token_time']){ 

//24hour        
     $msg = 'the link is expired, please login and send the email';    
     }
     
     else{    
      $uid = $row['user_uid'];
      $sql1 = "UPDATE users SET verify = 1 WHERE user_uid = '$uid'";   
      mysqli_query($conn, $sql1); 
      
      $sql = "INSERT INTO rating (user_uid ) VALUES ('$uid') ";
     
        if(mysqli_affected_rows($conn)!=1) die(0)  ;      
        $msg = 'active successfully';    
    }
}
 else{
      $msg = 'error.';     
      } 
     echo $msg;
 ?>



<!DOCTYPE HTML>
