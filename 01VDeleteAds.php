<?php
session_start();
include './mycon.php';
$aid=$_REQUEST['aid'];
$q="delete from ads where aid=$aid";
if($con->query($q))
{
    $_SESSION['vdelete']="<p style='color:blue;font-weight:bold;'>Ads successfully Removed.</p>";
}
else
{
    $_SESSION['vdelete']="<p style='color:red;font-weight:bold;'>Ads can't be Removed.</p>";
}
header("location:./01ViewPost.php");

?>