<?php


include_once 'db.php';

global $conn;

$user_uid = "amy";
$mark = "normal";

switch($mark):
    case "good": $addpoint = 3;
        break;
    case "normal": $addpoint = 2;
        break;
    case "bad": $addpoint = 1;
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