<?php
session_start();
include './mycon.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$message = $_REQUEST['message'];
$title = $_REQUEST['title'];
$vid = $_REQUEST['vid'];
$aid=$_REQUEST['aid'];
$q="insert into buyer(name,mobile,email,message,vid,duration,aid,title)values('$name','$mobile','$email','$message',$vid,now(),'$aid','$title');";
if($con->query($q))
{
    $_SESSION['b_save']="<p style='font-weight:bold;'>Buyer successfully saved!</p>";
}
else
{
   $_SESSION['b_save']="<p>Buyer cant be saved!</p>";
}
header("location:./details.php?aid=$aid");

?>