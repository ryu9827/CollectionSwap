<?php
include_once 'dbh.inc.php';
//include_once 'bestmatch.php';
ob_start(); 
session_start();
global $conn;
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
$user_uid = $_SESSION['u_id'];

function accept(){
    $mail = new sendemail();
    $subject = "Request Accepted";
    $body = "Dear".$user_uid."：<br/>".$user_uid."send you a swap request <br/>card set".$set_id."<br/>you need to offer:".$offerlist.
            "<br/>he/she can offer you: ".$misslist;
            
    $mail->sendEmail($email,$subject,$body);
}

function reject(){
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>card set".$set_id."<br/>you need to offer:".$offerlist.
            "<br/>he/she can offer you: ".$misslist;         
    $mail->sendEmail($email,$subject,$body);
    
    $extralist = $_POST['extra'];
    $list = explode(',', $extralist);
    foreach($list as $values){
    $sql = "UPDATE cards_status SET card_status = '1' WHERE card_id = '$values' AND user_uid = '$user_uid'";
    mysqli_query($conn, $sql);
        }
    
    $wantlist = $_POST['miss'];
    $list = explode(',', $wantlist);
    foreach($list as $values){
    $sql = "UPDATE cards_status SET card_status = '2' WHERE card_id = '$values' AND user_uid = '$user_uid'";
    mysqli_query($conn, $sql);
        }
}

