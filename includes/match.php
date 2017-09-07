<?php
include_once 'dbh.inc.php';

//find users from database that can offer/need cards and sorting the list
function matchup($cardlist = array(),$cardstatus='',$user_uid='',$set_id ){

  global $conn;
  $extralist = array();
  $mark = 10;
 
  
  for($i = 0; $i < sizeof($cardlist); $i++){
       $card_id = $cardlist[$i];
      
       
        $res = mysqli_query($conn, "SELECT user_uid FROM cards_status WHERE card_id = '$card_id' AND card_status = '$cardstatus' AND set_id = '$set_id' AND user_uid!='$user_uid'");
       while ($row= mysqli_fetch_array($res))
	{  
                $uid = $row['user_uid'];
		if (key_exists($uid, $extralist)){
                    $extralist[$uid] += $mark;
                }
                else {
                    $extralist[$uid] = $mark;  
                }
	}
        
 }
        return $extralist;
   
  }

  //list which card that the users can offer/need
  function showlist($want = array(),$userid='',$cardstatus=''){
     
    global $conn;  
    $offerlist = array();
    
    for($i = 0; $i < sizeof($want); $i++){
      
         $cardid = $want[$i]; 
         
         $res = mysqli_query($conn,"SELECT * FROM cards_status WHERE user_uid = '$userid' AND card_id= '$cardid' AND card_status = '$cardstatus'");
         $resultCheck = mysqli_num_rows($res);
    
         if($resultCheck>0){
          $offerlist[] = $cardid;
      }
     }
  
     return $offerlist;
  }
  
  
 function usercard($user_uid,$card_status,$set_id){
 $sql = "SELECT * FROM cards_status WHERE user_uid = '$user_uid' AND card_status = '$card_status' AND set_id = '$set_id'";
 $res = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($res)){
     $array[]=$row['card_id'];
   }
 return $array;
 }

   
  
