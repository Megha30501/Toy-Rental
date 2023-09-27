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


//$price=$row2['price'];                                                   

$qry3="SELECT * FROM cart where user_id=$u_id";
$rs3=mysqli_query($con,$qry3);
if(mysqli_num_rows($rs3)>0)
{
	while($row3=mysqli_fetch_assoc($rs3))
	{
	$p_id=$row3['product_id'];
	$qry2="SELECT * FROM product where id=$p_id"; 
	$rs2=mysqli_query($con,$qry2);
	$row2=mysqli_fetch_assoc($rs2);

	$price=$row2['price'];
	$qn=$row3['quantity'];
	$fn=$_POST['first_name'];
	$id=$_POST['last_id'];
	$add=$_POST['address'];
	$pd=$_POST['postalcode'];
	$ph_no=$_POST['phone'];

	$dt=date("Y-m-d");
	$qry = "UPDATE product_order SET `name`='".$fn."' , `address`= '".$add."',`phone`= '".$ph_no."',`postalcode`= '".$pd."' WHERE `id` in (".$id.") "; 
	 $qry1="INSERT INTO `view_product`(`user_id`,`product_id`,`name`,`address`,`phone`,`postalcode`,`quantity`,`price`,`DOI`,`DOU`)VALUES('".$uid."','".$p_id."','".$fn."','".$add."','".$ph_no."','".$pd."','".$qn."','".$price."','".$dt."','".$dt."')";
	echo $qry;

$rs1 =mysqli_query($con,$qry1);
	$rs =mysqli_query($con,$qry);
}
}
	if($rs)
	{
		echo "success";
		header("location:proinvoice.php?id=$id");
	}
	else
	{
			echo "error";
	}
?>