<?php 

	include('connect.php');

	$insert_po = $_POST['_po'];
	$insert_cc = $_POST['_cc'];
	$insert_prod = $_POST['_prod'];
	$insert_qty = $_POST['_qty'];
	$insert_dd = $_POST['_dd'];
	$insert_amt = $_POST['_amt'];

	$insertquery = "INSERT INTO `jamsfms_r_sales`( `customer_code`, `po_num`, `fk_prod_id`, `so_qty`, `deldate`, `prod_poamount`) VALUES ('$insert_cc', '$insert_po', $insert_prod, $insert_qty, '$insert_dd', $insert_amt)";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamsfms_r_sales`( `customer_code`, `po_num`, `fk_prod_id`, `so_qty`, `deldate`, `prod_poamount`) VALUES ('$insert_cc', '$insert_po', $insert_prod, $insert_qty, '$insert_dd', $insert_amt)";
	
	//echo $insert_pass;
?>