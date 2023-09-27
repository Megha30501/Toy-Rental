<?php
require 'dbconnect.php';
session_start();

	
 $toyid=$_GET['id'];
 $Userid=$_SESSION['id'];
 $Isactive=1;
 $DOI=date('y-m-d');
 $DOU=date('y-m-d');
 $qn=1;
 
 $qry1 = "SELECT * FROM cart WHERE `product_id` = '".$toyid."'";
 $rs1=mysqli_query($con,$qry1);
 if (mysqli_num_rows($rs1) == 0) {
 	$qry="INSERT into cart(product_id,user_id,quantity,isactive,DOI,DOU) values ('".$toyid."','".$Userid."','".$qn."','".$Isactive."','".$DOI."','".$DOU."')";
	 $rs=mysqli_query($con,$qry);
	 if($rs)
	 {
	 	error_log("successfull");
	 	header("location:cart.php?id=$toyid");
	 	echo "success";
	 }
	 else
	 {
	 	echo "Error";
	 }

 }
 else{
 	$qry2="UPDATE cart SET quantity=quantity+1 WHERE user_id='$Userid'";
 	echo $qry2;
 	$rs2=mysqli_query($con,$qry2);
 	if($rs2)

 	{
 	header("location:cart.php");}
 	else{
 		echo "sorry";
 	}

 }

 