<?php 

	include('connect.php');

	$insert_product = $_POST['_prodname'];
	$insert_desc = $_POST['_proddesc'];


	

	$insertquery = "INSERT INTO `jamsfms_r_prod_category`( `prod_cat_name`, `prod_cat_desc`) VALUES ('$insert_product', '$insert_desc')";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamsfms_r_prod_category`( `prod_cat_name`, `prod_cat_desc`) VALUES ('$insert_product', '$insert_desc')";
	//echo "hello";
	
	//echo $insert_pass;
?>


