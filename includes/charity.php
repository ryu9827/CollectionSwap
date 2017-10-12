<?php
include 'dbh.inc.php';
include_once 'sendemail.inc.php';

//list extra card
function charitylist($user_uid){
    
    global $conn;
    $charity = array();
    
    $sql = "SELECT * FROM card_status WHERE user_uid = '$user_uid' AND card_status = '4'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $charitycard[] = $row['card_id'];
    }        
    return $charitycard;
}

function askForCharity($charity = array(), $set_id = '',$user_uid){
    global $conn;
    $provider = array();
    $list = array();
    foreach ($charity as $key => $value){
        $sql = "SELECT * FROM charity_card WHERE card_id = '$key' AND set_id = '$set_id' AND user_uid != '$user_uid'";
        $res = mysqli_query($conn, $sql);
     //   $list = array();
    
        while ($row = mysqli_fetch_assoc($res)) {
            if(!(in_array($row['user_uid'], $list))){
            $list[] = $row['user_uid']; 
           
            }
        }
  
    }
    $num = sizeof($list);
    if($num > 0){
    
    foreach($list as $uid){
         $cardidlist = array();
         $cardnamelist = array();
         $point = 0;
        foreach ($charity as $key => $value){
          
            $sql = "SELECT * FROM charity_card WHERE card_id = '$key' AND user_uid = '$uid' AND set_id = '$set_id'";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);
           // echo $num;
            if($num > 0){
              //  echo $key;
                $sql = "SELECT * FROM sets_cards WHERE card_id = '$key'";
                $res = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($res);
                $cardname = $row['card_name'];
                
                $cardnamelist[] = $cardname;
                $cardidlist[] = $key;
                $point += 10;
            }
        }
        $freecardname = implode(",",$cardnamelist);
        $freecardid = implode(",",$cardidlist);
        
       //get rating from database
    $sql = "SELECT * FROM rating WHERE user_uid = '$uid'";
    $res = mysqli_query($conn, $sql);
    $rate = mysqli_fetch_array($res);
    $good = $rate['good'];
    $normal = $rate['normal'];
    $bad = $rate['bad'];
    
    //get last login time from database
    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $res = mysqli_query($conn, $sql);
    $rate = mysqli_fetch_array($res);
    $lastlogin = $rate['lastlogin_time'];
    
    
    $provider[] = array('name'=>$uid,'cardid'=>$freecardid, 'cardname'=>$freecardname, 
        'good'=>$good, 'normal' =>$normal,'bad'=>$bad, 'lastlogin'=>$lastlogin, 'point'=>$point);
    }
    
    $test = array();
    foreach ($provider as $key2 => $row2) {
      
      $test[] = @$row['point'];
   
     }
     array_multisort($test, SORT_DESC, $provider);
     
     return $provider;
    
  }
  else return $provider;
  
}
//}
function charityManagement2($charity= array(), $user_uid='', $set_id =''){
  global $conn;
  $sql = "DELETE FROM charity_card WHERE user_uid = '$user_uid' AND set_id = '$set_id'";
  mysqli_query($conn, $sql);

     foreach ($charity as $key => $value){

      $sql = "INSERT INTO charity_card (card_id, set_id, user_uid,card_status) VALUES ('$key','$set_id', '$user_uid','$value')";
      mysqli_query($conn, $sql);

      } 
}

//if provider accept the request, the card will not be avaliable any more.
function acceptcharity($card_id,$provider_uid,$reciver_uid){
    
    global $conn;
    $sql = "DELETE FROM charity_card WHERE card_id = '$card_id' AND user_uid = '$provider_uid'";
    mysqli_query($conn, $sql);
    
    $sql = "DELETE FROM cards_status WHERE card_id = '$card_id' AND user_uid = '$provider_uid'";
    mysqli_query($conn, $sql);
    
    $sql = "SELECT * FROM users WHERE user_uid = '$provider_uid'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    $pemail = $row['user_email'];
    
    
    $sql = "SELECT * FROM users WHERE user_uid = '$reciver_uid'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    $remail = $row['user_email'];
    
    $mail = new sendemail();
    $subject = "Charity card accept";
    $body = "Dear".$first."：<br/>".$provider_uid."already accept your request, please contact him/her via email<br/>
            Email Address: ".$pemail;
    $mail->sendEmail($remail,$subject,$body);
    
}

//if provider reject the request, unlock the card
function rejectcharity($card_id,$provider_uid,$reciver_uid){
    
    
    $sql = "SELECT * FROM users WHERE user_uid = '$provider_uid'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    //$pemail = $row['user_email'];
    
    
    $sql = "SELECT * FROM users WHERE user_uid = '$reciver_uid'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    $remail = $row['user_email'];
    
    $mail = new sendemail();
    $subject = "Charity request accept";
    $body = "Dear".$first."：<br/> We are sorry that".$provider_uid."already reject your request";
    
    $mail->sendEmail($remail,$subject,$body);
    
}

//$charity = array('a001'=>1,'a002'=>0,'a003'=>1);
//$user_uid = 'amy';
//$set_id = 'a';
//charitymanagement($charity,$user_uid, $set_id);