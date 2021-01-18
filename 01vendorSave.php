<?php
session_start();
include './mycon.php';
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$mobile  = $_REQUEST['mobile'];
$pic = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];
$location="pic/vender/";
move_uploaded_file($tmp, $location.$pic);
$address=$_REQUEST['address'];
$q="insert into vender(name,age,email,password,mobile,pic,address,duration)values('$name',$age,'$email','$password','$mobile','$pic','$address',now());";
if($con->query($q))
{
   $_SESSION['vsave']="<p style='color:green;font-weight:bold;'>Registration successfully Completed.</p>";
}
else
{
    $_SESSION['vsave']="<p style='color:red;font-weight:bold;'>Registration has failed!</p>";
}
header("location:./register.php");

?>