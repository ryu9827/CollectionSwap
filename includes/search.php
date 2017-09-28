<?php

include 'dbh.inc.php';

function search($table,$card_id, $status,$set_id){

  global $conn;  
  $sql = "SELECT * FROM $table WHERE card_id = '$card_id' AND set_id = '$set_id' AND card_status = '$status'";
  $res = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($res);
 
  return $num;

}

$set_id = $_GET['set_id'];
//$set_id = '1';

$searchresult = array();

$sql = "SELECT * FROM sets_cards WHERE set_id = '$set_id'";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    $cardinfo = array();
    $card_id = $row['card_id'];
    $card_name = $row['card_name'];
    $card_img = $row['card_images'];
    //echo $card_id;
    
    $extranum = search('cards_status', $card_id,1,$set_id);
    $missnum = search('cards_status', $card_id,2,$set_id);
    $charitynum = search('charity_card', $card_id,4,$set_id);
    $cardinfo = array('card_id'=>$card_id,'card_name'=>$card_name,'card_img'=>$card_img,
        'extranum'=>$extranum, 'missnum'=>$missnum, 'charitynum'=>$charitynum);
    $searchresult[] = $cardinfo;
    
}

echo json_encode($searchresult);




