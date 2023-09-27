<?php
require 'dbconnect.php';
$qry="DELETE FROM cart";
$rs=mysqli_query($con,$qry);
if($rs)
{
	header("location:index.php");
}
?>