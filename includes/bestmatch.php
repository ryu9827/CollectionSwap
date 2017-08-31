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
    
    $list = array($userid,$offer,$miss);

    $finallist[] = $list;
  
}
//echo sizeof($finallist);
for($i = 0;$i < sizeof($finallist);$i++ ){
    for($j = 0; $j<3 ;$j++){
        echo $finallist[$i][$j].'<br/>';
    }
    
}
  
     
