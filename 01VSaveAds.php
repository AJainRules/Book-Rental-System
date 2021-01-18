<?php
session_start();
include './mycon.php';
$title = $_REQUEST['title'];
$category=$_REQUEST['category'];
$about=$_REQUEST['about'];
$price=$_REQUEST['price'];
$description=$_REQUEST['description'];
$vid=$_REQUEST['vid'];
$location="pic/ads/";
$p1=$_FILES['p1']['name'];
$tmp1=$_FILES['p1']['tmp_name'];
move_uploaded_file($tmp1, $location.$p1);
$p2=$_FILES['p2']['name'];
$tmp2=$_FILES['p2']['tmp_name'];
move_uploaded_file($tmp2, $location.$p2);

$p3=$_FILES['p3']['name'];
$tmp3=$_FILES['p3']['tmp_name'];
move_uploaded_file($tmp3, $location.$p3);

$p4=$_FILES['p4']['name'];
$tmp4=$_FILES['p4']['tmp_name'];
move_uploaded_file($tmp4, $location.$p4);

$q="insert into ads(category,title,about,price,description,p1,p2,p3,p4,vid,duration)values('$category','$title','$about','$price','$description','$p1','$p2','$p3','$p4',$vid,now());";
if($con->query($q))
{
    $_SESSION['psave']="<p style='color:green;font-weight:bold;'>Post successfully saved.</p>";
}
else
{
    $_SESSION['psave']="<p style='color:red;font-weight:bold;'>Post not saved.</p>";
}
header("location:./01VPost.php");



?>