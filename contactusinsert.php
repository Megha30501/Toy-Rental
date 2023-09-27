
<?php
require'dbconnect.php';
//var_dump($_POST);
if(!isset($_POST['submit']))
{
	header("location:contact.php");
}
$isactive = 1;
$date = date('Y-m-d'); 

$nm=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$cn=$_POST['contact'];

$qry="INSERT INTO `contact_us`(`username`,`email`,`phone`,`comment`,`DOI`,`DOU`)VALUES('".$nm."','".$email."','".$phone."','".$cn."','".$date."','".$date."')";
	//echo $qry;
	$rs =mysqli_query($con,$qry);
	if($rs)
	{
		//echo "success";
		header("location:index.php");
	}
	else
	{
	// 		echo "error";
	}
?>