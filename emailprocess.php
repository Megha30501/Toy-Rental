<?php
session_start();
	require 'dbconnect.php';
	if(!isset($_POST['sub']))
	{
		header("location:reset-password.php");
		exit();
	}

	$un=$_POST['email'];
	echo $un;
	$_SESSION['id']=$un;
	//$usertype=$_POST['usertype'];
	//$_SESSION['utype']=$usertype;

	
if($usertype=="user")
{

	$qry="SELECT * FROM user WHERE email='".$un."' AND isactive=1";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$odata=$row['email'];

	if($odata==$un) 
	{
		header("location:forgot_sec.php");
		exit();
	}
	else
	{
		echo "Please enter your true email";
		header("location:reset-password.php");
		exit();
	}
}

	
?>