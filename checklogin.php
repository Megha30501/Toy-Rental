	<?php
require 'dbconnect.php';
session_start();
//if(!isset($_POST["btn_sb"]))
//{
//	header("location:login.php");
//	exit();
//}
$em=$_POST['email'];
$ps=$_POST['pass'];
$qry="SELECT * FROM user WHERE email='".$em."' and password='".$ps."' and isactive=1";

$qry1="DELETE FROM cart";
$rs1=mysqli_query($con,$qry1);

$rs=mysqli_query($con,$qry);
if(mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	$_SESSION['id']=$row['id'];
	$_SESSION['un']=$row['user_name'];
	//header("location:index.php?wel=done");
	//exit();
	echo "success";
}
else{
	echo "invalid login";
	//header("location:login.php");
}
?>