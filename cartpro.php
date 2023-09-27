<?php
require 'dbconnect.php';
session_start();

	
 $pro_id=$_GET['id'];
 $Userid=$_SESSION['id'];
 $Isactive=1;
 $DOI=date('y-m-d');
 $DOU=date('y-m-d');

 $qry="INSERT into cart(package_id,user_id,isactive,doi) values ('".$pro_id."','".$Userid."','".$Isactive."','".$DOI."')";
 $rs=mysqli_query($con,$qry);
 if($rs)
 {
 	error_log("successfull");
 	header("location:checkout.php?id=$pro_id");
 	echo "success";
 }
 else
 {
 	echo "Error";
 }

