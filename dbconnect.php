<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die("connection failed");
}
$db=mysqli_select_db($con,"toy");
if(!$db)
{
	echo "Databse not selected";
}
?>