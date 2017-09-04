<?php


include 'match.php';
include 'dbh.inc.php';
 $want = array('a001','a002');
 $extra= array('a005','a006');

 
// $cardstatus = 1;

 
 $res = matchup($want,'1'); 
 $result = $res;

 $res2 = matchup($extra,'2');

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
    
    $sql = "SELECT * FROM rating WHERE user_uid = '$userid'";
    $res = mysqli_query($conn, $sql);
    $rate = mysqli_fetch_array($res);
    $good = $rate['good'];
    $normal = $rate['normal'];
    $bad = $rate['bad'];
    
    $sql = "SELECT * FROM users WHERE user_uid = '$userid'";
    $res = mysqli_query($conn, $sql);
    $rate = mysqli_fetch_array($res);
    $lastlogin = $rate['lastlogin_time'];
    
    $list = array('name'=>$userid,'offer'=>$offer,'miss'=>$miss,'lastlogin'=>$lastlogin,'good'=>$good,'normal'=>$normal,'bad'=>$bad);
    $finallist[] = $list;
  
}
    echo json_encode($finallist); 
     
