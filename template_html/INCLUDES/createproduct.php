<?php 

	include('connect.php');

	$insert_product = $_POST['_prodname'];
	$insert_desc = $_POST['_proddesc'];
	$insert_machine = $_POST['_mncost'];
	$insert_material = $_POST['_matcost'];
	$insert_unit = $_POST['_unitmes'];
	$insert_type = $_POST['_id'];

	

	$insertquery = "INSERT INTO `jamsfms_r_product`( `prod_name`, `prod_desc`, `prod_machinecost`, `prod_materialcost`, `prod_unitmeasure`,  `fk_prodcat`) VALUES ('$insert_product', '$insert_desc', $insert_machine, $insert_material, '$insert_unit', $insert_type)";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamsfms_r_product`( `prod_name`, `prod_desc`, `prod_machinecost`, `prod_materialcost`, `prod_unitmeasure`,  `fk_prodcat`) VALUES ('$insert_product', '$insert_desc', $insert_machine, $insert_material, '$insert_unit', $insert_type)";
	echo "hello";
	
	//echo $insert_pass;
?>