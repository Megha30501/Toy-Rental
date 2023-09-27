<?php
require'dbconnect.php';
session_start();
var_dump($_POST);

$qa=$_POST['qua'];
$p_id=$_POST['p_id'];
$qry="UPDATE cart SET `quantity`='".$qa."' WHERE `id`='".$p_id."'";
echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	echo "updated";
	header("location:cart.php");
	
}
else
{
	echo "error";
}
?>