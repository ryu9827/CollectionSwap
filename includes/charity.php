<?php
include 'dbh.inc.php';
include_once 'sendemail.inc.php';

//list extra card
function charitylist($user_uid){
    
    global $conn;
    $charity = array();
    
    $sql = "SELECT * FROM card_status WHERE user_uid = '$user_uid' AND card_status = '2'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $charitycard[] = $row['card_id'];
    }        
    return $charitycard;
}

//upadte charity card to database
function charitymanagement($charity= array(), $user_uid='', $set_id=''){
global $conn;

foreach ($charity as $key => $value){
    
    $card_id = $key;
   
    $sql = "SELECT * FROM charity_card WHERE user_uid = '$user_uid' AND card_id = '$card_id'";
    $res = mysqli_query($conn,$sql);
   
    $row = mysqli_num_rows($res);
     
    if($row > 0){
        $result = mysqli_fetch_array($res);
        if(!($value == $result['status'])){
            $sql = "DELETE FROM charity_card WHERE card_id = '$card_id' AND user_uid = '$user_uid'";
            mysqli_query($conn, $sql);
        }
    }
    
    else{
    if($value == 4){
    $sql = "INSERT INTO charity_card (card_id, set_id, user_uid,status) VALUES ('$key','$set_id', '$user_uid','$value')";
    mysqli_query($conn, $sql);
    
   
      }
    }
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

$charity = array('a001'=>1,'a002'=>0,'a003'=>1);
$user_uid = 'amy';
$set_id = 'a';
charitymanagement($charity,$user_uid, $set_id);