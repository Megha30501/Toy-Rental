<?php
 session_start();
$u_id=$_SESSION['id'];


require 'dbconnect.php';
 	var_dump($_POST);

if(!isset($_POST['btn_sb']))
{
	header("location:checkout.php");
	exit();
}

   

$qry1="SELECT * FROM user where id=$u_id";
$rs1=mysqli_query($con,$qry1);
$row1=mysqli_fetch_assoc($rs1);
$uid=$row1['id'];
$p_id=$_POST['package_id'];
$qry2="SELECT * FROM packages where id=$p_id"; 
$rs2=mysqli_query($con,$qry2);
$row2=mysqli_fetch_assoc($rs2);
$price=$_POST['prices'];                                                   

$fn=$_POST['first_name'];
$add=$_POST['address'];
$pd=$_POST['postalcode'];
$ph_no=$_POST['phone'];

$dt=date("Y-m-d");
$ag=$_POST['age'];
$isactive=1;
$qry="INSERT INTO `pack_order`(`user_id`,`package_id`,`name`,`address`,`phone`,`postalcode`,`price`,`duration`,`DOI`,`DOU`,`isactive`)VALUES('".$uid."','".$p_id."','".$fn."','".$add."','".$ph_no."','".$pd."','".$price."','".$ag."','".$dt."','".$dt."','".$isactive."')";
	$rs =mysqli_query($con,$qry);
	if($rs)
	{
		//echo "success";
		header("location:invoice.php");
	}
	else
	{
			echo "error";
	}
?>