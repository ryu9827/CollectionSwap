<?php
include_once 'dbh.inc.php';
global $conn;

ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_id = $_SESSION['u_id'];   

$obj = $_POST['post_json'];
var_dump($_POST);
$cardset =json_decode($obj,true);
//$test = array('a001'=>2,'a002'=>2,'a003'=>1,'a004'=>1,'a005'=>2);
//$test = json_encode($test);
//$cardset = json_decode($test,true);

$user_uid = 'amy';

foreach($cardset as $key => $value){
    
    $sql = "SELECT * FROM cards_status WHERE card_id = '$key' AND user_uid = '$user_uid'";
    $res = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($res);
  
//check if the user already manage this card 
    if($resultCheck > 0){
        $row = mysqli_fetch_array($res);
        $status = $row[card_status];

        if(!($status == $value)){
//if the card already exit in database, update status
            if($value == 3){
               $sql = "DELETE FROM cards_status WHERE card_id = '$key' AND user_uid = '$user_uid'";
               mysqli_query($conn, $sql);
                
            }
            else{
                $sql = "UPDATE cards_status SET card_status = '$value' WHERE card_id = '$key' AND user_uid = '$user_uid'";
                mysqli_query($conn, $sql);
                
            }
            
        }
        
    }
    
    //if the card do not exist in database, insert a new record
    else{
       if($value == 1 || $value == 2){
           //echo $value;
           $card_id = $key;
           $card_status = $value; 
           $sql = "INSERT INTO cards_status (user_uid,card_id,card_status) VALUES('$user_uid','$card_id','$card_status')";
           mysqli_query($conn, $sql);
             
       }
    }
}



