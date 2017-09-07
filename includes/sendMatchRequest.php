<?php

include 'match.php';
include 'dbh.inc.php';
include 'bestmatch.php';
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
 $user_uid = $_SESSION['u_id'];        
// $action = stripslashes(trim($_GET['act'])); 
 
//  error_log($action,3,'my-errors.log');
    $reciver_uid = $_GET['name'];
//    error_log($reciver_uid,3,'my-errors.log');
  //  $reciver_uid = $id;
    $count = 0;
    foreach($finallist as $subarray){
    $count += count($subarray);
    }
    for($i = 0;$i<$finallist;$i++){
        if($finallist[$i][0] == $reciver_uid){
            $offerlist = $finallist[$i][1];
            $misslist = $finallist[$i][2];
        }
    }
    
    
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>you need to offer:".$offerlist.
            "<br/>he/she can offer you: ".$misslist;
            
    $mail->sendEmail($email,$subject,$body);

