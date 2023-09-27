<?php

require 'logconnect.php';
// var_dump($_REQUEST);
$id = $_REQUEST['id'];
$qry="DELETE FROM `pack_order` WHERE user_id = '".$id."'";
$rs = mysqli_query($con,$qry);
if($rs)
{
	echo "success";
}

?>