<?php
/**
 * Created by PhpStorm.
 * User: ryu98
 * Date: 2017/9/18
 * Time: 11:29
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
$sql = "SELECT * FROM USER_SETS WHERE user_id ='$user_uid' and set_id='$set_id'";
$rows = mysqli_query($conn,$sql);
if (mysqli_num_rows($rows) >= 1){
    echo "Nothing changes because you already have this set in the list.";
}
else{
    $addSql = "INSERT INTO USER_SETS (id, user_id, set_id) VALUES (DEFAULT ,'$user_uid', '$set_id')";
    mysqli_query($conn, $addSql);
    header('location:../setsManagement.php');
};




