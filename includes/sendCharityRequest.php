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
$charitylist = mysqli_real_escape_string($conn,$_POST['cardid']);
//$misslist =  mysqli_real_escape_string($conn,$_POST['miss']);
$charityname = mysqli_real_escape_string($conn,$_POST['cardname']);
//$missname = mysqli_real_escape_string($conn,$_POST['missname']);


$user_uid = $_SESSION['u_uid'];
$uid = $_SESSION['u_id'];

    
   function getemail($user_uid){ 
       global $conn;  
       $sql = "SELECT * FROM users WHERE user_uid = '$user_uid'";
       $res = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($res);
       $email = $row['user_email'];
       return $email;
   }

   $offerlist1 = explode(",", $charitylist);
   //$misslist1 = explode(",", $misslist);
      
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
    $body = "Dear ".$reciver_uid."：<br/>".$user_uid." send you a charity request <br/>card set: ".$set_name."<br/>you need to offer: ".$charityname;
        
    $mail->sendEmail($remail,$subject,$body);

   
   $regtime = time(); 
   $token = md5($user_uid.$reciver_uid.$reqtime); 
   
    

  //create new message for both user and reciver
   $time = date('d/m/Y H:i:s');
   $sql = "INSERT INTO messages (user_uid,swap_uid,swap_email,status,time,set_id,get_id,token,get_name,regtime) VALUES ('$user_uid','$reciver_uid','$uemail','7','$time','$set_id','$charitylist','$token','$charityname','$regtime')";
   mysqli_query($conn, $sql);
  
   $sql = "INSERT INTO messages (user_uid,swap_uid,swap_email,status,time,set_id,offer_id,token,offer_name,regtime) VALUES ('$reciver_uid','$user_uid','$remail','8','$time','$set_id','$charitylist','$token','$charityname','$regtime')";
   mysqli_query($conn, $sql);
   
   
   
  