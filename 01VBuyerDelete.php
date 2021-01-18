<?php
session_start();
include './mycon.php';
$bid=$_REQUEST['bid'];
$q="delete from buyer where bid='$bid'";
if($con->query($q))
{
    $_SESSION['bdelete']="<p style='color:green;font-weight:bold;'>Buyer has removed!</p>";
}
else
{
   $_SESSION['bdelete']="<p style='color:red;'>Buyer can't be removed!</p>";
   
}
header("location:./01ViewBuyer.php");
?>