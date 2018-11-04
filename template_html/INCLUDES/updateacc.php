<?php 

	include('connect.php');

	$insert_name = $_POST['_name'];
	$insert_mname = $_POST['_mname'];
	$insert_lname = $_POST['_lname'];
	$aydi = $_POST['_aydi'];
	$insert_usname = $_POST['_usname'];
	$insert_urole = $_POST['_urole'];

	if ($insert_urole != "")

	{

	$updatequery = "UPDATE `jamfms_r_useraccount` SET `fname`='$insert_name',`mname`='$insert_mname',`lname`='$insert_lname', username ='$insert_usname', acctype_fk = $insert_urole WHERE useraccountID = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamfms_r_useraccount` SET `fname`='$insert_name',`mname`='$insert_mname',`lname`='$insert_lname' , username ='$insert_usname',  acctype_fk = $insert_urole WHERE useraccountID = $aydi";
	}
	elseif ($insert_urole == "") {
		$updatequery = "UPDATE `jamfms_r_useraccount` SET `fname`='$insert_name',`mname`='$insert_mname',`lname`='$insert_lname', username ='$insert_usname' WHERE useraccountID = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamfms_r_useraccount` SET `fname`='$insert_name',`mname`='$insert_mname',`lname`='$insert_lname' , username ='$insert_usname' WHERE useraccountID = $aydi";
	}
	//echo $insert_pass;
?>