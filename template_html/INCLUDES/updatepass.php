<?php 

	include('connect.php');

	$pass = $_POST['_pass'];
	$aydi = $_POST['_id'];

	$query = "UPDATE jamfms_r_useraccount SET pass = '$pass' where useraccountID = $aydi";

	mysqli_query($connect, $query);
	echo "UPDATE jamfms_r_useraccount SET pass = '$pass' where useraccountID = $aydi";
	
	//echo $insert_pass;
?>