<?php
require 'logconnect.php';
var_dump($_GET);if(!isset($_GET['btn_sb'])){
	header("localtion:register.php");
	exit();
}
$fn=$_GET['author'];
$ln=$_GET['author1'];
$email=$_GET['email'];
$pass=$_GET['password'];
$cpass=$_GET['password1'];
$phnum=$_GET['phonenum'];
$age=$_GET['age'];
$gen=$_GET['gender'];
$isactive=1;
$dt= date("Y-m-d");
$usertype=2;
$profile="";
if($pass!=$cpass){
	header("localtion:register.php");
	exit();
}
echo $fn.$ln.$email;

$qry="INSERT INTO user(first_name,last_name,profile_pic,email,password,mob_no,gender,age,DOI,DOU,isactive,user_type)VALUES('".$fn."','".$ln."','".$profile."','".$email."','".$pass."','".$phnum."','".$gen."','".$age."','".$dt."','".$dt."',$isactive,$usertype)";
echo $qry;
$rs=mysqli_query($con,$qry);
if($rs)
{
	echo "insert sucess";
	header("location:login.php");
}
else
{
	echo "insert fail";
}
?>