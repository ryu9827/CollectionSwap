<?php

//include_once 'match.php'
include_once  'dbh.inc.php';
include_once 'sendemail.inc.php';

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}

//      $reciver_uid = 'Tony';
//      $set_id = 'a';
//      $offerlist = 'a001,a002';
//      $misslist = 'a005,a006';
//get data from front-end
$reciver_uid = mysqli_real_escape_string($conn, $_POST['name']);
$set_id = mysqli_real_escape_string($_POST['set_id']);
$offerlist = mysqli_real_escape_string($_POST['offer']);
$misslist =  mysqli_real_escape_string($_POST['miss']);
error_log($reciver_uid,$set_id,$offerlist,$misslist,3,my-errors.log);
//error_log($set_id,3,my-errors.log);
//error_log($offerlist,3,my-errors.log);
//error_log($misslist,3,my-errors.log);


$offer = explode(",",$offerlist);
$miss =  explode(",",$misslist);
date_default_timezone_set('NZ');     
    // $user_uid = $_SESSION['u_id'];
     $user_uid = 'amy';
//lock the card when request is sent        
    function lockcard($cardid = array() ,$user_uid){
        global $conn;  
        foreach($cardid as $values){
         //     $sql = "UPDATE users SET lastlogin_time = '$lastlogin' WHERE user_uid = '$uid'";
        $sql = "UPDATE cards_status SET card_status = '0' WHERE card_id = '$values' AND user_uid = '$user_uid'";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn); 
        }
        $time = time();
        $sql = "UPDATE cards_status SET locked_time = '$time' WHERE user_uid = '$user_uid'";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn);
    }
    
    function newmessage($user_uid,$swap_uid,$swap_email,$status,$set_id,$offer_id,$get_id,$msg_id){
        global $conn;
        $time = date('d/m/Y H:i:s');
        $sql = "INSERT INTO message (user_uid,swap_uid,swap_email,status,time,set_id,offer_id,get_id,msg_id) VALUES ('$user_uid','$swap_uid','$swap_email','$status','$time','$set_id','$offer_id','$get_id','$msg_id')";
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
 


    //change card status when request is sent
      lockcard($offer, $user_uid);
      lockcard($offer, $reciver_uid);
    
      lockcard($miss, $user_uid);
      lockcard($miss, $reciver_uid);
      
    //get users and reciver email address   
    $uemail = getemail($user_uid);
    $remail = getemail($reciver_uid);
   
    //send email to reciver
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear ".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>card set: ".$set_id."<br/>you need to offer: ".$offerlist.
            "<br/>he/she can offer you: ".$misslist;
            
    $mail->sendEmail($remail,$subject,$body);

    
//    newmessage($user_uid, $reciver_uid, $remail,1, $set_id, $offerlist,$misslist, 1);
//    newmessage($reciver_uid,$user_uid,$uemail,1, $set_id, $misslist,$offerlist, 1);

  