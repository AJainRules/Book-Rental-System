<?php
session_start();
include './mycon.php';
$aid=$_REQUEST['aid'];
$q="";

if(isset($_FILES['p1']['name']))
{
$p1=$_FILES['p1']['name'];
$tmp1=$_FILES['p1']['tmp_name'];
$location="pic/ads/";
move_uploaded_file($tmp1, $location.$p1);
$q="update ads set p1='$p1' where aid=$aid";
}
if(isset($_FILES['p2']['name']))
{
$p2=$_FILES['p2']['name'];
$tmp2=$_FILES['p2']['tmp_name'];
$location="pic/ads/";
move_uploaded_file($tmp2, $location.$p2);
$q="update ads set p2='$p2' where aid=$aid";
}
if(isset($_FILES['p3']['name']))
{
$p3=$_FILES['p3']['name'];
$tmp3=$_FILES['p3']['tmp_name'];
$location="pic/ads/";
move_uploaded_file($tmp3, $location.$p3);
$q="update ads set p3='$p3' where aid=$aid";
}
if(isset($_FILES['p4']['name']))
{
$p4=$_FILES['p4']['name'];
$tmp4=$_FILES['p4']['tmp_name'];
$location="pic/ads/";
move_uploaded_file($tmp4, $location.$p4);
$q="update ads set p4='$p4' where aid=$aid";
}

if($con->query($q))
{
    $_SESSION['pupdate']="<p style='color:blue;font-weight:bold;'>Image successfully changed.</p>";
}
else
{
    $_SESSION['pupdate']="<p style='color:red;font-weight:red;'>Image can't be change.</p>";
}
header("location:./01VDetail.php?aid=$aid");

?>