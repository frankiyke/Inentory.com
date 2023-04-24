<?php
	$proname = "";
	$protype = "";
	$barcode = "";
	$procode = "";
	$quantity = "";
	$proimage = "";
	$price = "";
	$prodescription = "";

	$e_checks = "SELECT * FROM products";
	$e_check = mysqli_query($dbconn, $e_checks);
	$check = mysqli_num_rows($e_check);
	
	if ($check == 0){
		//$add = mysql_query("INSERT INTO cars VALUES ('','$id_number','$email','$brand_name','$model','$reg_number','$engin_capacity','$image1','$image2','$image3','$image4','$image5','$image6','$gas','$town','$province')");
		$adds = "INSERT INTO products (id_number, email, vin_number, town, province) VALUES( '$id_number', '$email', '$vin_number', '$town', '$province' )";
		$add = mysqli_query ($dbconn, $adds);
	}
	else
	{

	}
?>