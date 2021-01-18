<?php
session_start();
include './mycon.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$message = $_REQUEST['message'];
$q="insert into contact(name,email,mobile,message,duration) values('$name','$email','$mobile','$message',now())";
if($con->query($q))
{
    $_SESSION['con_save']="<p style='color:green;font-weight:bold;'>Contact has saved!</p>";
}
else
{
    $_SESSION['con_save']="<p style='color:red;'>Contact can't be saved!</p>";
}
header("location:./contact.php");
?>