<?php

$act=$_POST['act'];

if ($act=='sendRequest'){
$name = $_POST['name'];
error_log($name,3,'my-errors.log');
$set_id = $_POST['set_id'];
error_log($set_id,3,'my-errors.log');
}

?>