<?php 

	include('connect.php');

	$insert_name = $_POST['_name'];
	$insert_mname = $_POST['_mname'];
	$insert_lname = $_POST['_lname'];
	$insert_type = $_POST['_acctype'];
	$insert_username = $_POST['_username'];
	$insert_pass = $_POST['_defpass'];

	
	/*$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?~@#-_+<>[]{}";
	$insert_pass = substr(str_shuffle($chars),0,6);
	$insert_username = substr($insert_name, 0, 1) . substr($insert_mname, 0, 1) . $insert_lname. $insert_type;*/

	$insertquery = "INSERT INTO `jamfms_r_useraccount`( `acctype_fk`, `username`, `pass`, `fname`, `mname`, `lname`) VALUES ($insert_type, '$insert_username', '$insert_pass', '$insert_name','$insert_mname', '$insert_lname' )";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamfms_r_useraccount`( `acctype_fk`, `username`, `pass`, `fname`, `mname`, `lname`) VALUES ($insert_type, '$insert_username', '$insert_pass', '$insert_name','$insert_mname', '$insert_lname' )";
	
	//echo $insert_pass;
?>