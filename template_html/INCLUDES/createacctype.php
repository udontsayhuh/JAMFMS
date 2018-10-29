<?php 

	include('connect.php');

	$insert_type = $_POST['_accounttype'];
	$insert_desc = $_POST['_accdesc'];

	$insertquery = "INSERT INTO `jamfms_r_accounttype`( `acctype_name`, `acctype_desc`) VALUES ('$insert_type','$insert_desc')";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamfms_r_accounttype`( `acctype_name`, `acctype_desc`) VALUES ('$insert_type','$insert_desc')";
	
	//echo $insert_pass;
?>