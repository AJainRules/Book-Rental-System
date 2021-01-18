<?php
session_start();
include './mycon.php';
$id=$_REQUEST['id'];
$name = $_REQUEST['name'];
$age =$_REQUEST['age'];
$email = $_REQUEST['email'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$mobile=$_REQUEST['mobile'];
$q="update vender set name='$name',age='$age',email='$email',password='$password',address='$address',mobile='$mobile' where id='$id'";
if($con->query($q))
{
    $_SESSION['uv']="<p style='color:green;font-weight:bold;'>Information has updated!</p>";
}
else
{
    $_SESSION['uv']="<p style='color:red;font-weight:bold;'>Information can't be updated!</p>";
}
header("location:./01VHome.php");

?>