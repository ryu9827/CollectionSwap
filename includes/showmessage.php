<?php

include_once  'dbh.inc.php';

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}

global $conn;   

$user_uid = $_SESSION['u_uid'];
$msglist = array();
//$user_uid = 'amy';
$sql = "SELECT * FROM messages WHERE user_uid = '$user_uid' AND status IN('0','1','4','5') ORDER BY time";
$res = mysqli_query($conn, $sql);
$num = mysqli_num_rows($res);


if($num > 0){
$row = mysqli_fetch_assoc($res);
$set_id = $row['set_id'];
$sql = "SELECT * FROM sets_exist WHERE set_id = '$set_id'";
$res2 = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_assoc($res2);
$set_name = $row2['set_name'];
//echo mysqli_num_rows($res);
while($row){
    
    $msg = array('swap_uid' => $row['swap_uid'],'email' => $row['swap_email'],'status' => $row['status'],'time' => $row['time'],
                'set_id' => $row['set_id'],'set_name' => $set_name,'offer_id' => $row['offer_id'], 'get_id' =>$row['get_id'], 'msg_id' => $row['id']
               );
    $msglist[] = $msg;
}
}
   echo json_encode($msglist); 
