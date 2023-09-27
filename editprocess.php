<?php
require 'dbconnect.php';
$id=$_POST['id'];
$nm=$_POST['user_name'];
$email=$_POST['user_email'];
$pwd=$_POST['pwd'];
$add=$_POST['address'];
$pn=$_POST['phone_no'];
$qry="UPDATE user SET user_name='".$nm."',address='".$add."',email='".$email."',password='".$pwd."',mobile_no='".$pn."' WHERE id=$id";
echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	//echo "updated";
	header("location:editpro.php");
	exit();
}
else
{
	echo "error";
}
?>
