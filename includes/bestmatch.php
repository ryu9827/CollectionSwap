<?php
include_once 'match.php';
include_once 'dbh.inc.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid'];        

// $want = cardlist($user_uid, '2', $set_id);
// $extra= cardlist($user_uid, '1', $set_id);
 function requestList($user_uid,$status,$set_id){
     global $conn;
     $sql = "SELECT * FROM cards_status WHERE user_uid = '$user_uid' AND card_status = '$status' AND set_id = '$set_id'";
     $res = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($res)){
         $rlist[] = $row['card_id'];
         
     }
     return rlist;
 }
 
 $want = requestList($user_uid,2,$set_id);
 $extra = requestList($user_uid,1,$set_id);
//$want = array('a001','a002');
//$extra = array('a005','a006');
 $set_id = '1';

 $res = matchup($want,'1',$user_uid,$set_id); 
 $result = $res;

 $res2 = matchup($extra,'2',$user_uid,$set_id);

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
    
    $list = array('name'=>$userid,'setid'=>$set_id,'offer'=>$offer,'miss'=>$miss,'lastlogin'=>$lastlogin,'good'=>$good,'normal'=>$normal,'bad'=>$bad);
    $finallist[] = $list;
  
};
   echo json_encode($finallist); 


?>