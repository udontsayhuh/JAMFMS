<?php 

	include('connect.php');

	$aydi = $_POST['_aydi'];

	$select = "SELECT status FROM jamsfms_r_customer WHERE customerid = $aydi ";

	$selectresult = mysqli_query( $connect, $select);

	while ($row = mysqli_fetch_assoc($selectresult)) {
                $aaydi = $row['status'];

				}
		echo $aaydi;
	if ($aaydi == 0){

	$updatequery = "UPDATE `jamsfms_r_customer` SET `status`= 1  WHERE customerid = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_customer` SET `status`= 1  WHERE customerid = $aydi";
	}
	else if($aaydi == 1)
	{
		$updatequery = "UPDATE `jamsfms_r_customer` SET `status`= 0  WHERE customerid = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_customer` SET `status`= 0  WHERE customerid = $aydi";
	}
	//echo $insert_pass;
?>