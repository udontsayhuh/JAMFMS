<?php 

	include('connect.php');

	$insert_stname = $_POST['_stname'];
	$insert_staddress = $_POST['_staddress'];
	$insert_stcontact = $_POST['_stcontact'];
	$insert_stpercent = $_POST['_stpercent'];
	$aydi = $_POST['_aydi'];




	$updatequery = "UPDATE `jamsfms_r_stakeholder` SET `stkh_name`= '$insert_stname',`stkh_address`='$insert_staddress',`stkh_contact`=$insert_stcontact,`stkh_percent`=$insert_stpercent WHERE stkhid = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_stakeholder` SET `stkh_name`= '$insert_stname',`stkh_address`='$insert_staddress',`stkh_contact`='$insert_stcontact',`stkh_percent`='$insert_stpercent' WHERE stkhid = $aydi";
	
	//echo $insert_pass;
?>