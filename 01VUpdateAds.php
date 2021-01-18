<?php
session_start();
include './mycon.php';

    $aid=$_REQUEST['aid'];
    $title=$_REQUEST['title'];
    $category=$_REQUEST['category'];
$description=$_REQUEST['description'];
$price=$_REQUEST['price'];
$about=$_REQUEST['about'];
$q="update ads set title='$title',category='$category',description='$description',price='$price',about='$about',duration=now() where aid=$aid";
if($con->query($q))
{
    $_SESSION['pupdate']="<p style='color:blue;font-weight:bold;'>Information successfully changed.</p>";
}
else
{
    $_SESSION['pupdate']="<p style='color:red;font-weight:red;'>Information can't be change.</p>";
}
header("location:./01VDetail.php?aid=$aid");

?>