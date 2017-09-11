<?php

include 'dbh.inc.php';

function search($table,$card_name, $status,$set_id){

  global $conn;  
  $sql = "SELECT * FROM $table WHERE card_name like '$card_name' AND set_id = '$set_id' AND card_status = '$status'";
  $res = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($res);
 
  return $num;

}

//$card_id = mysqli_real_escape_string($conn, $_POST['card_id']);
//$card_id = '%a001%';

$num1 = search('cards_status', $card_id,1,$set_id);
$num2 = search('cards_status', $card_id,2,$set_id);
$num3 = search('charity_card', $card_id,3,$set_id);


