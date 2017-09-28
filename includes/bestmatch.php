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
 

 function requestList($user_uid,$status,$set_id){
     global $conn;
     $rlist = array();
     $sql = "SELECT * FROM cards_status WHERE user_uid = '$user_uid' AND card_status = '$status' AND set_id = '$set_id' AND islocked = '0'";
     $res = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($res)){
         $rlist[] = $row['card_id'];
         
     }
     return $rlist;
 }
 //get set name
 // $set_id = '1';
 $set_id = stripslashes(trim($_GET['set_id'])); 
 $sql = "SELECT * FROM sets_exist WHERE set_id = '$set_id'";
 $res = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($res);
 $set_name = $row['set_name'];
 
 $sql = "SELECT * FROM user_sets WHERE user_id = '$user_uid' AND set_id = '$set_id'";
 $res2 = mysqli_query($conn, $sql);
 $row2 = mysqli_fetch_assoc($res2);
 
 $finallist = array();
 
 if($row2['islocked'] == 0){

 $want = requestList($user_uid,'2',$set_id);
 $extra = requestList($user_uid,'1',$set_id); 
// $want = array('5','6');
// $extra = array('1','2');



 $result = matchup($want,'1',$user_uid,$set_id); 
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



//create an array to store match result
foreach($result as $key => $value){
    
    $userid = $key;
    
    $offerlist = showlist($want,$userid,'1');
    $misslist = showlist($extra,$userid,'2');
     $offernamelist = array();
     $missnamelist = array();
    
    foreach($offerlist as $value){
          $sql = "SELECT * FROM sets_cards WHERE card_id = '$value' AND set_id = '$set_id'";
          $res = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($res);
          $offernamelist[]= $row['card_name'];
       // $offernamelist[] = getCardname($value, $set_id);
         
    }
    
    foreach($misslist as $value){
          $sql = "SELECT * FROM sets_cards WHERE card_id = '$value' AND set_id = '$set_id'";
          $res = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($res);
          $missnamelist[]= $row['card_name'];
    }
    
    $offer = implode(",",$offerlist);
    $miss =  implode(",",$misslist);
    $offername = implode(",",$offernamelist);
    $missname = implode(",",$missnamelist);
    
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
    
    $list = array('name'=>$userid,'setname'=>$set_name,'offer'=>$offer,'offername'=>$offername,'miss'=>$miss,'missname'=>$missname,'lastlogin'=>$lastlogin,'good'=>$good,'normal'=>$normal,'bad'=>$bad);
    $finallist[] = $list;
  
};
   echo json_encode($finallist); 
   
 }
 
 else{
    $finallist = array('status'=>'locked');
    echo json_encode($finallist);
 }


?>
