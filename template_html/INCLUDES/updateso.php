<?php 

	include('connect.php');

	$insert_so = $_POST['_so'];
	//$insert_prod = $_POST['_prod'];
	$insert_qty = $_POST['_qty'];
	$insert_ddate = $_POST['_ddate'];
	$insert_cust = $_POST['_cust'];
	$aydi = $_POST['_aydi'];
	$amt = $_POST['_amt'];




	$updatequery = "UPDATE `jamsfms_r_sales` SET `customer_code`='$insert_cust',`po_num`=$insert_so,`so_qty`=$insert_qty, deldate = '$insert_ddate', prod_poamount = $amt  WHERE so_id = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_sales` SET `fk_prod_id`= '$insert_prod',`customer_code`='$insert_cust',`po_num`=$insert_so,`so_qty`=$insert_qty, prod_poamount = $amt WHERE so_id = $aydi";
	
	//echo $insert_pass;
?>