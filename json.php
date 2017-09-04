<?php
$arr0 = array('status'=>'0','time'=>'9:00 AM, 14th, August, 2017','name'=>'Carol','offer'=>'1,2,3','get'=>'4,5,6'); 
$arr1 = array('status'=>'1','time'=>'10:00 AM, 14th, August, 2017','name'=>'Ben','offer'=>'1,2,3','get'=>'4,5,'); 
$arr2 = array('status'=>'2','time'=>'11:00 AM, 14th, August, 2017','name'=>'Adam','offer'=>'1,2','get'=>'4,5');
$arr3 = array('status'=>'3','time'=>'11:00 AM, 14th, August, 2017','name'=>'Delon','offer'=>'1,2','get'=>'4,5');
$arr4 = array('status'=>'4','time'=>'11:00 AM, 14th, August, 2017','name'=>'Erick','offer'=>'1,2','get'=>'4,5');
$array = array($arr0,$arr1,$arr2,$arr3,$arr4);
echo json_encode($array); 
?>