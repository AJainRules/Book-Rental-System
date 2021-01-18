<?php
session_start();
include './mycon.php';
$id=$_REQUEST['id'];
$status = $_REQUEST['status'];
$q="update vender set status='$status' where id=$id;";
if($con->query($q))
{
    $_SESSION['v_update']="<p style='color:green;font-weight:bold;'>Status has updated!</p>";
}
else
{
    $_SESSION['v_update']="<p style='color:red;font-weight:bold;'>Status has not updated!</p>";
}
header("location:./01ASellerProfile.php?id=$id");

?>