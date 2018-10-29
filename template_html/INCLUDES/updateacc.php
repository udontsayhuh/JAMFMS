<?php 

	include('connect.php');

	$insert_name = $_POST['_name'];
	$insert_mname = $_POST['_mname'];
	$insert_lname = $_POST['_lname'];
	$aydi = $_POST['_aydi'];




	$updatequery = "UPDATE `jamfms_r_useraccount` SET `fname`='$insert_name',`mname`='$insert_mname',`lname`='$insert_lname' WHERE useraccountID = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamfms_r_useraccount` SET `fname`='$insert_name',`mname`='$insert_mname',`lname`='$insert_lname' WHERE useraccountID = $aydi";
	
	//echo $insert_pass;
?>