<?php

include_once  'dbh.inc.php';

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}

global $conn;   

$user_uid = $_SESSION['u_id'];
$msglist = array();
//$user_uid = 'amy';
$sql = "SELECT * FROM message WHERE user_uid = '$user_uid' AND status IN（'2','3','6'） ORDER BY time";
$res = mysqli_query($conn, $sql);
$num = mysqli_num_rows($res);
if($num>0){
while($row = mysqli_fetch_assoc($res)){
    
    $msg = array('swap_uid' => $row['swap_uid'],'email' => $row['swap_email'],'status' => $row['time'],'time' => $row['time'],
                'set_id' => $row['set_id'],'offer_id' => $row['offer_id'],'msg_id' => $row['get_id']
               );
    $msglist[] = $msg;
}
}
   echo json_encode($msglist); 
