<?php 

	include('connect.php');

	$insert_stname = $_POST['_st_name'];
	$insert_staddress = $_POST['_st_address'];
	$insert_stcontact = $_POST['_st_contact'];
	$insert_stcat = $_POST['_st_cat'];
	$insert_stpercent = $_POST['_st_percent'];

	
	$insertquery = "INSERT INTO `jamsfms_r_stakeholder`(`stkh_name`, `stkh_address`, `stkh_contact`, `stkh_percent`, `fk_st_type_id`) VALUES ('$insert_stname', '$insert_staddress', '$insert_stcontact', $insert_stpercent, $insert_stcat)";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `INSERT INTO `jamsfms_r_stakeholder`(`stkh_name`, `stkh_address`, `stkh_contact`, `stkh_percent`, `fk_st_type_id`) VALUES ('$insert_stname', '$insert_staddress', '$insert_stcontact', $insert_stpercent, $insert_stcat)";
	
	//echo $insert_pass;
?>