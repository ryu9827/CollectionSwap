<?php

include_once 'match.php';
include_once 'dbh.inc.php';
//include_once 'bestmatch.php';
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
//lock the card when request is sent        
    function lockcard($cardid,$user_uid){
        $list = array();
        $list = explode(',', $cardid);
        foreach($list as $values){
        $sql = "UPDATE cards_status SET card_status = '0' WHERE card_id = '$values' AND user_uid = '$user_uid'";
        mysqli_query($conn, $sql);
        $time = time();
        $sql = "UPDATE card_status SET locked_time = '$time' WHERE user_uid = '$user_uid'";
        mysqli_query($conn, $sql);
        }
    }
    
    
    
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
    explode(',', $offerlist);
    
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>card set".$set_id."<br/>you need to offer:".$offerlist.
            "<br/>he/she can offer you: ".$misslist;
            
    $mail->sendEmail($email,$subject,$body);


  