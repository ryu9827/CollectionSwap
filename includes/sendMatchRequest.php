<?php

//include_once 'match.php'
include_once  'dbh.inc.php';
include_once 'sendemail.inc.php';
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
     global $conn;  
     $user_uid = $_SESSION['u_id'];
     
//lock the card when request is sent        
    function lockcard($cardid ,$user_uid){

        echo $user_uid;
        foreach($cardid as $values){
         //     $sql = "UPDATE users SET lastlogin_time = '$lastlogin' WHERE user_uid = '$uid'";
        $sql = "UPDATE cards_status SET card_status = '0' WHERE card_id = '$values' AND user_uid = '$user_uid'";
        $res = mysqli_query($conn, $sql);
       // echo $values."<br/>";
        
       echo mysqli_error($conn); 
        }
        $time = time();
        $sql = "UPDATE cards_status SET locked_time = '$time' WHERE user_uid = '$user_uid'";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn);
    }
    function updatemessage(){
        
    }
 
//      $reciver_uid = 'Tony';
//      $set_id = 'a';
//      $offerlist = array('a001','a002');
//      $misslist = array('a005','a006');
//get data from front-end    
    $reciver_uid = mysqli_real_escape_string($conn, $_POST['name']);
    $set_id = $_POST['set_id'];
    $offerlist = $_POST['offer'];
    $misslist =  $_POST['miss'];
    
   $sql = "SELECT * FROM users WHERE user_uid = '$reciver_uid'";
   $res = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($res);
   $email = $row['user_email'];
   
    $offer = implode(",",$offerlist);
    $miss =  implode(",",$misslist);

    //change card status when request is sent
  //  lockcard($offerlist, $user_uid);
      lockcard($offerlist, $reciver_uid);
    
  //  lockcard($misslist, $user_uid);
  //  lockcard($misslist, $reciver_uid);
   
    //send email to reciver
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear ".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>card set: ".$set_id."<br/>you need to offer: ".$offerlist.
            "<br/>he/she can offer you: ".$miss;
            
    $mail->sendEmail($email,$subject,$body);


  