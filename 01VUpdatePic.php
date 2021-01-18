<?php
session_start();
include './mycon.php';
$id=$_REQUEST['id'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="pic/vender/";
move_uploaded_file($tmp, $location.$pic);
$q="update vender set pic='$pic' where id=$id";
if($con->query($q))
{
    header("location:./01VHome.php");
}
else
{
    echo "Pic can't be change.";
}
?>