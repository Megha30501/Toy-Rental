<?php
require 'dbconnect.php';

	$cartid=$_GET['id'];
  	
 	$qry= "DELETE FROM cart WHERE id=$cartid";
 	$rs=mysqli_query($con,$qry);
	if($rs)
	{
		echo "deleted";
		header("location:cart.php");
	}
	else
	{
		echo "errer";
	}

	
?>