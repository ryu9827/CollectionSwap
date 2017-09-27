<?php


include_once 'dbh.inc.php';

//$user_uid ="amy";
//$mark = "normal";

function rating($user_uid, $option){

global $conn;
switch($option):
    case '1': $addpoint = 3;$mark = 'good';
        break;
    case '2': $addpoint = 2;$mark = 'noraml';
        break;
    case '3': $addpoint = 1;$mark = 'bad';
        break;
    default:$addpoint = 0;
        break;
endswitch;

//get current marks of the user
$sql = "SELECT * FROM rating WHERE user_uid = '$user_uid'";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($res)) {
    
    $total = $row['total']+$addpoint;
    $count = $row['count']+1;
    $aver = $total/$count;
    $num = $row[$mark]+1;

}

//update user's marks
$sql = "UPDATE rating SET $mark = '$num',average = '$aver',count = '$count',total = '$total' WHERE user_uid = '$user_uid'";
$res = mysqli_query($conn, $sql);
if(!$res){
    echo mysqli_error($conn);
}
}
