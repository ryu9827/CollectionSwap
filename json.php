<?php
$arr0 = array('order'=>'0','message_id'=>'0','status'=>'0','time'=>'9:00 AM, 14th, August, 2017','name'=>'Carol','email'=>'carol@gmail.com','set'=>'All Blacks(Weet-Bix)','offer'=>'1,2,3','get'=>'4,5,6'); 
$arr1 = array('order'=>'1','message_id'=>'1','status'=>'1','time'=>'10:00 AM, 14th, August, 2017','name'=>'Ben','email'=>'ben@gmail.com','set'=>'NBA Stars','offer'=>'1,2,3','get'=>'4,5,'); 
$arr2 = array('order'=>'2','message_id'=>'2','status'=>'2','time'=>'11:00 AM, 14th, August, 2017','name'=>'Adam','email'=>'adam@gmail.com','set'=>'All Blacks(Weet-Bix)','offer'=>'1,2','get'=>'4,5');
$arr3 = array('order'=>'3','message_id'=>'3','status'=>'3','time'=>'11:00 AM, 14th, August, 2017','name'=>'Delon','email'=>'delon@gmail.com','set'=>'NBA Stars','offer'=>'1,2','get'=>'4,5');
$arr4 = array('order'=>'4','message_id'=>'4','status'=>'4','time'=>'11:00 AM, 14th, August, 2017','name'=>'Erick','email'=>'erick@gmail.com','set'=>'All Blacks(Weet-Bix)','offer'=>'1,2','get'=>'4,5');
$array = array($arr0,$arr1,$arr2,$arr3,$arr4);
echo json_encode($array); 
?>