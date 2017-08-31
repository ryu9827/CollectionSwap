<?php
include 'dbh.inc.php';

//find users from database that can offer/need cards and sorting the list
function matchup($cardlist = array(),$cardstatus='' ){

  global $conn;
  $extralist = array();
  $mark = 10;
 
  
  for($i = 0; $i < sizeof($cardlist); $i++){
       $card_id = $cardlist[$i];
      
       
        $res = mysqli_query($conn, "SELECT user_uid FROM cards_status WHERE card_id = '$card_id' AND card_status = '$cardstatus'");
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

   
  
