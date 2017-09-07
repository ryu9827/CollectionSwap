<?php

$action=$_POST['act'];

if ($action=='sendRequest1'){
// $name = $_POST['name'];
// error_log($name,3,'my-errors.log');
// $set_id = $_POST['set_id'];
// error_log($set_id,3,'my-errors.log');
$name = $_POST['name'];
error_log($name,3,'my-errors.log');
$set_id = $_POST['set_id'];
error_log($set_id,3,'my-errors.log');
}
else if($action == 'sendRequest'){
    $reciver_uid = $_POST['name'];
    error_log($reciver_uid,3,'my-errors.log');
  //  $reciver_uid = $id;
    $count = 0;
    foreach($finallist as $subarray){
    $count += count($subarray);
    }
    for($i = 0;$i<$finallist;$i++){
        if($finallist[$i][0] == $reciver_uid){
            $offerlist = $finallist[$i][1];
            $misslist = $finallist[$i][2];
        }
    }
    
    
    $mail = new sendemail();
    $subject = "New Swap Request";
    $body = "Dear".$reciver_uid."：<br/>".$user_uid."send you a swap request <br/>you need to offer:".$offerlist.
            "<br/>he/she can offer you: ".$misslist;
            
    $mail->sendEmail($email,$subject,$body);
    
}
?>