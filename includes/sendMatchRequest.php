<?php

//include_once 'match.php'
include_once  'dbh.inc.php';
include_once 'sendemail.inc.php';

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
date_default_timezone_set('NZ');

//      $reciver_uid = 'Bruce';
//     $set_id = '1';
//      $offerlist = '1,2';
//      $misslist = '1,2';
//get data from front-end
$reciver_uid = mysqli_real_escape_string($conn, $_POST['name']);
$set_id = mysqli_real_escape_string($conn,$_POST['set_id']);
$offerlist = mysqli_real_escape_string($conn,$_POST['offer']);
$misslist =  mysqli_real_escape_string($conn,$_POST['miss']);
$offername = mysqli_real_escape_string($conn,$_POST['offername']);
$missname = mysqli_real_escape_string($conn,$_POST['missname']);

//$offer = explode(",",$offername);
//$miss =  explode(",",$missname);

//date_default_timezone_set('NZ');     
    // $user_uid = $_SESSION['u_id'];
$user_uid = $_SESSION['u_uid'];
$uid = $_SESSION['u_id'];
     
//lock the card when request is sent        
    function lockcard($user_uid,$set_id, $card_list = array()){
        global $conn;  
    
        $time = time();
        foreach ($card_list as $value) {
            
        $sql = "UPDATE cards_status SET islocked = '1', locked_time = '$time' WHERE set_id = '$set_id' AND user_uid = '$user_uid' AND card_id = '$value'";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        }
     
    }
    
    function newmessage($user_uid,$swap_uid,$swap_email,$status,$set_id,$offer_id,$get_id,$token,$offername,$missname){
        global $conn;
        $time = date('d/m/Y H:i:s');
        $sql = "INSERT INTO messages (user_uid,swap_uid,swap_email,status,time,set_id,offer_id,get_id,token,offer_name,get_name) VALUES ('$user_uid','$swap_uid','$swap_email','$status','$time','$set_id','$offer_id','$get_id','$token','$offername','$missname')";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn);
    }
    
   function getemail($user_uid){ 
       global $conn;  
       $sql = "SELECT * FROM users WHERE user_uid = '$user_uid'";
       $res = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($res);
       $email = $row['user_email'];
       return $email;
   }

   $offerlist1 = explode(",", $offerlist);
   $misslist1 = explode(",", $misslist);
   
    //change card status when request is sent
    lockcard($user_uid,$set_id, $offerlist1);
    lockcard($user_uid,$set_id, $misslist1);
    lockcard($reciver_uid, $set_id, $offerlist1);
    lockcard($reciver_uid, $set_id, $misslist1);
      
    //get users and reciver email address   
    $uemail = getemail($user_uid);
    $remail = getemail($reciver_uid);
    
    //get set name
    $sql = "SELECT * FROM sets_exist WHERE set_id = '$set_id'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $set_name = $row['set_name'];
   
    //send email to reciver
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear ".$reciver_uid."：<br/>".$user_uid." send you a swap request <br/>card set: ".$set_name."<br/>you need to offer: ".$offername.
            "<br/>he/she can offer you: ".$missname;
            
    $mail->sendEmail($remail,$subject,$body);
    
   $sql = "UPDATE user_sets SET islocked = '1' WHERE user_id = '$uid'";
   mysqli_query($conn, $sql);
   
   $reqtime = time(); 
   $token = md5($user_uid.$reciver_uid.$reqtime); 
    

  //create new message for both user and reciver
   newmessage($user_uid, $reciver_uid, $remail,1, $set_id, $offerlist,$misslist, $token,$offername,$missname);
   newmessage($reciver_uid,$user_uid,$uemail,0, $set_id, $misslist,$offerlist, $token,$missname,$offername);


