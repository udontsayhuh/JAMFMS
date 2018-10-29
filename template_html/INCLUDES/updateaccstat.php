<?php 

	include('connect.php');

	$aydi = $_POST['_aydi'];

	$select = "SELECT useracc_status FROM jamfms_r_useraccount WHERE useraccountID = $aydi ";

	$selectresult = mysqli_query( $connect, $select);

	while ($row = mysqli_fetch_assoc($selectresult)) {
                $aaydi = $row['useracc_status'];

				}
		echo $aaydi;
	if ($aaydi == 0){

	$updatequery = "UPDATE `jamfms_r_useraccount` SET `useracc_status`= 1  WHERE useraccountID = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamfms_r_useraccount` SET `useracc_status`= 1  WHERE useraccountID = $aydi";
	}
	else if($aaydi == 1)
	{
		$updatequery = "UPDATE `jamfms_r_useraccount` SET `useracc_status`= 0  WHERE useraccountID = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamfms_r_useraccount` SET `useracc_status`= 0  WHERE useraccountID = $aydi";
	}
	//echo $insert_pass;
?>