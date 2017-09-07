<?php

include_once 'match.php';
include_once 'dbh.inc.php';
//include_once 'bestmatch.php';
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
   // $user_uid = $_SESSION['u_id'];        

   // $reciver_uid = $_GET['name'];
    $reciver_uid = 'Bruce';
    echo $reciver_uid ;
    echo json_encode($finallist); 
    $count = 0;
    foreach($finallist as $subarray){
    $count += count($subarray);
    }
    for($i = 0;$i<$finallist;$i++){
        if($finallist[$i][0] == $reciver_uid){
            $offerlist = $finallist[$i][2];
            $misslist = $finallist[$i][3];
            echo $offerlist;
        }
    }
    
    
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>card set".$set_id."<br/>you need to offer:".$offerlist.
            "<br/>he/she can offer you: ".$misslist;
            
    $mail->sendEmail($email,$subject,$body);

