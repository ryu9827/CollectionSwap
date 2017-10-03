<?php

include_once 'charity.php';
include_once 'dbh.inc.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid']; 
  $set_id = $_GET['set_id']; 
 
 $obj = $_POST['post_json'];
 var_dump($_POST);
// $charitylist =json_decode($obj,true);
//$set_id = 1;
//$charitylist = array('1'=>4, '2'=>4,'4'=>4);
 
 $sql = "SELECT * FROM messages WHERE user_uid = '$user_uid' AND status IN('8','9','11','13','15')";
 $res = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($row);
 if($num > 0){
     while($row = mysqli_fetch_assoc($res)){
         
             $nowtime = time();
             $timelimit = $nowtime - $row['regtime'];
             
             if($timelimit < 60*60*24*7){
             $finallist = array('status'=>'locked');
             break;
             }
         
         else{
             $finallist = askForCharity($charitylist,$set_id);
         }
         
         
     }
 }
 else{
     $finallist = askForCharity($charitylist,$set_id);
 }
  

echo json_encode($finallist); 

