<?php 

	include('connect.php');

	$insert_stname = $_POST['_st_name'];
	$insert_staddress = $_POST['_st_address'];
	$insert_stcontact = $_POST['_st_contact'];
	$insert_stcat = $_POST['_st_cat'];
	$insert_stpercent = $_POST['_st_percent'];
	$insert_stpo = $_POST['_st_po'];
	$insert_stacc = $_POST['_st_acc'];


	if ($insert_stpercent == 0){ 
	$insertquery = "INSERT INTO `jamsfms_r_stakeholder`(`stkh_name`, `stkh_address`, `stkh_contact`, `stkh_percent`, `fk_st_type_id`, `fk_so_id`, `fk_user_id` ) VALUES ('$insert_stname', '$insert_staddress', '$insert_stcontact', (select per from (select distinct stkh_percent per from jamsfms_r_stakeholder where fk_so_id = $insert_stpo) subquery), $insert_stcat, $insert_stpo , $insert_stacc)";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamsfms_r_stakeholder`(`stkh_name`, `stkh_address`, `stkh_contact`, `stkh_percent`, `fk_st_type_id`, `fk_so_id`, `fk_user_id` ) VALUES ('$insert_stname', '$insert_staddress', '$insert_stcontact', (select per from (select distinct stkh_percent per from jamsfms_r_stakeholder where fk_so_id = $insert_stpo) subquery), $insert_stcat, $insert_stpo , $insert_stacc)";
	}

	else{

		$insertquery = "INSERT INTO `jamsfms_r_stakeholder`(`stkh_name`, `stkh_address`, `stkh_contact`, `stkh_percent`, `fk_st_type_id`, `fk_so_id`, `fk_user_id` ) VALUES ('$insert_stname', '$insert_staddress', '$insert_stcontact',  $insert_stpercent, $insert_stcat, $insert_stpo, $insert_stacc)";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `jamsfms_r_stakeholder`(`stkh_name`, `stkh_address`, `stkh_contact`, `stkh_percent`, `fk_st_type_id`, `fk_so_id`, `fk_user_id` ) VALUES ('$insert_stname', '$insert_staddress', '$insert_stcontact', $insert_stpercent, $insert_stcat, $insert_stpo, $insert_stacc)";
	}
	//echo $insert_pass;
?>