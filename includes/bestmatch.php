<?php
include 'match.php';
include 'dbh.inc.php';
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_id'];        
 $action = $_GET('act');
 
 $want = array('a001','a002');
 $extra= array('a005','a006');


 $res = matchup($want,'1',$user_uid); 
 $result = $res;

 $res2 = matchup($extra,'2',$user_uid);

 //Computes the intersection of arrays
 foreach($res2 as $key => $value){
     if (key_exists($key, $result)){
         $result[$key]+=$value;
     }
 }

 
foreach($result as $key => $value){
    if (!key_exists($key, $res2)){
        unset($result[$key]);
    }
}

arsort($result);

$finallist = array();

//create an array to store match result
foreach($result as $key => $value){
    
    $userid = $key;
    
    $offerlist = showlist($want,$userid,'1');
    $misslist = showlist($extra,$userid,'2');
    
    $offer = implode(",",$offerlist);
    $miss =  implode(",",$misslist);
    
    //get rating from database
    $sql = "SELECT * FROM rating WHERE user_uid = '$userid'";
    $res = mysqli_query($conn, $sql);
    $rate = mysqli_fetch_array($res);
    $good = $rate['good'];
    $normal = $rate['normal'];
    $bad = $rate['bad'];
    
    //get last login time from database
    $sql = "SELECT * FROM users WHERE user_uid = '$userid'";
    $res = mysqli_query($conn, $sql);
    $rate = mysqli_fetch_array($res);
    $lastlogin = $rate['lastlogin_time'];
    
    $list = array('name'=>$userid,'offer'=>$offer,'miss'=>$miss,'lastlogin'=>$lastlogin,'good'=>$good,'normal'=>$normal,'bad'=>$bad);
    $finallist[] = $list;
  
}
if($action == 'getJSON'){
    echo json_encode($finallist); 
     
}

else if($action == ''){
    $reciver_uid = $id;
    $row = count($finallist, 1);
    
    
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>offer:".$offerlist.
            "<br/>miss: ".$misslist;
            
    $mail->sendEmail($email,$subject,$body);
    
}
