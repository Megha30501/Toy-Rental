
<?php
session_start();
$u_id=$_SESSION['id'];

require'dbconnect.php';
//var_dump($_POST);
if(!isset($_POST['submit']))
{
	header("location:feedback (1).php");
}
//$isactive = 1;
//$sid=0;
//$date = date('Y-m-d'); 
$qry1="SELECT * FROM user where id=$u_id";
$rs1=mysqli_query($con,$qry1);
$row1=mysqli_fetch_assoc($rs1);
$uid=$row1['id'];

$cn=$_POST['txt1'];

	$qry="INSERT INTO `feedback`(`user_id`,`feedback`)VALUES('".$uid."','".$cn."')";
	$rs =mysqli_query($con,$qry);
	if($rs)
	{
		//echo "success";
		header("location:feedback (1).php");
	}
	else
	{
	// 		echo "error";
	}
?>