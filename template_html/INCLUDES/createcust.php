<?php 

	include('connect.php');

	$insert_fname = $_POST['_fname'];
	$insert_lname = $_POST['_lname'];
	$insert_job = $_POST['_job'];
	$insert_email = $_POST['_email_add'];
	$insert_telnum = $_POST['_tel_num'];
	$insert_company = $_POST['_company'];
	$insert_off_add = $_POST['_off_add'];
	$insert_tin = $_POST['_tin'];
	$insert_ctelnum = $_POST['_com_tel_num'];

	

	$insertquery = "INSERT INTO `jamsfms_r_customer`( `fname`, `lname`, `job`, `email`, `tel_no`, `companyname`, `off_add`, `TIN`, `company_tel`) VALUES ('$insert_fname', '$insert_lname','$insert_job','$insert_email', '$insert_telnum', '$insert_company', '$insert_off_add', '$insert_tin','$insert_ctelnum')";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamsfms_r_customer`( `fname`, `lname`, `job`, `email`, `tel_no`, `companyname`, `off_add`, `TIN`, `company_tel`) VALUES ('$insert_fname', '$insert_lname','$insert_job','$insert_email', '$insert_telnum', '$insert_company', '$insert_off_add', '$insert_tin','$insert_ctelnum')";
	
	//echo $insert_pass;
?>