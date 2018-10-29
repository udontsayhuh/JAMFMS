<?php 

	include('connect.php');
	$search = $_POST["name"];

		$product = "SELECT prod_name FROM jamsfms_r_product WHERE prod_name LIKE '%search%'";
		mysqli_query($connect, $product);

		while($prod = mysqli_fetch_assoc($product)) {
		    echo "<div>" . $product["prod_name"] . "</div>";
}

		echo "SELECT prod_name FROM jamsfms_r_product WHERE prod_name LIKE '%search%'";
		echo
?>