<?php 

	include('connect.php');

	$insert_uname = $_POST['_uname'];
	$insert_lname = $_POST['_lname'];
	$insert_job = $_POST['_job'];
	$insert_email = $_POST['_email'];
	$insert_comtel = $_POST['_comtel'];
	$insert_offadd = $_POST['_offadd'];
	$insert_tel = $_POST['_tel'];
	$insert_company = $_POST['_company'];

	$aydi = $_POST['_aydi'];




	$updatequery = "UPDATE `jamsfms_r_customer` SET `fname`='$insert_uname',`lname`='$insert_lname',`job`='$insert_job',`email`='$insert_email',`tel_no`='$insert_tel',`companyname`='$insert_company',`off_add`='$insert_offadd',`company_tel`='$insert_comtel' WHERE customerid = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_customer` SET `fname`='$insert_uname',`lname`='$insert_lname',`job`='$insert_job',`email`='$insert_email',`tel_no`='$insert_tel',`companyname`='$insert_company',`off_add`='$insert_offadd',`company_tel`='$insert_comtel' WHERE customerid = $aydi";
	
	//echo $insert_pass;
?>