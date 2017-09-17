<?php
/**
 * Created by PhpStorm.
 * User: ryu98
 * Date: 2017/9/18
 * Time: 10:12
 */
ob_start();
session_start();
include_once 'dbh.inc.php';
if (!isset($_SESSION['u_id'])){
    header("location:../login.php");

}
global $conn;
$user_uid = $_SESSION['u_id'];
$set_id = $_GET['set_id'];
$sql = "DELETE FROM USER_SETS WHERE user_id = '$user_uid' and set_id='$set_id'";
mysqli_query($conn, $sql);
echo "Remove successfully!";