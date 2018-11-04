<?php 

	include('connect.php');

	$aydi = $_POST['_aydi'];

	$select = "SELECT prod_cat_stat FROM jamsfms_r_prod_category WHERE prod_cat_id = $aydi ";

	$selectresult = mysqli_query( $connect, $select);

	while ($row = mysqli_fetch_assoc($selectresult)) {
                $aaydi = $row['prod_cat_stat'];

				}
		echo $aaydi;
	if ($aaydi == 0){

	$updatequery = "UPDATE `jamsfms_r_prod_category` SET `prod_cat_stat`= 1  WHERE prod_cat_id = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_prod_category` SET `prod_cat_stat`= 1  WHERE prod_cat_id = $aydi";
	}
	else if($aaydi == 1)
	{
		$updatequery = "UPDATE `jamsfms_r_prod_category` SET `prod_cat_stat`= 0  WHERE prod_cat_id = $aydi";

	mysqli_query($connect, $updatequery);
	echo "UPDATE `jamsfms_r_prod_category` SET `prod_cat_stat`= 0  WHERE prod_cat_id = $aydi";
	}
	//echo $insert_pass;
?>