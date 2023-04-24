<?php
$id = @$_GET['id'];
$imagesql = "SELECT * FROM products WHERE id='$id'";
$checkimage = mysqli_query($dbconn, $imagesql);
	$imagerow = mysqli_fetch_assoc($checkimage);
	$proname = $imagerow['proname'];
	$protype = $imagerow['protype'];
	$barcode = $imagerow['barcode'];
	$procode = $imagerow['procode'];
	$quantity = $imagerow['quantity'];
	$proimage = $imagerow['proimage'];
	$price = $imagerow['price'];
	$prodescription = $imagerow['prodescription'];
	
	// For the first picture
	if ($proimage == "")
	{
		$pic = "images/Product.png";
	}
	else
	{
		$pic = "userdata/product_images/".$proimage;
	}
?>