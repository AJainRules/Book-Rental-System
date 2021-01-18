<?php
session_start();
include './mycon.php';
$email = $_REQUEST['email'];
$password= $_REQUEST['password'];
$q="select * from vender where email='$email' and password='$password'";
$re=$con->query($q);
if($email=="admin@gmail.com" && $password=="apoorv")
{
    $_SESSION['admin']="Admin";
    header("location:./01AHome.php");
}
else if($r=$re->fetch_assoc())
{
    $_SESSION['id']=$r['id'];
    header("location:./01VHome.php");
}
 else {
    $_SESSION['fail']="<p style='color:red;font-weight:bold;'>Sorry Login has failed!</p>";
    header("location:./login.php");
 }

?>