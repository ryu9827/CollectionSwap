<?php
	include_once 'includes/header.php';
?>
  <div style="text-align: center">
    <h2>Collection list</h2>
  </div><br/>

<?php
include 'includes/dbh.inc.php';
$set_id = @$_GET['set_id'];


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

foreach ($searchresult as $key=>$value){

echo '
  <div class="col-md-2">
  <div class="thumbnail">
  <a href="'.$value['card_img'].'" rel="lightbox">
  <img src="'.$value['card_img'].'" alt="'.$value['card_name'].'">
  </a>
  <ul class="list-group">
  <li class="list-group-item list-group-item-info"> Card Name: '.$value['card_name'].'</li>
  <li class="list-group-item list-group-item-success">'.$value['extranum'].' spares </li>
  <li class="list-group-item list-group-item-warning">'.$value['missnum'].' missings</li>
  </ul>
  </div>
  </div>
  ';
}
?>

	<div style="height: 200px; visibility:hidden;"></div>	

<?php
	include_once 'includes/footer.php';
?>