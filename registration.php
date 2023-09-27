<?php
require 'dbconnect.php';

var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:register.php");
	exit();
}
//$id = $_POST['id'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$un = $_POST['username'];
$email = $_POST['email'];
$mno = $_POST['mobilenum'];
$gen = $_POST['gender'];
$paswd = $_POST['password'];
$conpaswd = $_POST['confirmpassword'];
$security_question=$_POST['security_question'];
$security_answer=$_POST['security_answer'];

$isactive=1;
$doi=date('d-m-y');
$dou=date('d-m-y');

echo $fn.$ln.$un.$email.$mno.$gen.$paswd.$conpaswd.$security_question.$security_answer.$isactive.$doi.$dou;
//exit();
$qry="INSERT into user_tbl(firstname,lastname,username,email,mobilenum,gender,password,confirmpassword,security_question,security_answer,isactive,Doi,Dou) VALUES('".$fn."','".$ln."','".$un."','".$email."',$mno,'".$gen."','".$paswd."','".$conpaswd."','".$security_question."','".$security_answer."','".$isactive."','".$doi."','".$dou."')";
echo $qry;
$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
}
?>