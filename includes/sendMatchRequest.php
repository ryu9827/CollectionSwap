<?php

//include_once 'match.php'
include_once  'dbh.inc.php';
include_once 'sendemail.inc.php';

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}

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

//$offer = explode(",",$offerlist);
//$miss =  explode(",",$misslist);

date_default_timezone_set('NZ');     
    // $user_uid = $_SESSION['u_id'];
$user_uid = $_SESSION['u_uid'];
     
//lock the card when request is sent        
    function lockcard($user_uid,$set_id){
        global $conn;  
    
        $time = time();
        $sql = "UPDATE cards_status SET card_status = '0', locked_time = '$time' WHERE set_id = '$set_id' AND user_uid = '$user_uid'";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn); 
     
    }
    
    function newmessage($user_uid,$swap_uid,$swap_email,$status,$set_id,$offer_id,$get_id,$msg_id){
        global $conn;
        $time = date('d/m/Y H:i:s');
        $sql = "INSERT INTO messages (user_uid,swap_uid,swap_email,status,time,set_id,offer_id,get_id,msg_id) VALUES ('$user_uid','$swap_uid','$swap_email','$status','$time','$set_id','$offer_id','$get_id','$msg_id')";
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
    lockcard($user_uid,$set_id);
    lockcard($reciver_uid, $set_id);
      
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

    
   newmessage($user_uid, $reciver_uid, $remail,1, $set_id, $offerlist,$misslist, 1);
   newmessage($reciver_uid,$user_uid,$uemail,1, $set_id, $misslist,$offerlist, 1);


