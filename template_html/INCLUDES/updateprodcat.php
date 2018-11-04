<?php 

	include('connect.php');

	$insert_prod = $_POST['_prod'];
	$insert_desc = $_POST['_desc'];
	$aydi = $_POST['_aydi'];




	$updatequery = "UPDATE `jamsfms_r_prod_category` SET `prod_cat_name`='$insert_prod',`prod_cat_desc`='$insert_desc' WHERE prod_cat_id = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_prod_category` SET `prod_cat_name`='$insert_prod',`prod_cat_desc`='$insert_desc' WHERE prod_cat_id = $aydi";
	
	//echo $insert_pass;
?>