<?php
session_start();
include './mycon.php';
$name = $_REQUEST['name'];
$p1 = $_REQUEST['p1'];
$p2 = $_REQUEST['p2'];
$p3 = $_REQUEST['p3'];
$p4=$_REQUEST['p4'];
$p5 = $_REQUEST['p5'];
$pic = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];
$location="pic/category/";
move_uploaded_file($tmp, $location.$pic);
$q="insert into category(name,pic,p1,p2,p3,p4,p5)values('$name','$pic','$p1','$p2','$p3','$p4','$p5');";
if($con->query($q))
{
    $_SESSION['catsave']="<p style='color:green;font-weight:bold;'>Category successfully saved!</p>";
}
else
{
    $_SESSION['catsave']="<p style='color:red;font-weight:bold;'>Category not saved!</p>";
}
header("location:./01AHome.php");
?>