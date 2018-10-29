<?php 

	include('connect.php');

	$aydi = $_POST['_aydi'];

	$select = "SELECT stkh_status FROM jamsfms_r_stakeholder WHERE stkhid = $aydi ";

	$selectresult = mysqli_query( $connect, $select);

	while ($row = mysqli_fetch_assoc($selectresult)) {
                $aaydi = $row['stkh_status'];

				}
		echo $aaydi;
	if ($aaydi == 0){

	$updatequery = "UPDATE `jamsfms_r_stakeholder` SET `stkh_status`= 1  WHERE stkhid = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_stakeholder` SET `stkh_status`= 1  WHERE stkhid = $aydi";
	}
	else if($aaydi == 1)
	{
		$updatequery = "UPDATE `jamsfms_r_stakeholder` SET `stkh_status`= 0  WHERE stkhid = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_stakeholder` SET `stkh_status`= 0 WHERE stkhid = $aydi";
	}
	//echo $insert_pass;
?>