<?php
session_start();
include './mycon.php';
$id=$_REQUEST['id'];
$q="delete from vender where id=$id";
if($con->query($q))
{
    echo "delete";
}
else
{
    $_SESSION['sd']="<p style='color:red;font-weight:bold;'>Vender can't be Delete because existing Ads should be delete before.</p>";
    header("location:./01ASellerProfile.php?id=$id");
}

?>