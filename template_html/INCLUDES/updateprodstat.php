<?php 

	include('connect.php');

	$aydi = $_POST['_aydi'];

	$select = "SELECT prod_status FROM jamsfms_r_product WHERE prod_id = $aydi ";

	$selectresult = mysqli_query( $connect, $select);

	while ($row = mysqli_fetch_assoc($selectresult)) {
                $aaydi = $row['prod_status'];

				}
		echo $aaydi;
	if ($aaydi == 0){

	$updatequery = "UPDATE `jamsfms_r_product` SET `prod_status`= 1  WHERE prod_id = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_product` SET `prod_status`= 1  WHERE prod_id = $aydi";
	}
	else if($aaydi == 1)
	{
		$updatequery = "UPDATE `jamsfms_r_product` SET `prod_status`= 0  WHERE prod_id = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_product` SET `prod_status`= 0  WHERE prod_id = $aydi";
	}
	//echo $insert_pass;
?>