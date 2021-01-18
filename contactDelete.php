<?php
session_start();
include './mycon.php';
$cid = $_REQUEST['cid'];
$q="delete from contact where cid=$cid";
if($con->query($q))
{
    $_SESSION['con_del']="<p style='color:green;'>Contact has removed!</p>";
}
else
{
    $_SESSION['con_del']="<p style='color:red;'>Contact can't be removed!</p>";
}
header("location:./01AContact.php");
?>