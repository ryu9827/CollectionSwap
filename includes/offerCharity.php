<?php

include_once 'charity.php';
include_once 'dbh.inc.php';
global $conn;
ob_start(); 
session_start();
if (!isset($_SESSION['u_id'])){
     header("location:../login.php");

	}
        
 $user_uid = $_SESSION['u_uid']; 
  $set_id = $_GET['set_id']; 
 
 $obj = $_POST['post_json'];
 var_dump($_POST);
 $charitylist =json_decode($obj,true);

 
 charityManagement2($charitylist,$user_uid,$set_id);

