4<?php

include_once("dbh.inc.php");
global $conn;


$verify = stripslashes(trim($_GET['verify'])); 
$email = stripslashes(trim($_GET['email'])); 
$nowtime = time(); 
$sql = "SELECT * FROM users WHERE token = '$verify'";

$res= mysqli_query($conn, $sql); 

$row = mysqli_fetch_array($res); 

//echo $row['user_uid'];

if($row){   
    if($nowtime>$row['token_time']){ 

//24hour        
     $msg = 'the link is expired, please resend the email';    
     }
     
     else{    
      $user_uid = $row['user_uid'];
      $sql1 = "UPDATE users SET user_email = '$email' WHERE user_uid = '$user_uid'";   
      mysqli_query($conn, $sql1); 
     
        if(mysqli_affected_rows($conn)!=1) die(0)  ;      
       // $msg = 'active successfully';    
    }
}
 else{
     // $msg = 'error.';     
      } 
    // echo $msg;
 ?>






