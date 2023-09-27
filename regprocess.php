<?php

require 'dbconnect.php';
if(!isset($_POST['btn_sb']))
{
	header("location:register.php");
	exit();
}
$email=$_POST['user_email'];
$qrye="SELECT * FROM user";
$rse=mysqli_query($con,$qrye);
while($rowe=mysqli_fetch_assoc($rse))
{
	$emaile=$rowe['email'];
	if($email==$emaile)
	{
		echo "<script>alert('You are already registered')</script>";
		echo "<script>window.location='register.php'</script>";
		exit();
	}

}


$un=$_POST['user_name'];

$add=$_POST['address'];
$pass=$_POST['pwd'];
$ph_no=$_POST['phone_no'];
$age=$_POST['age'];
$cpss=$_POST['cpss'];
$isactive=1;
$dt=date("Y-m-d");
$usertype=2;
if($pass!=$cpss)
{
	//echo "password does not match" ;
	header("location:register.php?err=1");
	
	exit();
}
$qry="INSERT INTO user(user_name,address,email,password,mobile_no,DOI,DOU,isactive,user_type,age)VALUES('".$un."','".$add."','".$email."','".$pass."','".$ph_no."','".$dt."','".$dt."',$isactive,$usertype,'".$age."')";
echo $qry;

$rs=mysqli_query($con,$qry);
if($rs)
{
	echo "Inserted successfully";
	header("location:login.php");
}
else
{
	echo "try again";
}

?>