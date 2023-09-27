
<?php 
require 'dbconnect.php';
session_start();
$uid=$_SESSION['id'];
// echo $uid;
		$qry="SELECT * FROM cart where user_id=$uid";
		
		$rs=mysqli_query($con,$qry);

$qry1="SELECT * FROM product_order ORDER BY id DESC LIMIT 1";

$rs1=mysqli_query($con,$qry1);
if(mysqli_num_rows($rs1)>0)
{
	$row1=mysqli_fetch_assoc($rs1);
	$orderuser=$row1['userorder_id']+1;
}
else
{
	$orderuser=1;
}

if(mysqli_num_rows($rs)>0)
{
	$last_id="";
	while($row=mysqli_fetch_assoc($rs))
	{
		$pro_id=$row['product_id'];
		$u_id=$row['user_id'];
		$cart_id=$row['id'];
		
		$qry_p="SELECT * FROM product where id=$pro_id";
		// echo $qry_p;

		$rs_p=mysqli_query($con,$qry_p);
		$row_p=mysqli_fetch_assoc($rs_p);
		$pp=$row_p['price'];
		$qty=$row['quantity'];
		// $isactive=1;
		$dt=date("Y-m-d");

		
		$qry_o="INSERT INTO product_order(userorder_id,cart_id,product_id,user_id,price,quantity,DOI,DOU) values($orderuser,'".$cart_id."','".$pro_id."','".$u_id."','".$pp."','".$qty."','".$dt."','".$dt."')";
		echo $qry_o;

		$rs_o=mysqli_query($con,$qry_o);
		$last_id = $last_id . mysqli_insert_id($con) . ",";
	}
	$last_id = trim($last_id,",");
}

header("Location:procheckout.php?last_id=$last_id");

?>