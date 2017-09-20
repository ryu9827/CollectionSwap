<?php

//include_once 'match.php'
include_once  'dbh.inc.php';
//include_once 'sendemail.inc.php';

ob_start(); 
session_start();

//$obj=$_POST['post_json'];
$obj = $_POST['post_json'];
//var_dump($_POST);

//--解析Json，获取对应的变量值
$post_array=json_decode($obj,TRUE);
echo 'setsManagement.php';





